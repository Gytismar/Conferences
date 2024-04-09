<div>
    @csrf
    <label for="title-input">Title</label>
    <input id="title-input" type="text" name="title" value="{{ old('title', optional($article ?? null)->title) }}">
</div>
<div>
    <label for="content-input">Content</label>
    <textarea id="content-input" type="text" name="content">{{ old('content', optional($article ?? null)->content) }}</textarea>
</div>
@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
