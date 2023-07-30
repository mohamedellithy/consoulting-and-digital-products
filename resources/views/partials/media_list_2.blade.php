<div class="image-media-card text-center">
    <span class="badge bg-primary" style="position: absolute;">
        {{ $media->type ? explode('/',$media->type)[1] : 'mime' }}
    </span>
    @if($media->type == 'video/mp4')
        <video style="width:100%;height:100%" controls>
            <source src="{{ upload_assets($media) }}" type="{{ $media->type }}"></source>
        </video>
    @elseif($media->type =='application/pdf')
        <i style="font-size: 120px;" class='bx bxs-file-pdf'></i>
    @else
        <img src="{{ upload_assets($media) }}" />
    @endif
    <p class="title-media-card text-center">
        {{ TrimLongText($media->name ?: fetchImageInnerDetails($media),50) }}
    </p>
    <p>
        {{ getOriginalSizeWithOriginalUnit($media->size) }}
    </p>
    <form action="{{ route('admin.medias.destroy',$media->id) }}" method="post">
        @method('DELETE')
        @csrf
        <button type="button" class="btn btn-danger delete-media btn-sm" style="margin: auto">حذف</button>
    </form>
</div>
