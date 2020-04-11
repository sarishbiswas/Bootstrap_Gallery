<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container" style="margin-top: 70px;">
            
            <div id="signupbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Sign UP</div>
                    </div>
                    <div style="padding-top:30px" class="panel-body">
                        <form id="signinform" class="form-horizontal" role="form">
                            <div style="padding-left:20px;padding-right: 10px;" class="form-group">
                                <label for="Email">Enter Email address:</label>
                                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">
                                    We'll never share your email with anyone else.
                                </small>
                            </div>
                            
                            <div style="padding-left:20px;padding-right: 10px;" class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="Enter password">
                            </div>

                            <div class="form-check" style="padding-left:20px;padding-right: 10px;">
                                <input type="checkbox" class="form-check-input" id="checkbox">
                                <label class="form-check-label" for="checkbox">Remember me</label>
                            </div>
                            <a href="home.php"><button type="button" class="btn btn-warning btn-lg"  onclick="alert('You are Logged in SuccessFully')">Log In</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>