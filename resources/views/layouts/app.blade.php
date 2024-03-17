<!DOCTYPE html>
<html lang="en-US">
<head>

    @stack("title")

    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Favicon -->
    <link href="{{ url('/assets/images/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('assets/css/datatables.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />

    <!-- Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/lightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/owl.carousel.min.css') }}" />

    @livewireStyles
    @stack("css")

</head>
<body>

    <div class="container-xxl bg-white p-0">

        @include("livewire.components.header")
        {{ $slot }}
        @include("livewire.components.footer")
        <span class="d-none">
            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
        </span>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

    </div>

    <!-- TOAST FOR SUCCESS MESSAGE -->
    <div class="position-fixed top-0 end-0 p-3" id="success-alert" style="z-index: 100000; display: none;">
        <div id="SuccessToast" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">

            <div class="toast-body">
                <table>
                    <tr>
                        <td><i class="fa-solid fa-2x fa-circle-check text-white"></i>&nbsp;&nbsp;</td>
                        <td><h6 class="text-white" id="AlertMessageSuccess"></h6></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

    <!-- TOAST FOR ERROR MESSAGE -->
    <div class="position-fixed top-0 end-0 p-3" id="error-alert" style="z-index: 100000; display: none;">
        <div id="DangerToast" class="toast bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true">

            <div class="toast-body">
                <table>
                    <tr>
                        <td><i class="fa-solid fa-2x fa-circle-xmark text-white"></i>&nbsp;&nbsp;</td>
                        <td><h6 class="text-white" id="AlertMessageDanger"></h6></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

    <script>
    window.addEventListener('alert', event => {
        if(event.detail.type == "success"){

            document.getElementById("AlertMessageSuccess").innerHTML = event.detail.message;
            document.getElementById("success-alert").style.display = "block";
            var toastLive = document.getElementById('SuccessToast');
            var toast = new bootstrap.Toast(toastLive);
            toast.show();
            const datatablesSimple = document.getElementById('datatablesSimple');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
            $("#CloseBtn").click();

        }else if(event.detail.type == "info"){

            document.getElementById("info").style.display = "block";
            document.getElementById("info").innerHTML = '<div class="alert alert-info" role="alert"> '+ event.detail.message +' </div>';

        }else if(event.detail.type == "error"){

            document.getElementById("AlertMessageDanger").innerHTML = event.detail.message;
            document.getElementById("error-alert").style.display = "block";
            var toastLive = document.getElementById('DangerToast');
            var toast = new bootstrap.Toast(toastLive);
            toast.show();
            const datatablesSimple = document.getElementById('datatablesSimple');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
            $("#CloseBtn").click();

        }else{
            alert("Please configure message type correctly!");
            $("#CloseBtn").click();
        }
    });
    </script>

    <!-- JS Scripts -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>

    <!-- Libraries -->
    <script src="{{ asset('assets/js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/lightbox.min.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.js') }}"></script>
    @livewireScripts
    @stack("js")

</body>
</html>
