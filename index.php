<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>HTML5 Index Page</title>
        <meta name="description" content="This is an HTML5 file. This description text must be changed for SEO purpose">

        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">

        <script src="vendor/jquery-2.2.4.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!--[if lt IE 9]>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-xs-3" style="margin-left: 36%;margin-top: 10%;background-color: #ecf0f1;padding: 25px;">
                    <form action="Admin/AdminHome.php" method="POST"> 
                        <div class="form-group">
                            <center>
                                <img class="mb-4" src="images/Manager_104px.png" alt="" width="72" height="72">
                                <h4 class="mb-3">Please sign in your account.</h4>
                            </center>
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" id="Username">
                            <small id="Username" class="form-text text-muted">We'll never share your Username with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" id="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <center>
                            <input type="submit" class="btn btn-primary" value="Sign in"/>
                            <input type="reset" class="btn btn-danger" value="Clear"/>
                            <br><br><br>
                            <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
                        </center>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>