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
    

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <!-- Helpers -->
    <script src="{{ asset('/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/assets/js/config.js') }}"></script>
    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


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
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('/assets/vendor/libs/jquery/jquery.js') }}"></script>
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
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        jQuery('document').ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // ajax call
            function ajax_load_medias(data = {}){
                $.ajax({
                    type:'GET',
                    url:"{{ route('admin.media-lists.index') }}",
                    data:data,
                    success:function(data) {
                        console.log(data);
                        jQuery('.list-medias').append(data._result);
                        if(data._result.length == 0){
                             jQuery('.load-more-medias').remove();
                        }
                    }
                });
                jQuery('#exLargeModal').modal('show');
            }


            // load images all lists
            let global_media_ids = null; 
            jQuery('.upload-media').click(function(){
                jQuery('.list-medias').html('');
                global_media_ids = this;
                ajax_load_medias();
            });


            // paginate page 1
            let page   = 1;
            let params ={};
            jQuery('.load-more-medias').click(function(){
                page +=1;
                params.page = page;
                ajax_load_medias(params);
            });


            // uploda files and medias
            jQuery('.btn-upload input[type="file"]').change(function(e){
                console.log(e.target.files);
                let medias = e.target.files;
                var formData = new FormData();
                for(let i = 0; i < medias.length; i++) {
                    let url = URL.createObjectURL(medias[i]);
                    formData.append(`medias[${i}]`,medias[i]);
                    jQuery('.list-upload-medias').append(`<li class="uploadItem-${i}">
                            <img src="${url}" class="img-uploaded">
                            <div class="progress upload">
                                <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </li>`);
                }

                console.log(medias[0]);
                $.ajax({
                    xhr: function(){
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
                    type:'POST',
                    url:"{{ route('admin.media-lists.store') }}",
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    cache: false,
                    data:formData,
                    success:function(data) {
                        console.log(data);
                        data._result.forEach((element,key) => {
                            console.log(element,key);
                            jQuery(`.list-upload-medias li.uploadItem-${key} .progress.upload`).remove();
                            jQuery(`.list-upload-medias li.uploadItem-${key} img`).css({'opacity' : '1'})
                        });
                    }
                });
            });

            let self = null;
            jQuery('.modal').on('click','.list-medias .media-item',function(){
                if(self != this){
                    jQuery(".media-item.active").removeClass('active');
                }
                jQuery(this).toggleClass('active');
                self = this;
            });

            jQuery('.modal').on('click','.select-media',function(){
                let media_ids = [];
                document.querySelectorAll('.list-medias .media-item.active').forEach((ele) => {
                    let media_path = ele.getAttribute('media-path');
                    let media_id   = ele.getAttribute('media-id');
                    media_ids.push(media_id);
                });
                let join_list = jQuery(global_media_ids).find('.uploaded-media-ids').val(media_ids.join(','));
                console.log(join_list);
            });
        });
    </script>
 
    @stack('script')

</body>

</html>
