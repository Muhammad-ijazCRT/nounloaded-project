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

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('assets/students/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/students/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/students/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/students/css/demo_1/style.css') }}" />

    @livewireStyles
    @stack("css")

</head>
<body>

    <script>(()=>{document.body;var e=localStorage.getItem("theme");e&&document.documentElement.setAttribute("data-bs-theme",e)})();</script>
    <div class="container-xxl bg-white p-0">

        @include("livewire.student.header")
            @yield("main-body-section")
        @include("livewire.student.footer")

    </div>

    {{-- ALERT FOR SUCCESS MESSAGE --}}
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="pr-2 pt-2"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>
                <div class="modal-body"><div class="alert alert-success text-dark" role="alert" id="AlertMessageSuccess"></div></div>
            </div>
        </div>
    </div>

    {{-- ALERT FOR ERROR MESSAGE --}}
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="pr-2 pt-2"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>
                <div class="modal-body"><div class="alert alert-danger text-white" role="alert" id="AlertMessageError"></div></div>
            </div>
        </div>
    </div>

    <!-- JS Scripts -->

    <script src="{{ asset('assets/students/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/students/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/students/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/students/js/misc.js') }}"></script>
    <script src="{{ asset('assets/students/js/settings.js') }}"></script>
    <script src="{{ asset('assets/students/js/todolist.js') }}"></script>

    @livewireScripts
    @stack("js")

    <script>
        $(document).ready(function() {

        var table = document.getElementById('datatableSimple');
        if(table){
            new simpleDatatables.DataTable(table);
        }

        // Response Handler
        window.addEventListener('alert', event => {
            if(event.detail.type == "success"){
                document.getElementById("AlertMessageSuccess").innerHTML = event.detail.message;
                $("#WarningModal").modal('hide');
                $('#successModal').modal('show');
                var table = document.getElementById('datatableSimple');
                if(table){
                    new simpleDatatables.DataTable(table);
                }
            } else if(event.detail.type == "error"){
                document.getElementById("AlertMessageError").innerHTML = event.detail.message;
                $("#WarningModal").modal('hide');
                $('#errorModal').modal('show');
                var table = document.getElementById('datatableSimple');
                if(table){
                    new simpleDatatables.DataTable(table);
                }
            } else {
                $("#WarningModal").modal('hide');
                alert("Please configure message type correctly!");
                var table = document.getElementById('datatableSimple');
                if(table){
                    new simpleDatatables.DataTable(table);
                }
            }
        });

        });
        </script>

</body>
</html>
