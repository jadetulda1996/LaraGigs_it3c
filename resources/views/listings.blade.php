<h1>ALL LISTINGS</h1>

@foreach($listings as $listing)
<h1>{{ $listing['id'] }}</h1>
<p>
    <h2>
        <a href="/listings/{{ $listing['id'] }}">
            {{ $listing['title'] }}
        </a>
    </h2>
</p>
<p>{{ $listing['description'] }}</p>
@endforeach

<h1>SAMPLE TEST AFTER FOREACH</h1>
