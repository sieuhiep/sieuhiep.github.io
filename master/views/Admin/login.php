<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.css">
		<link rel="stylesheet" type="text/css" href="css/admin.css">
		<script src="js/js.js"></script>
		<style>
			.err {
				text-align: center;
				color: red;
			}
		</style>
    </head>
	<body>
		<div class="container">
		    <div class="row">
		        <div class="col-md-12">
		            <div class="well login-box">
		                <form action="index.php?mod=Admin&act=login" method="POST" id="forma">
		                    <legend>Đăng nhập</legend>
		                    <div class="form-group">
		                        <label for="username-email">E-mail</label>
		                        <input name="user" id="username-email" placeholder="E-mail" type="text" class="form-control" />
		                    </div>
		                    <div class="form-group">
		                        <label for="password">Mật khẩu</label>
		                        <input id="password" name="password" placeholder="Mật khẩu" type="password" class="form-control" />
		                    </div>
		                    <div class="form-group text-center">
		                        <button class="btn btn-danger"><a href="index.php">Thoát</a></button>
		                        <input type="submit" name="submit" id="submita" class="btn btn-success btn-login-submit" value="Đăng nhập" />
		                    </div>
		                    <div class="err">
		                    	<p><?php echo $err; ?></p>
		                    </div>
		                </form>
		            </div>
		        
		        </div>
		    </div>
		</div>
</body>
</html>
<script>
	$(document).keypress(function(e) {
    if(e.which == 13) {
       $('#submita').click();
    }
});
</script>