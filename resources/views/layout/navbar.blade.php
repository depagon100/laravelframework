<!DOCTYPE html>
<html lang="en">

<head>


  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


    <style>
        #pst-time {
            float: right;
        }

        #loginas {
            float: right;
        }
        .table > tbody > tr > td,
.table > thead > tr > th {
  border: 0 !important
}
    </style>

</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h-1 mx-auto">
                <div class="text-primary p-1" style="font-size: 30px;">
                    <img src="https://client.emb.gov.ph/crs/assets/images/logo-denr.png" alt="logo-denr"
                        style="width:30px;height:30px;">
                    ENVIRONMENTAL MANAGEMENT BUREAU ONLINE SERVICES - SMR
                </div>
            </span>
        </div>
    </nav>

    <div class="container mt-2">
        <div id="loginas">
            <p>&nbsp;&nbsp;Logged in as: <a href="" style="text-decoration:none">User 1</a></p>
        </div>

        <div id="pst-container">
            <div id="pst-time"></div>
            <div><a href="https://gwhs.i.gov.ph/pst/" id="pst-source" target="_blank"></a></div>
        </div>
        <script type="text/javascript" id="gwt-pst">
            (function (d, eId) {
                var js, gjs = d.getElementById(eId);
                js = d.createElement('script');
                js.id = 'gwt-pst-jsdk';
                js.src = "//gwhs.i.gov.ph/pst/gwtpst.js?" + new Date().getTime();
                gjs.parentNode.insertBefore(js, gjs);
            }(document, 'pst-container'));

            var gwtpstReady = function () {
                new gwtpstTime('pst-time');
            }
        </script>
    </div>


    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary p-1">

            </div>

            <div class="card-body">
                <i class="bi bi-house"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd"
                        d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg>
                <a href="" style="text-decoration:none">Dashboard</a>


                <i class="bi bi-house mx-3"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd"
                        d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg>
                <a href="" class="" style="text-decoration:none">CRS</a>

                <button class="btn btn-primary" style="float:right">Logout</button>

            </div>
        </div> <!-- card-->
    </div>




</body>
</html>