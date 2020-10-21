<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Icon-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        
        <!--<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css">

        <!--<link rel="stylesheet" href="../style.css">-->

        <title>Hello, world!</title>

        <style>
            .error {
                color: #5a5c69;
                font-size: 7rem;
                position: relative;
                line-height: 1;
                width: 12.5rem;
            }
            .ml-auto, .mx-auto {
                margin-left: auto!important;
            }
            *, ::after, ::before {
                box-sizing: border-box;
            }

        </style>
    </head>
    <body>

        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#"><i class="fas fa-toolbox"></i></i> ShoppingCart <small> Dashboard</small></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <!--Space-->
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <font style="color: #fff"><i class="fas fa-user-circle"></i>&nbsp; Anjana &nbsp;</font><small><span class="badge badge-secondary">Admin</span></small>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="btn btn-danger" type="submit" value="Sign out">
                </div>
            </div>
        </nav>
        <br>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="nav flex-column nav-pills col-lg-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-Welcome-tab" data-toggle="pill" href="#v-pills-Welcome" role="tab" aria-controls="v-pills-Welcome" aria-selected="true"><i class="fas fa-folder"></i> Welcome</a>
                    <a class="nav-link" id="v-pills-Orders-tab" data-toggle="pill" href="#v-pills-Orders" role="tab" aria-controls="v-pills-Orders" aria-selected="false"><i class="fas fa-folder"></i> Orders</a>
                    <a class="nav-link" id="v-pills-NewProducts-tab" data-toggle="pill" href="#v-pills-NewProducts" role="tab" aria-controls="v-pills-NewProducts" aria-selected="false"><i class="fas fa-folder"></i> New Products</a>
                    <a class="nav-link" id="v-pills-ViewProducts-tab" data-toggle="pill" href="#v-pills-ViewProducts" role="tab" aria-controls="v-pills-ViewProducts" aria-selected="false"><i class="fas fa-folder"></i> View Products</a>
                    <a class="nav-link" id="v-pills-Customer-tab" data-toggle="pill" href="#v-pills-Customer" role="tab" aria-controls="v-pills-Customer" aria-selected="false"><i class="fas fa-folder"></i> Customer</a>
                    <a class="nav-link" id="v-pills-Comments-tab" data-toggle="pill" href="#v-pills-Comments" role="tab" aria-controls="v-pills-Comments" aria-selected="false"><i class="fas fa-folder"></i> Comments</a>
                    <a class="nav-link" id="v-pills-Complaints-tab" data-toggle="pill" href="#v-pills-Complaints" role="tab" aria-controls="v-pills-Complaints" aria-selected="false"><i class="fas fa-folder"></i> Complaints</a>
                    <a class="nav-link" id="v-pills-Reports-tab" data-toggle="pill" href="#v-pills-Reports" role="tab" aria-controls="v-pills-Reports" aria-selected="false"><i class="fas fa-folder"></i> Reports</a>
                </div>
                <div class="tab-content col-lg-10" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-Welcome" role="tabpanel" aria-labelledby="v-pills-Welcome-tab">
                        <?php include 'AWelcome_tab.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Orders" role="tabpanel" aria-labelledby="v-pills-Orders-tab">
                        <?php include 'AOrders_tab.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-NewProducts" role="tabpanel" aria-labelledby="v-pills-NewProducts-tab">
                        <?php include 'ANewProducts_tab.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-ViewProducts" role="tabpanel" aria-labelledby="v-pills-ViewProducts-tab">
                        <?php include 'AViewProducts_tab.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Customer" role="tabpanel" aria-labelledby="v-pills-Customer-tab">
                        <?php include 'ACustomer_tab.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Comments" role="tabpanel" aria-labelledby="v-pills-Comments-tab">
                        <?php include 'AComments_tab.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Complaints" role="tabpanel" aria-labelledby="v-pills-Complaints-tab">
                        <?php include 'AComplaints_tab.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Reports" role="tabpanel" aria-labelledby="v-pills-Reports-tab">
                        <?php include 'AReports_tab.php'; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small blue fixed-bottom">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                <a href="#"> VTA Project</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


        <script src="../vendor/js/Chart.min.js"></script>
        <script src="../vendor/js/chart-area-demo.js"></script>
        <script src="../vendor/js/chart-bar-demo.js"></script>

    </body>
</html>