<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class AssignRequestId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request_id = $request->headers->get('X-Request-Id');
        if (!$request_id) {
            $request_id = (string) Str::uuid();
            $request->headers->set('X-Request-id', $request_id);
        }

        // this is when the response is generated
        $response = $next($request);

        $response->headers->set('X-Request-Id', $request_id);

        return $response;
    }
}
