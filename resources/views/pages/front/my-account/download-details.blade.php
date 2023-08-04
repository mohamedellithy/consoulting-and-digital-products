@extends('layouts.master_front')

@push('style')
<link rel="stylesheet" href="{{ asset('front/assets/css/videojs.css') }}" />
@endpush

@section('content')
 <!-- project-details-area -->
 <section class="project-details-area pt-120 pb-120 page-bg">
    <div class="container">
        <div class="row">
            <div class="dashboard d-flex">
                <div class="menu-account">
                    @include('inc.customer_menu')
                </div>
                <div class="content-page">
                    <div class="right-thank">
                        <h4>ملفات التحميل</h4>
                        <table class="table table-light">
                            <tr>
                                <th>اسم الملف</th>
                                <td>{{ $order->order_items->product->downloads ? $order->order_items->product->downloads->download_name : $order->order_items->product->name }}</td>
                            </tr>
                            <tr>
                                <th>نوع الملف</th>
                                <td>
                                    <span class="badge bg-danger">
                                        {{ $order->order_items->product->downloads ? $order->order_items->product->downloads->download_type : 'NOT SELECTED' }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>وصف الملف </th>
                                <td>
                                    {!! $order->order_items->product->downloads ? $order->order_items->product->downloads->download_description : 'NOT ADDED' !!}
                                </td>
                            </tr>
                            @if($order->order_items->product->downloads)
                                @if($order->order_items->product->downloads->download_status == 'download')
                                    <tr>
                                        <th> رابط تحميل الملف</th>
                                        <td>
                                            <form method="post" action="{{ route('download_attachments') }}" >
                                                <input name="order_id" type="hidden" value="{{ $order->id }}"/>
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm" id="download_files">
                                                    تحميل الملف
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @elseif($order->order_items->product->downloads->download_status == 'without_download')
                                    <tr>
                                        <th> مشاهدة المحتوي الملف</th>
                                        <td>
                                            <a href="#" class="btn btn-success btn-sm show_attachments" data-id="{{ $order->order_items->product->downloads->download_attachments_id }}">
                                                الاطلاع على الملفات
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project-details-area-end -->

<!-- header-search -->
<div class="services-application-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="services-application-close">
        <span class="close-frame"><i class="fas fa-times"></i></span>
    </div>
    <div class="search-wrap text-center">
        <div class="container">
            <div class="row" id="nb">
                <div class="accordion" id="accordionExample">
                    @if($order->order_items->product->downloads->download_attachments_id)
                        @foreach(GetAttachments($order->order_items->product->downloads->download_attachments_id) as $key => $attachment)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $key }}">
                                    <button class="accordion-button @if($loop->index != 0) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                      ملف ( {{ $attachment->name }} )
                                    </button>
                                </h2>
                                <div id="collapse{{ $key }}" class="accordion-collapse collapse @if($loop->index == 0) show @endif" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        @if(formateMediaType($attachment->type)[0] == 'video')
                                            <video
                                                id="my-video"
                                                class="video-js"
                                                controls
                                                preload="auto"
                                                width="640"
                                                height="464"
                                                data-setup="{}"
                                            >
                                                @if(isset($order->order_items->product->downloads->download_link))
                                                    <source src='{{ $order->order_items->product->downloads->download_link  }}' type="video/mp4" />
                                                    <source src='{{ $order->order_items->product->downloads->download_link }}' type="video/webm" />
                                                @else
                                                    <source src='/view-attachments/{{ $attachment->id  }}' type="video/mp4" />
                                                    <source src='/view-attachments/{{ $attachment->id }}' type="video/webm" />
                                                @endif
                                                <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider upgrading to a
                                                web browser that
                                                <a href="https://videojs.com/html5-video-support/" target="_blank"
                                                    >supports HTML5 video</a
                                                >
                                                </p>
                                            </video>
                                        @elseif(formateMediaType($attachment->type)[0] == 'audio')
                                            <audio controls controlsList="nodownload">
                                                @if(isset($order->order_items->product->downloads->download_link))
                                                    <source src='{{ $order->order_items->product->downloads->download_link  }}' >
                                                    <source src='{{ $order->order_items->product->downloads->download_link }}'  >
                                                @else
                                                    <source src='/view-attachments/{{ $attachment->id  }}' >
                                                    <source src='/view-attachments/{{ $attachment->id  }}'>
                                                @endif
                                                Your browser does not support the audio element.
                                            </audio>
                                        @elseif('pdf' == formateMediaType($attachment->type)[1])
                                            @if(isset($order->order_items->product->downloads->download_link))
                                                <iframe src='{{ $order->order_items->product->downloads->download_link }}#toolbar=0' width="100%" height="500px"></iframe>
                                            @else
                                                <iframe src='/view-attachments/{{ $attachment->id }}#toolbar=0' width="100%" height="500px"></iframe>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-search-end -->
@endsection


@push('scripts')
    <style>
        .services-application-form{
            overflow: auto !important;
        }
        .accordion-button.collapsed{
            background-color: #eee;
            color:black;
        }
        .accordion-button:not(.collapsed) {
            background-color: #aaefc9;
            color:green;
        }
    </style>
  <script>
    jQuery('document').ready(function(){
        jQuery('.show_attachments').click(function(){
            let attachment_id = jQuery(this).attr('data-id');
            jQuery(".services-application-form").slideToggle();
        });
    });

    $(".services-application-form").on('click', '.services-application-close span.close-frame', function() {
        $(".services-application-form").slideUp(500);
        var player = videojs('my-video', {
            controls: true,
        });

        player.on('contextmenu', function(event) {
            event.preventDefault();
        });
        player.currentTime(0);
        player.pause();
    });


  </script>

  <script src="{{ asset('front/assets/js/videojs.min.js') }}"></script>
@endpush
