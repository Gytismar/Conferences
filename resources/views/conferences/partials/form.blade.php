<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title-input" class="form-label">@lang('forms.title')</label>
                        <input id="title-input" type="text" name="title" value="{{ old('title', optional($conference ?? null)->title) }}" class="form-control" @guest readonly @endguest>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content-input" class="form-label">@lang('forms.content')</label>
                        <textarea id="content-input" name="content" class="form-control" @guest readonly @endguest>{{ old('content', optional($conference ?? null)->content) }}</textarea>
                        @error('content')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="conference-date-input" class="form-label">@lang('forms.conference_date')</label>
                        <input id="conference-date-input" type="date" name="conference_date" value="{{ old('conference_date', optional($conference ?? null)->conference_date) }}" class="form-control" @guest readonly @endguest>
                        @error('conference_date')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address-input" class="form-label">@lang('forms.address')</label>
                        <input id="address-input" type="text" name="address" value="{{ old('address', optional($conference ?? null)->address) }}" class="form-control" @guest readonly @endguest>
                        @error('address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="attending-people-count-input" class="form-label">@lang('forms.attending_people_count')</label>
                        <input id="attending-people-count-input" type="number" name="attending_people_count" value="{{ old('attending_people_count', optional($conference ?? null)->attending_people_count) }}" class="form-control" @guest readonly @endguest>
                        @error('attending_people_count')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
