<html lang="en">
<head>
	<meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/kasir.css') ?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('asset/materialize/css/materialize.min.css') ?>"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
  <div class="out">
    <div class="outbox">
      <div class="header">
        <div class="headercontain">
          <ul>
            <li><img src = "<?php echo base_url('asset/image/LogoRoji.png') ?>" alt ="logo" class="logo"></li>
            <li class="typelogin"><h5>KASIR</h5></li>
            <li id="logout"><button class="button logout"><span><i class="fa fa-sign-out" aria-hidden="true">LOG OUT</i></span></button></li>
          </ul>
        </div>
      </div>

      <div class="contain">
				<div class="containbox">
					<div class="containup">
						<div class="buttonplus">
							<a class="btn-floating waves-effect waves-light red"><i class="material-icons">add</i></a>
						</div>
						<div class="list">
							<ul>
								<li></li>
							</ul>
						</div>
						<div class="btn">
							<button class="btn_done">DONE</button>
						</div>
					</div>
				</div>
      </div>
    </div>
  </div>


</body>
