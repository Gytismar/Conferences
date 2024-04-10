<div>
    <h4>{{ $conference['title'] }}</h4>
    <p>{{ $conference['content'] }}</p>
    <p>Date: {{ optional($conference['conference_date'])->format('F d, Y') }}</p>
    <p>Address: {{ $conference['address'] }}</p>
    <p>Attending People Count: {{ $conference['attending_people_count'] }}</p>
    <a href="{{ route('conferences.edit', ['conference' => $conference['id']]) }}"><button type="button">Edit</button></a>
    <form action="{{ route('conferences.destroy', ['conference' => $conference['id']]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
