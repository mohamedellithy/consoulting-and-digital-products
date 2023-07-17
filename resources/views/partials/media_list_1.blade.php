@forelse($medias as $key => $media)
    <li class="media-item" media-path="{{ upload_assets($media) }}" media-id="{{ $media->id }}">
        <img src="{{ upload_assets($media) }}" class="list-item-image"/>
    </li>
@empty
@endforelse