@if($result)
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
        @endforeach
    </ul>
@endif

<style>
    .search-result{
        padding: 20px;
        height: 300px;
        overflow-y: scroll;
    }
    .search-result li{
        text-align: right;
        padding: 13px;
    }

</style>