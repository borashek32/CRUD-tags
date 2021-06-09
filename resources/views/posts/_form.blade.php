@csrf
<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
</div>
<div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea type="text" name="content" class="form-control" id="content">{{ $post->content }}</textarea>
</div>
<div class="mb-3">
    <label for="tags" class="form-label">Tags</label>
    <input type="text" data-role="tagsinput" name="tags" class="form-control" id="tags" value="{{ $tags }}">
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
