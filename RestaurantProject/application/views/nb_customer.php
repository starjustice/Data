<html lang="en">
<head>
	<meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('asset/materialize/css/materialize.min.css') ?>"  media="screen,projection"/>
	<script type="text/javascript" src="<?php echo base_url('asset/materialize/js/materialize.min.js')?>"></script>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/select_bar.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/nb.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/info.css') ?>">
</head>
<body>
  <div class= "allbox">
    <div class="navbar">
         <!-- <div class ="firstimage"> -->
					<div class="btn-group">
						<ul>
							<li><img src = "<?php echo base_url('asset/image/LogoRoji.png') ?>" alt ="logo" class="logo"></li>
							<li><button class="button" id="menunav">MENU</button></li>
	 						<li><button class="button">INFO</button></li>
	 						<li><button class="button">ORDER LIST</button></li>
	 						<li id="logout"><button class="button logout"><span><i class="fa fa-sign-out" aria-hidden="true">LOG OUT</i></span></button></li>
						</ul>
					</div>
					<!-- <div class = "listnav"> -->
             <!-- <ul>
          //     <li><a href="#">MENU</a></li>
          //     <li><a href="#">INFO</a></li>
          //     <li><a href="#">ORDER LIST</a></li>
          //     <li id = "logout"><a href="#"><span><i class="fa fa-sign-out" aria-hidden="true">LOG OUT</i></a></li>
          //   </ul> -->
           <!-- </div>
        </div> -->
    </div>

	<div class="contain" id="contain" >

	</div>


	<!-- <html lang="en">
	<head>
		<!-- <meta charset="utf-8"> -->
		<!--Import Google Icon Font-->
	      <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	      <!--Import materialize.css-->
	      <!-- <link type="text/css" rel="stylesheet" href="<?php echo base_url('asset/materialize/css/materialize.min.css') ?>"  media="screen,projection"/> -->

	      <!--Let browser know website is optimized for mobile-->
	      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->

	      <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
	      <!-- <script type="text/javascript" src="<?php echo base_url('asset/materialize/js/materialize.min.js') ?>"></script> -->
	  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/select_bar.css') ?>"> -->
	  <!-- <style> -->
	  <!-- .page-footer{ -->
	    <!-- background-color: skyblue; -->
	  <!-- } -->
	  <!-- </style> -->
	<!-- </head> -->

					<footer class="page-footer">
	          <div class="container">
	            <div class="row">
	              <div class="col l7 s12">
	                <h5 class="black-text">Pondok Makan Roji</h5>
	                <p class="black-text text-lighten-4">Address : Ruko L'Agricola, Blok B-7, Jl. Curug Sangereng Raya, Serpong Utara, Tangerang</p>
	                <p class="black-text text-lighten-4">Phone Number : 021 22221337</p>
	              </div>
	              <!-- <div class="col l4 offset-l2 s12">
	                <h5 class="white-text">Links</h5>
	                <ul>
	                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
	                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
	                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
	                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
	                </ul>
	              </div> -->
	            </div>
	          </div>
	          <div class="footer-copyright">
	            <div class="container">
	            © 2017 Copyright Roji
	            <a class="grey-text text-lighten-4 right">Eddrick, Galu, Stephen</a>
	            </div>
	          </div>
	        </footer>
			</div>
		</body>


<!-- </div>

</body> -->

<script type="text/javascript">
function changeInsideWithData(data){
}

$(document).ready(function(){
	  $("#menunav").click(function(){
			 alert("Text: ");
			 $("#contain").load("<?php echo base_url('Welcome/change')?>");
	    // $.get( '<?php echo site_url('Welcome/change')?>', function( data ) {
			// 	console.log(data);
	    //   $("#menubox").html(data);
	    // });
	  });
	});
</script>
</html>
