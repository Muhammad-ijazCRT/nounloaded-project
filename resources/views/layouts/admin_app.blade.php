<!DOCTYPE html>
<html lang="en-US">
<head>

    @stack("title")

    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Stylesheets --CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin/admin-bootstrap.min-5.1.3.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css//admin/admin-custom.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/datatables.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @livewireStyles

</head>
<body class="bg-light sb-nav-fixed">

    @include("livewire.admin.components.admin-template")

    <!-- WARNING MODAL  -->
    <button class="d-none" id="LaunchModalBtn" data-bs-toggle="modal" data-bs-target="#WarningModal">modal</button>
    <div class="modal fade" id="WarningModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body" id="ModalMessage"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="CloseBtn">Close</button>
                    <button type="button" class="btn btn-primary" id="ModalBtn"></button>
                </div>
            </div>
        </div>
    </div>

    <!-- TOAST FOR SUCCESS MESSAGE -->
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 100000">
        <div id="SuccessToast" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">

            <div class="toast-body">
                <table>
                    <tr>
                        <td><i class="fa-solid fa-2x fa-circle-check"></i>&nbsp;&nbsp;</td>
                        <td><h6 id="AlertMessageSuccess"></h6></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

    <!-- TOAST FOR ERROR MESSAGE -->
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 100000">
        <div id="DangerToast" class="toast bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true">

            <div class="toast-body">
                <table>
                    <tr>
                        <td><i class="fa-solid fa-2x fa-circle-xmark"></i>&nbsp;&nbsp;</td>
                        <td><h6  id="AlertMessageDanger"></h6></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

    <script>
    function LaunchWarningModal(a, b, c, d, e){

        document.getElementById("ModalLabel").innerHTML = a;
        document.getElementById("ModalMessage").innerHTML = b;
        btn = document.getElementById("ModalBtn");
        btn.innerHTML = c;
        btn.disabled = false;
        btn.setAttribute("onclick", "window.livewire.emit('"+ d +"', '"+ e +"'); this.innerHTML='Deleting...'; this.disabled = true ");

        document.getElementById("LaunchModalBtn").click();

    }
    
    window.addEventListener('dtrefresh', event => {
        const datatablesSimple = document.getElementById('datatablesSimple');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
        const datatablesSimple1 = document.getElementById('datatablesSimple1');
        if (datatablesSimple1) {
            new simpleDatatables.DataTable(datatablesSimple1);
        }
    });

    window.addEventListener('alert', event => {
        if(event.detail.type == "success"){

            document.getElementById("AlertMessageSuccess").innerHTML = event.detail.message;
            var toastLive = document.getElementById('SuccessToast');
            var toast = new bootstrap.Toast(toastLive);
            toast.show();
            const datatablesSimple = document.getElementById('datatablesSimple');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
            const datatablesSimple1 = document.getElementById('datatablesSimple1');
            if (datatablesSimple1) {
                new simpleDatatables.DataTable(datatablesSimple1);
            }
            $("#CloseBtn").click();

        }else if(event.detail.type == "info"){

            document.getElementById("info").style.display = "block";
            document.getElementById("info").innerHTML = '<div class="alert alert-info" role="alert"> '+ event.detail.message +' </div>';

        }else if(event.detail.type == "error"){

            document.getElementById("AlertMessageDanger").innerHTML = event.detail.message;
            var toastLive = document.getElementById('DangerToast');
            var toast = new bootstrap.Toast(toastLive);
            toast.show();
            const datatablesSimple = document.getElementById('datatablesSimple');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
            const datatablesSimple1 = document.getElementById('datatablesSimple1');
            if (datatablesSimple1) {
                new simpleDatatables.DataTable(datatablesSimple1);
            }
            $("#CloseBtn").click();

        }else{
            alert("Please configure message type correctly!");
            $("#CloseBtn").click();
        }
    });
    
    // Multiple del
    var allselectedrowsids = [];
    function MultiRowsDel(rows_id, item){

        allselectedrowsids = [];

        var checkboxes = document.querySelectorAll('input[type="checkbox"][id="'+rows_id+'"]:checked');
        checkboxes.forEach(function(checkbox) {
            allselectedrowsids.push(checkbox.value);
        });

        if(allselectedrowsids.length > 0){
            document.getElementById("table_heading").innerHTML = allselectedrowsids.length + ' ' + item + ' selected &nbsp;<a onclick="LaunchWarningModal(\'Are you sure to delete all the selected '+ item +'? \', \'These '+ item +' and all configurations related to these '+ item +' will be deleted permanently!\', \'Delete '+ item +'\', \'deletemultiples\', \'' + allselectedrowsids.join(',') + '\')" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm"><i class="fa-regular fa-trash-can" style="font-size: 18px;"></i></a>';
        }else{
            document.getElementById("table_heading").innerHTML = "All " + item;
        }
    }
    // End Multiple del
    </script>

    <script src="{{ asset('assets/js/admin/admin-bootstrap.min-5.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/admin/admin-custom.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @livewireScripts
    
    @stack("js")

</body>
</html>
