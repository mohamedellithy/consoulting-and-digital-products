<ul class="search-result">
    @foreach($results as $result)
        <li style="text-align: right;">
            <h4>{{ $result->name }}</h4>
            <p class="description">
                {!! $result->description  !!}
            </p>
        </li>
    @endforeach
</ul>