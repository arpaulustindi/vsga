<html>
<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Sistem Informasi Perpustakaan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <script src="plugin/jquery-3.5.1.min.js"></script>
    <script src="plugin/popper-1.16.0.min.js"></script>
    <script src="plugin/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    
<!-- from w3schools / online 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
-->
    <style type="text/css">
            .containerLog {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                padding: 20px 25px;
                width: 350px;
                border: 2px solid black;
                border-radius:10px;

                background-color: rgba(79,107,255,40%);
                box-shadow: 0 0 40px rgba(0,0,0,.6);
            }
        </style>
</head>

<body style="background:url(images/backVSGA.jpg);
                height:100vh; 
                background-position: top right;
                background-size: cover;">

        <div class="containerLog">
            <div class="container">
                <h1>Login User</h1>
                <h5>Admin Perpustakaan</h5>
                <form method="post" action="cek_login.php">
                    <div class="form-group">
                        <label for="user">Username:</label>
                        <input type="text" class="form-control" name="user" id="user" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password: </label>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter Password">
                    </div>
                    <br />
                    <button type="submit" class="btn btn-danger" name="submit">Log in</button>                
                </form>
            </div>
        </div> 
        <!-- offline
        <script src="plugin/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>    
    -->
    </body>
</html>

