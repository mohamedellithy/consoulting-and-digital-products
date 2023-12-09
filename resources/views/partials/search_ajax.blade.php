<ul class="search-result">
    @foreach($results as $result)
        <li style="text-align: right;">
            <a href="{{ route('single_product',['slug' => $result->slug]) }}">
                <h4>{{ $result->name }}</h4>
                <p class="description">
                    {!! TrimLongText($result->description,200)  !!}
                </p>
            </a>
        </li>
        <li style="text-align: right;">
            <a href="{{ route('single_product',['slug' => $result->slug]) }}">
                <h4>{{ $result->name }}</h4>
                <p class="description">
                    {!! TrimLongText($result->description,200)  !!}
                </p>
            </a>
        </li>
        <li style="text-align: right;">
            <a href="{{ route('single_product',['slug' => $result->slug]) }}">
                <h4>{{ $result->name }}</h4>
                <p class="description">
                    {!! TrimLongText($result->description,200)  !!}
                </p>
            </a>
        </li>
        <li style="text-align: right;">
            <a href="{{ route('single_product',['slug' => $result->slug]) }}">
                <h4>{{ $result->name }}</h4>
                <p class="description">
                    {!! TrimLongText($result->description,200)  !!}
                </p>
            </a>
        </li>
        <li style="text-align: right;">
            <a href="{{ route('single_product',['slug' => $result->slug]) }}">
                <h4>{{ $result->name }}</h4>
                <p class="description">
                    {!! TrimLongText($result->description,200)  !!}
                </p>
            </a>
        </li>
        <li style="text-align: right;">
            <a href="{{ route('single_product',['slug' => $result->slug]) }}">
                <h4>{{ $result->name }}</h4>
                <p class="description">
                    {!! TrimLongText($result->description,200)  !!}
                </p>
            </a>
        </li>
        <li style="text-align: right;">
            <a href="{{ route('single_product',['slug' => $result->slug]) }}">
                <h4>{{ $result->name }}</h4>
                <p class="description">
                    {!! TrimLongText($result->description,200)  !!}
                </p>
            </a>
        </li>
        <li style="text-align: right;">
            <a href="{{ route('single_product',['slug' => $result->slug]) }}">
                <h4>{{ $result->name }}</h4>
                <p class="description">
                    {!! TrimLongText($result->description,200)  !!}
                </p>
            </a>
        </li>
        <li style="text-align: right;">
            <a href="{{ route('single_product',['slug' => $result->slug]) }}">
                <h4>{{ $result->name }}</h4>
                <p class="description">
                    {!! TrimLongText($result->description,200)  !!}
                </p>
            </a>
        </li>
        <li style="text-align: right;">
            <a href="{{ route('single_product',['slug' => $result->slug]) }}">
                <h4>{{ $result->name }}</h4>
                <p class="description">
                    {!! TrimLongText($result->description,200)  !!}
                </p>
            </a>
        </li>
    @endforeach
</ul>

<style>
    .search-result{
        padding: 20px;
        height: 300px;
        overflow-y: scroll;
    }
    .search-result li a:hover,
    .search-result li a:active,
    .search-result li a:focus{
        text-align: right;
        background-color: #0c77bd1a;
        padding: 13px;
    }

</style>