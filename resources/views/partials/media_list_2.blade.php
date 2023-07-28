<div class="image-media-card text-center">
    <span class="badge bg-primary" style="position: absolute;">
        {{ $media->type ? explode('/',$media->type)[1] : 'mime' }}
    </span>
    <img src="{{ upload_assets($media) }}" />
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
