<div>
    <label for="title-input">Title</label>
    <input id="title-input" type="text" name="title" value="{{ old('title', optional($conference ?? null)->title) }}" @guest readonly @endguest>
</div>
<div>
    <label for="content-input">Content</label>
    <textarea id="content-input" name="content" @guest readonly @endguest>{{ old('content', optional($conference ?? null)->content) }}</textarea>
</div>
<div>
    <label for="conference-date-input">Conference Date</label>
    <input id="conference-date-input" type="date" name="conference_date" value="{{ old('conference_date', optional($conference ?? null)->conference_date) }}" @guest readonly @endguest>
</div>
<div>
    <label for="address-input">Address</label>
    <input id="address-input" type="text" name="address" value="{{ old('address', optional($conference ?? null)->address) }}" @guest readonly @endguest>
</div>
<div>
    <label for="attending-people-count-input">Attending People Count</label>
    <input id="attending-people-count-input" type="number" name="attending_people_count" value="{{ old('attending_people_count', optional($conference ?? null)->attending_people_count) }}" @guest readonly @endguest>
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
