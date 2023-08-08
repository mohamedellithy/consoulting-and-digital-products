<!DOCTYPE html>
<html lang="ar" class="light-style layout-menu-fixed" dir="rtl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/img/favicon/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('/assets/css/demo.css') }}" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/custome.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/apex-charts/apex-charts.css') }}" />


    <!-- Helpers -->
    <script src="{{ asset('/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/assets/js/config.js') }}"></script>
    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link   href="{{ asset('assets/editor/summernote-lite.min.css') }}" rel="stylesheet">

    @stack('style')
</head>

<body id="rtl">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('inc.side_navbar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('inc.top_navbar')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">

                    @if(flash()->message)
                        <div class="show-notify {{ flash()->class }}">
                            {{ flash()->message }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="show-notify alert alert-danger">
                            هناك خطأ يمكنك مراجعته
                        </div>
                    @endif

                    <!-- Content -->
                    @yield('content')
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('inc.bottom_footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        @include('includes.media')
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->

    <script src="{{ asset('/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    {{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script> --}}

    <script>
        jQuery('document').ready(function() {
            // paginate page 1
            let page = 1;
            let params = {};
            let typeMedia = 'all';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // ajax call
            function ajax_load_medias(data = {}) {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('admin.media-lists.index') }}",
                    data: data,
                    success: function(data) {
                        console.log(data);
                        jQuery('.list-medias').append(data._result);
                        if (data._result.length == 0) {
                            jQuery('.load-more-medias').hide();
                            console.log('hi');
                        }
                    }
                });
            }

            // load images all lists
            let global_media_ids = null;
            let multiple_upload  = false;
            jQuery('.upload-media').click(function(){
                jQuery('#exLargeModal').modal('show');
                jQuery('.load-more-medias').show();
                jQuery('.list-medias').html('');
                page = 1;
                global_media_ids = this;
                multiple_upload  = jQuery(this).attr('data-multiple-media');
                typeMedia        = jQuery(this).attr('data-type-media');
                params.typeMedia = typeMedia;
                ajax_load_medias(params);
            });

            jQuery('.load-more-medias').click(function() {
                page += 1;
                params.page = page;
                params.typeMedia = typeMedia;
                ajax_load_medias(params);
            });

            // uploda files and medias
            jQuery('.btn-upload input[type="file"]').change(function(e) {
                console.log(e.target.files);
                let medias = e.target.files;
                var formData = new FormData();
                for (let i = 0; i < medias.length; i++) {
                    let url = URL.createObjectURL(medias[i]);
                    formData.append(`medias[${i}]`, medias[i]);
                    if(medias[i]['type'] == 'video/mp4'){
                        jQuery('.list-upload-medias').append(`<li class="uploadItem-${i}">
                                <video style="width: 100%;height: 100%;" class="img-uploaded" controls>
                                    <source src="${url}" type="video/mp4">
                                </video>
                                <div class="progress upload">
                                    <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                            </li>`);
                    } else {
                        jQuery('.list-upload-medias').append(`<li class="uploadItem-${i}">
                                <img src="${url}" class="img-uploaded">
                                <div class="progress upload">
                                    <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                            </li>`);
                    }
                }

                console.log(medias[0]['type']);
                $.ajax({
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = (evt.loaded / evt.total) * 100;
                                // Place upload progress bar visibility code here
                                console.log(percentComplete);
                            }
                        }, false);
                        return xhr;
                    },
                    type: 'POST',
                    url: "{{ route('admin.media-lists.store') }}",
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: formData,
                    success: function(data) {
                        console.log(data);
                        data._result.forEach((element, key) => {
                            console.log(element, key);
                            jQuery(
                                    `.list-upload-medias li.uploadItem-${key} .progress.upload`)
                                .remove();
                            jQuery(`.list-upload-medias li.uploadItem-${key} img`).css({
                                'opacity': '1'
                            })
                        });
                    }
                });
            });

            let self = null;
            jQuery('.modal').on('click','.list-medias .media-item',function(){
                if(multiple_upload  != 'true'){
                    if(self != this){
                        jQuery(".media-item.active").removeClass('active');
                    }
                }
                jQuery(this).toggleClass('active');
                self = this;
            });

            jQuery('.modal').on('click', '.select-media', function() {
                let media_ids = [];
                let preview_thumbs = jQuery(global_media_ids).parents('.container-uploader').find(
                    '.preview-thumbs .list-preview-thumbs');
                document.querySelectorAll('.list-medias .media-item.active').forEach((ele) => {
                    let media_path = ele.getAttribute('media-path');
                    let media_id = ele.getAttribute('media-id');
                    let media_type = ele.getAttribute('media-type');
                    media_ids.push(media_id);
                    if(multiple_upload  != 'true'){
                        if(media_type == 'video/mp4'){
                            preview_thumbs.html(`<li class="preview-media-inner">
                                <video style="width:100%;height:100%" controls>
                                    <source src="${media_path}" type="${media_type}"></source>
                                </video>
                                <i class='bx bxs-message-square-x remove' media-id="${media_id}"></i>
                            </li>`);
                        } else {
                            preview_thumbs.html(`<li class="preview-media-inner">
                                <img src="${media_path}" />
                                <i class='bx bxs-message-square-x remove' media-id="${media_id}"></i>
                            </li>`);
                        }
                    } else {
                        if(media_type == 'video/mp4'){
                            preview_thumbs.append(`<li class="preview-media-inner">
                                <video style="width:100%;height:100%" controls>
                                    <source src="${media_path}" type="${media_type}"></source>
                                </video>
                                <i class='bx bxs-message-square-x remove' media-id="${media_id}"></i>
                            </li>`);
                        } else {
                            preview_thumbs.append(`<li class="preview-media-inner">
                                <img src="${media_path}" />
                                <i class='bx bxs-message-square-x remove' media-id="${media_id}"></i>
                            </li>`);
                        }
                    }
                });
                let prev_ids_thumbs = null;
                if(multiple_upload  == 'true'){
                    prev_ids_thumbs = jQuery(global_media_ids).find('.uploaded-media-ids').val();
                }
                let join_list = jQuery(global_media_ids).find('.uploaded-media-ids').val(media_ids.join(
                    ',') + prev_ids_thumbs);
                if (jQuery('#exLargeModal').length) {
                    jQuery('#exLargeModal').modal('hide');
                }
            });

            jQuery('.container-uploader').on('click', '.preview-media-inner .remove', function() {
                let select_media_id = jQuery(this).attr('media-id');
                let media_join_list = jQuery(this).parents('.container-uploader').find(
                    '.uploaded-media-ids').val();
                let media_lists = media_join_list.split(',');
                media_lists.splice(media_lists.indexOf(select_media_id),1);
                console.log(select_media_id,media_lists);
                jQuery(this).parents('.container-uploader').find('.uploaded-media-ids').val(media_lists.join(','));
                jQuery(this).parents('.preview-media-inner').remove();
            });
        });
    </script>

    <script>
        jQuery('.delete-media').on('click',function(){
            if(confirm('Are you sure you want to delete') == true) {
                jQuery(this).parents('form').submit();
            }
        });

        jQuery('document').ready(function(){
            setTimeout(() => {
                jQuery('.show-notify').fadeOut(5000);
            }, 3000);
        });


        jQuery(document).ready(function() {
            jQuery('.summernote').summernote({
                fontNames: ['Tajawal', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana', 'MyCustomFont'],
                fontNamesIgnoreCheck: ['Tajawal']
            });

        });
    </script>
    <script src="{{ asset('assets/editor/summernote-lite.min.js') }}"></script>
    <style>
        .note-editor .note-toolbar .note-color .dropdown-toggle, .note-popover .popover-content .note-color .dropdown-toggle {
            width: 46px;
        }
    </style>

    @stack('script')

</body>

</html>
