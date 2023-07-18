@forelse($services as $key => $service)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $service->name }}</td>
        <td class="d-inline-block text-truncate" style="max-width: 150px;">
            {{ $service->description }}
        </td>
        <td>
            <ul class="list-unstyled categorys-list m-0 avatar-group d-flex align-items-center">

                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                    class="avatar avatar-xs pull-up" title="Christina Parker">
                    {{-- {{ dd($service->image) }} --}}
                    <img src="{{ upload_assets($service->image_info) }}" alt="Avatar" class="rounded-circle">
                </li>
            </ul>
        </td>

        <td>
            @if ($service->whatsapStatus == 1)
                <span class="badge bg-label-success me-1">مفعل</span>
            @else
                <span class="badge bg-label-danger me-1">معطل</span>
            @endif

        </td>
        <td>{{ $service->whatsapNumber }}</td>

        <td>
            @if ($service->loginStatus == 1)
                <span class="badge bg-label-success me-1">مفعل</span>
            @else
                <span class="badge bg-label-danger me-1">معطل</span>
            @endif

        </td>
        <td>
            <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                        class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
                        <a class="dropdown-item" href="{{ route('admin.services.edit', $service->id) }}"><i
                                class="bx bx-edit-alt me-2"></i>
                            تعديل</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item">
                            <i class="bx bx-trash me-2"></i>حذف
                        </button>


                        <a class="dropdown-item" href="{{ route('admin.services.show', $service->id) }}"><i
                                class="fa-regular fa-eye me-2"></i></i>عرض

                        </a>
                    </form>
                </div>
            </div>
        </td>
    </tr>
@empty
@endforelse
