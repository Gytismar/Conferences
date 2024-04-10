<div class="col-12 col-md-6 col-lg-4 mb-4 equal-height-card"> <!-- Responsive column classes -->
    <div class="card mb-3 text-center">
        <h4 class="card-title">{{ $conference['title'] }}</h4>
        <p class="card-text">Date: {{ \Carbon\Carbon::parse($conference['conference_date'])->format('F d, Y') }}</p>
        <p class="card-text">Address: {{ $conference['address'] }}</p>
        <p class="card-text">Attending People Count: {{ $conference['attending_people_count'] }}</p>
        <div class="card-footer d-flex justify-content-center">
            @auth
                <a href="{{ route('conferences.edit', ['conference' => $conference['id']]) }}" class="btn btn-edit btn-primary">@lang('site.edit')</a>
                <form action="{{ route('conferences.destroy', ['conference' => $conference['id']]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" data-delete>@lang('site.delete')</button>
                </form>
            @else
                <a href="{{ route('conferences.edit', ['conference' => $conference['id']]) }}" class="btn btn-primary">@lang('site.show_details')</a>
            @endauth
        </div>
    </div>
</div>
