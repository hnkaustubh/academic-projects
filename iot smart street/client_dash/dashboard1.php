<?php
	$format = $_POST['format'];
	if(strcmp($format, "Line Curve") == 0)
		header('Location: dashboard2.php');
	// else
	// 	echo "Sorry...";
?>

<!DOCTYPE html>
<html>
<head>

	<style>
		* { 
			margin: 0;
			padding: 0;
            
	  	}
		#map {
			height: 600px;
			width: 100%;
			margin-left: 0px;
            margin_top: 50px
			font-size: 20px;
			position: relative;
			bottom: 12px;
			background-color: black;

		}
		#form{
			position: relative;
			width: 50%;
			height: 400px;
			left: 320px;
			bottom: 0px;
			border-style: solid;
			background-image: url('background/form_back.png');
		}

		.first{
			padding-left: 20px;
			margin-left: 200px;
			float: center;
			width: 100%;
			height: 50px;
			color: white;
			/*background-color: green;*/
			position: relative;
			bottom: 10px;
			left: -12px;
			cursor: url(handcursor.jpg),pointer;
		}

		ul{
			margin: 0px;
			padding: 0px;
			list-style: none;
		}

		ul li{
			float: left;
			width: 205px;
			height: 40px;
			background-color: black;
			opacity: .8;
			line-height: 40px;
			text-align: center;
			font-size: 20px;
			margin-right: 2px;
		}

		ul li a {
			text-decoration: none;
			color: white;
			display: block;
		}

		ul li ul li:hover {
			background-color: green;
		}

		ul li a:hover {
			background-color: green;
		}

		ul li ul li{
			display: none;
		}

		ul li:hover ul li {
			display: block;
		}

		body{
			background-size: cover;
            width: 100%
			font-family: Arial;
			color: black;
			/*background-image: url('dashboardbackground.jpg');*/
		}
        .sidebar{
			position: center;
			width: 60%;
			height: 0%;
			margin-top: 0px;
            margin-bottom: 10px;
            margin-left: 300px;
			
			background: #151719;
			/*background-color: black;*/
			left: 0px;
			/*transition: all ease-in-out 400ms;*/
			cursor: url(handcursor.jpg),pointer;
			/*-webkit-transition: all ease-in-out 400ms;*/
		}
		.php{
			position: center;
			left: 0px;
			top: 100px;
			width: 100%;
			background-color: green;
		}

		/*.id{
			position: relative;
			width: 30%;
			height: 200px;
			background-color: green;	
			left: 200px;
		}*/
	</style>
	<script>
		function required(){
			var empt = document.forms["form"]["datein"].value;
			if (empt == "")
			{
				alert("Please input a Value");
				return false;
			}else{
				document.form.submit();
				return true;
			}
		}
	</script>
</head>

<body background="background/dashboardbck.jpg">

	<div class="first">

		<ul>
			<li><a href="">Back</a></li>
			<li><a href="about.html">About Us</a>
				<ul></ul>
			</li>
			<li><a href="products.php">Products and Services</a>
				<!-- <ul>
					<li>Activities</li>
					<li>Parks</li>
				</ul> -->
			</li>
			<li><a href="news.html">News</a></li>
			<li><a href="contacts.php">Contacts</a></li>
		</ul>
	</div>

	<div id="sidebar" class="sidebar" onclick="toggleSideBar()">
		<div id="toggle-btn" class="toggle-btn">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<ul>
			<li><a>Sensor Station</a></li>
			<li><a href="file:///Applications/MAMP/htdocs/cloud_project/IFM/dazzle/index.html">Infrastructure Manager</a></li>
			<li><a>Smart Street Manager</a></li>
			<li><a>Dashboard</a></li>
		</ul>
	</div></br></br></br></br>
        <h1 style="color: white;margin-left: 600px">DATACENTER</h1></br></br>

	<div id="map"></div>
		<script>
			function toggleSideBar(){
				document.getElementById("sidebar").classList.toggle('active');
			}	

			function initMap(){
				var sanjose = {lat: 37.336157, lng: -121.890635};
				var losangeles = {lat: 34.0522, lng: -118.2437};
				var lasvegas = {lat: 36.1699,lng: -115.1398};
				var sandiego = {lat: 32.7157,lng: -117.1611};
				var sansalvadorst = {lat: 37.330035, lng: -121.886030};
				var sansalvadorst2 = {lat: 37.330544,lng: -121.885001};
				var sansalvadorst3 = {lat: 37.331011,lng: -121.883947};
				var sansalvadorst4 = {lat: 37.331536,lng: -121.882839};
				var sansalvadorst5 = {lat: 37.332027,lng: -121.881710};
				var sansalvadorst6 = {lat: 37.332552,lng: -121.880623};
				var sansalvadorst7 = {lat: 37.333078,lng: -121.879607};
				var sansalvadorst8 = {lat: 37.333509,lng: -121.878523};
				var sansalvadorst9 = {lat: 37.334033,lng: -121.877509};
				var sansalvadorst10 = {lat: 37.334520,lng: -121.876449};

				var santaclarast2 = {lat: 37.336708, lng: -121.889477};
				var santaclarast3 = {lat: 37.337195, lng: -121.888504};
				var santaclarast4 = {lat: 37.337682, lng: -121.887412};
				var santaclarast5 = {lat: 37.338201, lng: -121.886320};
				var santaclarast6 = {lat: 37.338709, lng: -121.885204};
				var santaclarast7 = {lat: 37.339247, lng: -121.884204};
				var santaclarast8 = {lat: 37.339672, lng: -121.883065};
				var santaclarast9 = {lat: 37.340191, lng: -121.882111};
				var santaclarast10 = {lat: 37.340724, lng: -121.881040};
				var santaclarast11 = {lat: 37.341227, lng: -121.880039};
				var santaclarast12 = {lat: 37.341671, lng: -121.879050};
				var santaclarast13 = {lat: 37.342102, lng: -121.878126};
				var santaclarast14 = {lat: 37.342533, lng: -121.877217};
				var santaclarast15 = {lat: 37.342975, lng: -121.876255};
				var losangelesst1 = {lat: 34.050237, lng: -118.246997};

				var map = new google.maps.Map(document.getElementById("map"), 
					{zoom: 5, center: sanjose});

				var sjmarker = new google.maps.Marker({
					position: sanjose,
					map: map,
					icon: 'antenna.gif',
				});

				var lamarker = new google.maps.Marker({
					position: losangeles,
					map: map,
					icon: 'antenna.gif',
				});

				var lvmarker = new google.maps.Marker({
					position: lasvegas,
					map: map,
					icon: 'antenna.gif',
				});

				var sdmarker = new google.maps.Marker({
					position: sandiego,
					map: map,
					icon: 'antenna.gif',
				});


				var infoWindow1 = new google.maps.InfoWindow({
					content: '<h3>Cluster 1</h3>',
					maxWidth: 70,
					height: 1
				});

				var infoWindow2 = new google.maps.InfoWindow({
					content: '<h3>Cluster 2</h3>',
					maxWidth: 70,
					height: 1
				});

				var infoWindow3 = new google.maps.InfoWindow({
					content: '<h3>Cluster 3</h3>',
					maxWidth: 70,
					height: 1
				});

				sjmarker.addListener('click', function(){
					map.setZoom(14);
					document.getElementById('city').value = 'San Jose';
					var ssstmarker = new google.maps.Marker({
						position: sansalvadorst,
						map: map,
						icon: 'antenna.gif'
					});

					ssstmarker.addListener('click', function(){
						map.setZoom(15);
						document.getElementById('street').value = 'San Salvador St';
						var ssstmarker2 = new google.maps.Marker({
							position: sansalvadorst2,
							map: map,
							icon: 'antenna.gif'
						});

						var ssstmarker3 = new google.maps.Marker({
							position: sansalvadorst3,
							map: map,
							icon: 'antenna.gif'
						});

						var ssstmarker4 = new google.maps.Marker({
							position: sansalvadorst4,
							map: map,
							icon: 'antenna.gif'
						});

						var ssstmarker5 = new google.maps.Marker({
							position: sansalvadorst5,
							map: map,
							icon: 'antenna.gif'
						});

						var ssstmarker6 = new google.maps.Marker({
							position: sansalvadorst6,
							map: map,
							icon: 'antenna.gif'
						});

						var ssstmarker7 = new google.maps.Marker({
							position: sansalvadorst7,
							map: map,
							icon: 'antenna.gif'
						});

						var ssstmarker8 = new google.maps.Marker({
							position: sansalvadorst8,
							map: map,
							icon: 'antenna.gif'
						});

						var ssstmarker9 = new google.maps.Marker({
							position: sansalvadorst9,
							map: map,
							icon: 'antenna.gif'
						});

						var ssstmarker10 = new google.maps.Marker({
							position: sansalvadorst10,
							map: map,
							icon: 'antenna.gif'
						});
						map.setCenter(ssstmarker5.getPosition());
						infoWindow1.open(map,ssstmarker5);
						infoWindow2.open(map,ssstmarker10);
						infoWindow3.open(map,ssstmarker15);

						ssstmarker5.addListener('click',function(){
							infoWindow1.open(map,ssstmarker5);
							document.getElementById('cluster').value = 1;
						});
					});

					// ssstmarker5.addListener('click',function(){
					// 		infoWindow1.open(map,ssstmarker5);
					// 		document.getElementById('cluster').value = 1;
					// 	});

					// 	ssstmarker10.addListener('click',function(){
					// 		infoWindow2.open(map,ssstmarker10);
					// 		document.getElementById('cluster').value = 2;
					// 	});

					sjmarker.addListener('click', function(){
						map.setZoom(15);
						document.getElementById('street').value = 'E Santa Clara St';
						var scst2 = new google.maps.Marker({
							position: santaclarast2,
							map: map,
							icon: 'antenna.gif'
						});

						var scst3 = new google.maps.Marker({
							position: santaclarast3,
							map: map,
							icon: 'antenna.gif'
						});

						var scst4 = new google.maps.Marker({
							position: santaclarast4,
							map: map,
							icon: 'antenna.gif'
						});

						var scst5 = new google.maps.Marker({
							position: santaclarast5,
							map: map,
							icon: 'antenna.gif'
						});

						var scst6 = new google.maps.Marker({
							position: santaclarast6,
							map: map,
							icon: 'antenna.gif'
						});

						var scst7 = new google.maps.Marker({
							position: santaclarast7,
							map: map,
							icon: 'antenna.gif'
						});

						var scst8 = new google.maps.Marker({
							position: santaclarast8,
							map: map,
							icon: 'antenna.gif'
						});

						var scst9 = new google.maps.Marker({
							position: santaclarast9,
							map: map,
							icon: 'antenna.gif'
						});

						var scst10 = new google.maps.Marker({
							position: santaclarast10,
							map: map,
							icon: 'antenna.gif'
						});

						var scst11 = new google.maps.Marker({
							position: santaclarast11,
							map: map,
							icon: 'antenna.gif'
						});

						var scst12 = new google.maps.Marker({
							position: santaclarast12,
							map: map,
							icon: 'antenna.gif'
						});

						var scst13 = new google.maps.Marker({
							position: santaclarast13,
							map: map,
							icon: 'antenna.gif'
						});

						var scst14 = new google.maps.Marker({
							position: santaclarast14,
							map: map,
							icon: 'antenna.gif'
						});

						var scst15 = new google.maps.Marker({
							position: santaclarast15,
							map: map,
							icon: 'antenna.gif'
						});

						map.setCenter(sjmarker.getPosition());
						infoWindow1.open(map,scst5);
						infoWindow2.open(map,scst10);
						infoWindow3.open(map,scst15);

						scst5.addListener('click',function(){
							infoWindow1.open(map,scst5);
							document.getElementById('cluster').value = 1;
						});

						scst10.addListener('click',function(){
							infoWindow2.open(map,scst10);
							document.getElementById('cluster').value = 2;
						});

						scst15.addListener('click',function(){
							infoWindow3.open(map,scst15);
							document.getElementById('cluster').value = 3;
						});
					});
				});
			}	
		</script>



		<script asynx defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcWpJpKZfQ4guU5PvpMNaXDCxdivzd73Q&callback=initMap">
			
		</script>
	</div>
<div id="form">
<form method="POST" action="dashboard2.php">

<br /><br />
<h3>DATE FROM
<input type="date" name="datein" value="2001-01-03" min="2001-01-01" max="2018-12-31" placeholder="Date-In" style="font-size: 17px; width: 160px" onsubmit="required()"></h3>
<h3 style="float: right; position: relative; top: -23px; right: 70px;">DATE TILL
<input type="date" name="dateout" value="2018-11-24" min="2001-01-01" max="2018-12-31" placeholder="Date-Out" style="font-size: 17px; width: 160px"></h3></br>


<div class="otherinfo" style="padding-left: 10px; padding-top: 20px; border-style: dotted; height: 245px">
<h3>CITY  <input type="text" name="city" placeholder="city" id="city" value="" style="width: 130px; height: 30px; font-size: 17px;"></h3>
<h3 style="float: right; position: relative; top: -35px; right: 280px;">STREET  <input type="text" name="street" id="street" placeholder="street" style="width: 130px; height: 30px; font-size: 17px;"></h3>
<h3 style="float: right; position: relative; top: -35px; right: -170px;">CLUSTER  <input type="text" name="cluster" id="cluster" placeholder="cluster" style="width: 130px; height: 30px; font-size: 17px;"></h3>
<br><br>
<h3><input type="radio" name="format" value="Line Curve" style="margin-left: 50px;"> LINE CURVE  </h3>
<h3 style="float: right; position: relative; top: -20px; right: 275px;"><input type="radio" name="format" value="Area Curve"> AREA CURVE  </h3>
<h3 style="float: right; position: relative; top: -20px; right: -88px;"><input type="radio" name="format" value="Bar Graph"> BAR GRAPH  </h3>

<br><br><br></br></br>


<h3 style="position: relative; top: -45px; right: 0px;">YEAR
<h3 style="position: relative; top: -20px; right: -145px;"></h3>
<input type="text" name="year" style="position: relative; top: -80px; right: -55px; width: 125px; height: 30px; font-size: 17px;">
<input type="radio" name="report" value="Monthly" style="position: relative; top: -80px; right: -153px;">
<h3 style="position: relative; top: -105px; right: -305px;">MONTHLY</h3>


<input type="radio" name="report" value="Daily" style="position: relative; top: -125px; right: -520px;">
<h3 style="bottom: 144px; position: relative; right: -540px;">DAILY</h3>
<br><br>


<input type="image" name="submit" src="background/submit.png" style="left: 290px; position: relative; bottom: 140px; width: 130px;" />


</div>
</form>
</div>
</body>
</html>
