<ul class="search-result">
    @foreach($results as $result)
        <li style="text-align: right;">
            <h4>{{ $result->name }}</h4>
            <p class="description">
                {!! TrimLongText($result->description,200)  !!}
            </p>
        </li>
    @endforeach
</ul>