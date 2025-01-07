@inject('postController', 'App\Http\Controllers\PostController')
@include('includes/header')
<form action="{{ route('create_post') }}" method="post">
    <div class="columns is-multiline">
        <div class="column is-3">
            <div class="field">
                <label class="label">Review Title</label>
                <div class="control">
                    <input type="text" class="input" placeholder="Changed my life forever">
                </div>
            </div>
        </div>
        <div class="column is-12">
            <div class="field">
                <label class="label">Review Body</label>
                <div class="control">
                    <textarea class="textarea" placeholder="I was a different person before I read this..."></textarea>
                </div>
            </div>
        </div>
        <div class="column is-2">
            <div class="field">
                <label class="label">Did you finish it?</label>
                <div class="control">
                    <div class="select">
                        <select>
                            <option value="complete">I completed it!</option>
                            <option value="DNF">I DNF'd it.</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-2">
            <div class="field">
                <label class="label">Score</label>
                <div class="control">
                    <input type="text" class="input" placeholder="4.8">
                </div>
            </div>
        </div>
        <div class="column is-8"></div>
        <div class="column is-4">
            <a href="#" class="button is-primary">Submit</a>
            <a href="#" class="button is-danger">Cancel</a>
        </div>
        <div class="column is-2"></div>
</form>

</div>





@include('includes/footer')
