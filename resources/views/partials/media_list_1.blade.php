@forelse($medias as $key => $media)
    <li class="media-item" media-path="{{ upload_assets($media) }}" media-id="{{ $media->id }}" media-type="{{ $media->type }}">
        @if($media->type == 'video/mp4')
            <video style="width:100%;height:100%" controls>
                <source src="{{ upload_assets($media) }}" type="{{ $media->type }}"></source>
            </video>
        @elseif($media->type =='application/pdf')
            <i style="font-size: 120px;" class='bx bxs-file-pdf'></i>
        @else
            <img src="{{ upload_assets($media) }}" class="list-item-image"/>
        @endif
    </li>
@empty
@endforelse