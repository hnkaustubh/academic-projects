
<!DOCTYPE html>
<html>
<head>
	<title style="position: relative; right: 600px;">Dashboard</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<style>
		* { 
			margin: 0;
			padding: 0;
	  	}
        #map {
            height: 600px;
            width: 100%;
            margin-left: 0px;
            font-size: 20px;
            position: fixed;
            bottom: 12px;
            background-color: black;
        }
		
	</style>

</head>



	<div id="form">
		<form method="POST" action="dashboard2.php">

			<div class="otherinfo" style="padding-left: 10px; padding-top: 20px; border-style: dotted; height: 245px">
				<h3>City  <input type="text" name="city" placeholder="city" id="city" value="" style="width: 130px; height: 30px; font-size: 17px;"></h3>
				<h3 style="float: right; position: relative; top: -32px; right: 250px;">Street  <input type="text" name="street" id="street" placeholder="street" style="width: 130px; height: 30px; font-size: 17px;"></h3>
				<h3 style="float: right; position: relative; top: -32px; right: -170px;">Cluster  <input type="text" name="cluster" id="cluster" placeholder="cluster" style="width: 130px; height: 30px; font-size: 17px;"></h3>
				<br><br>
				<h3>Format:	<input type="radio" name="format" value="Line Curve" style="margin-left: 30px;"> Line Curve  </h3>
				<h3 style="float: right; position: relative; top: -23px; right: 250px;"><input type="radio" name="format" value="Area Curve"> Area Curve  </h3>
				<h3 style="float: right; position: relative; top: -23px; right: -20px;"><input type="radio" name="format" value="Bar Graph"> Bar Graph  </h3>
				<!-- <select name="format" style="width: 130px; height: 30px; font-size: 17px;">
					<option>Line Curve</option>
					<option>Area Curve</option>
					<option>Bar Graph</option>
				</select></h3> -->
				<br><br><br>
				<!-- <h3 style="position: relative; top: -28px; right: 0px;">Report:  <input type="radio" name="report" value="Monthly" style="margin-left: 32px;"> Monthly </h3>
				<h3 style="bottom: 50px; position: relative; right: -264px;">          
				<input type="radio" name="report" value="Daily" >  Daily </h3>
				<br><br> -->

				<h3 style="position: relative; top: -28px; right: 0px;">Report:
				<h3 style="position: relative; top: -20px; right: -145px;">Year</h3> 
					<input type="text" name="year" style="position: relative; top: -80px; right: -120px; width: 90px; height: 30px; font-size: 17px;">
					<input type="radio" name="report" value="Monthly" style="position: relative; top: -80px; right: -167px;"> 
					<h3 style="position: relative; top: -105px; right: -282px;">Monthly</h3>
				<h3 style="bottom: 130px; position: relative; right: -427px;">          
				<input type="radio" name="report" value="Daily" >  Daily </h3>
				<br><br>


			</div>
		</form>
	</div>

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
					icon: 'busstop.png',
				});

				var lamarker = new google.maps.Marker({
					position: losangeles,
					map: map,
					icon: 'busstop.png',
				});

				var lvmarker = new google.maps.Marker({
					position: lasvegas,
					map: map,
					icon: 'busstop.png',
				});

				var sdmarker = new google.maps.Marker({
					position: sandiego,
					map: map,
					icon: 'busstop.png',
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
						icon: 'busstop.png'
					});

					ssstmarker.addListener('click', function(){
						map.setZoom(15);
						document.getElementById('street').value = 'San Salvador St';
						var ssstmarker2 = new google.maps.Marker({
							position: sansalvadorst2,
							map: map,
							icon: 'busstop.png'
						});

						var ssstmarker3 = new google.maps.Marker({
							position: sansalvadorst3,
							map: map,
							icon: 'busstop.png'
						});

						var ssstmarker4 = new google.maps.Marker({
							position: sansalvadorst4,
							map: map,
							icon: 'busstop.png'
						});

						var ssstmarker5 = new google.maps.Marker({
							position: sansalvadorst5,
							map: map,
							icon: 'busstop.png'
						});

						var ssstmarker6 = new google.maps.Marker({
							position: sansalvadorst6,
							map: map,
							icon: 'busstop.png'
						});

						var ssstmarker7 = new google.maps.Marker({
							position: sansalvadorst7,
							map: map,
							icon: 'busstop.png'
						});

						var ssstmarker8 = new google.maps.Marker({
							position: sansalvadorst8,
							map: map,
							icon: 'busstop.png'
						});

						var ssstmarker9 = new google.maps.Marker({
							position: sansalvadorst9,
							map: map,
							icon: 'busstop.png'
						});

						var ssstmarker10 = new google.maps.Marker({
							position: sansalvadorst10,
							map: map,
							icon: 'busstop.png'
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
							icon: 'busstop.png'
						});

						var scst3 = new google.maps.Marker({
							position: santaclarast3,
							map: map,
							icon: 'busstop.png'
						});

						var scst4 = new google.maps.Marker({
							position: santaclarast4,
							map: map,
							icon: 'busstop.png'
						});

						var scst5 = new google.maps.Marker({
							position: santaclarast5,
							map: map,
							icon: 'busstop.png'
						});

						var scst6 = new google.maps.Marker({
							position: santaclarast6,
							map: map,
							icon: 'busstop.png'
						});

						var scst7 = new google.maps.Marker({
							position: santaclarast7,
							map: map,
							icon: 'busstop.png'
						});

						var scst8 = new google.maps.Marker({
							position: santaclarast8,
							map: map,
							icon: 'busstop.png'
						});

						var scst9 = new google.maps.Marker({
							position: santaclarast9,
							map: map,
							icon: 'busstop.png'
						});

						var scst10 = new google.maps.Marker({
							position: santaclarast10,
							map: map,
							icon: 'busstop.png'
						});

						var scst11 = new google.maps.Marker({
							position: santaclarast11,
							map: map,
							icon: 'busstop.png'
						});

						var scst12 = new google.maps.Marker({
							position: santaclarast12,
							map: map,
							icon: 'busstop.png'
						});

						var scst13 = new google.maps.Marker({
							position: santaclarast13,
							map: map,
							icon: 'busstop.png'
						});

						var scst14 = new google.maps.Marker({
							position: santaclarast14,
							map: map,
							icon: 'busstop.png'
						});

						var scst15 = new google.maps.Marker({
							position: santaclarast15,
							map: map,
							icon: 'busstop.png'
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

		<blockquote id="quote" style="position: relative; top: 30px; left: 250px; font-size: 25px;"><em><strong>"Energy Conservation is the Foundation of Energy Independence - Tom Allen"</em></strong></blockquote>

		<script asynx defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcWpJpKZfQ4guU5PvpMNaXDCxdivzd73Q&callback=initMap">
			
		</script>
	</div>
</body>
</html>
