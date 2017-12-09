<html lang="en">
<head>
	<meta charset="utf-8">
  <title>LOGIN</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/login.css') ?>">
</head>
<body style="background-image:url('<?php echo base_url('asset/image/picture-1499145841.JPG' ) ?>')">
	<!-- <img src ="<?php echo base_url('asset/image/330183.jpg') ?>"> -->
	<div class="loginBox">
		<div class="glass">
			<img src = "<?php echo base_url('asset/image/LogoRoji.png') ?>" alt ="logo" class="logo">
			<h3>Log In</h3>
			<?php echo validation_errors();?>
			<?php echo form_open('Verifylogin'); ?>
				<div class = "inputbox">
					<input type="text" name="user" placeholder="Username">
					<span><i class="fa fa-user-circle-o" aria-hidden="true"></i>
					</span>
				</div>
				<div class = "inputbox">
					<input type="password" name="pass" placeholder="Password">
					<span><i class="fa fa-key" aria-hidden="true"></i>
					</span>
				</div>
					<input type="submit" value="Login">
			</form>
		</div>
	</div>

</html>
