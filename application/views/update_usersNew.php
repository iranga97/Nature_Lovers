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

    <title>Update</title>
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
                        <div class="card-header">Update</div>
                            <div class="card-body">
                        <?php
                            foreach ($data as $row){
                        ?>
                            <form name="userinput"  method="post">
                                <div class="form-group row">
                                    <label for="Name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="Name" value="<?php echo $row->Name;?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" name="Email" value="<?php echo $row->Email;?>">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="Mobile" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" name="Mobile" value="<?php echo $row->Mobile;?>" >
                                    </div>
                                </div>


                                    <div class="col-md-6 offset-md-4">
                                    <input type="submit" name="update" value="Update Data">
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    </header>
<script src="http://localhost/myapp/assets/js/bootstrap.min.js"></script>
</body>
</html>