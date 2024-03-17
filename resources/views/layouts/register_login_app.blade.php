<!DOCTYPE html>
<html lang="en-US">
<head>
	
    @stack("title")

    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    @livewireStyles

</head>
<body class="bg-primary">

    @yield("main-body-section")

    <!-- TOAST FOR SUCCESS MESSAGE -->
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 100000">
        <div id="SuccessToast" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
            
            <div class="toast-body">
                <table>
                    <tr>
                        <td><i class="fa-solid fa-2x fa-circle-check"></i>&nbsp;&nbsp;</td>
                        <td><p class="fw-bold text-white" id="AlertMessageSuccess"></p></td>
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
                        <td><p class="fw-bold text-white" id="AlertMessageDanger"></p></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

    <script>
    window.addEventListener('alert', event => {
        if(event.detail.type == "success"){
            
            document.getElementById("AlertMessageSuccess").innerHTML = event.detail.message;
            var toastLive = document.getElementById('SuccessToast');
            var toast = new bootstrap.Toast(toastLive);
            toast.show();

        }else if(event.detail.type == "info"){

            document.getElementById("info").style.display = "block";
            document.getElementById("info").innerHTML = '<div class="alert alert-info" role="alert"> '+ event.detail.message +' </div>';

        }else if(event.detail.type == "error"){

            document.getElementById("AlertMessageDanger").innerHTML = event.detail.message;
            var toastLive = document.getElementById('DangerToast');
            var toast = new bootstrap.Toast(toastLive);
            toast.show();

        }else{
            alert("Please configure message type correctly!");
        }
    });
    </script>
    
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    @livewireScripts
    
</body>
</html>
