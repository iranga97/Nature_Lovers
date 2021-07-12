<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://localhost/myapp/assets/css/main.css">
    <link rel="stylesheet" href="http://localhost/myapp/assets/css/bootstrap.css">
    <script src="http://localhost/myapp/assets/js/jquery-3.5.1.js"></script>
    <script src="http://localhost/myapp/assets/js/main.js"></script>
    <script src="http://localhost/myapp/assets/js/bootstrap.js"></script>


   
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Registration</title>
</head>
<body>

    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#">Nature Lovers</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
            data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/myapp/index.php/About/aboutus">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/myapp/index.php/Registration/displaydata">Manage Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/myapp/index.php/Registration/savedata">Join With Us</a>
                        </li>
                    </ul>
                </div>
    </nav>

    

    <header class="page-header header container-fluid">

        <div class="overlay">
        <br/><br/><br/><br/><br/>
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                            <div class="card-body">
                                <form name="userinput"  method="post">
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                        <div class="col-md-6">
                                            <input type="text" name="name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                        <div class="col-md-6">
                                            <input type="text" name="email">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="mobile" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                        <div class="col-md-6">
                                            <input type="text" name="mobile" >
                                        </div>
                                    </div>


                                        <div class="col-md-6 offset-md-4">
                                        <input type="submit" name="save" value="Save Data">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <footer class="page-footer">  
            <div class="container">    
                <div class="row">      
                    <div class="col-lg-8 col-md-8 col-sm-12">      
                        <h6 class="text-uppercase font-weight-bold">Additional info about us</h6>      
                        <p>If you are a nature lover join with us to explore amazzing places then we can contact you in our events. </p>      
                            
                    </div>    
                    <div class="col-lg-4 col-md-4 col-sm-12">      
                        <h6 class="text-uppercase font-weight-bold">Contact</h6>      
                        <p>35, Sri Seth mawatha, Rathnapura      
                            <br/>irangapriyam@gmail.com      
                            <br/>+ 94715891232      
                            <br/>+ 94452286117</p>    
                    </div>  
                </div>  
                <div class="footer-copyright text-center">© 2020 Copyright:I P Mudalige

            </div>
    </footer>
<script src="http://localhost/myapp/assets/js/bootstrap.min.js"></script>
</body>
</html>