<html>
  <head>
    <title>Deleting Node</title>

	<!-- include css file here-->
    <link rel="stylesheet" href="css/style.css"/>
	
	<!-- include javascript file here-->
    <script src="js/login.js"></script> 
      
  </head>
  <body>
      <div id="map"></div>
      <script>
          
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
              
              var map = new google.maps.Map(document.getElementById("map"),{zoom: 5, center: sanjose});
              
              var sjmarker = new google.maps.Marker({position: sanjose,map: map,icon: 'antenna.gif',});
              
              var lamarker = new google.maps.Marker({position: losangeles,map: map,icon: 'antenna.gif',});
              var lvmarker = new google.maps.Marker({position: lasvegas,map: map,icon: 'antenna.gif',});
              
              var sdmarker = new google.maps.Marker({position: sandiego,map: map,icon: 'antenna.gif',});
              
              var infoWindow1 = new google.maps.InfoWindow({content: '<h3>Cluster 1</h3>',maxWidth: 70,height: 1});
              
              var infoWindow2 = new google.maps.InfoWindow({content: '<h3>Cluster 2</h3>',maxWidth: 70,height: 1});
              
              var infoWindow3 = new google.maps.InfoWindow({content: '<h3>Cluster 3</h3>',maxWidth: 70,height: 1});
              
              sjmarker.addListener('click', function(){map.setZoom(14);
                                   document.getElementById('city').value = 'San Jose';
                                   var ssstmarker = new google.maps.Marker({position: sansalvadorst,map: map,icon: 'antenna.gif'});
                                   ssstmarker.addListener('click', function(){map.setZoom(15);
                                                          document.getElementById('street').value = 'San Salvador St';
                                                          var ssstmarker2 = new google.maps.Marker({position: sansalvadorst2,map: map,icon: 'antenna.gif'});
                                                          
                                                          var ssstmarker3 = new google.maps.Marker({position: sansalvadorst3,map: map,icon: 'antenna.gif'});
                                                          
                                                          var ssstmarker4 = new google.maps.Marker({position: sansalvadorst4,map: map,icon: 'antenna.gif'});
                                                          
                                                          var ssstmarker5 = new google.maps.Marker({position: sansalvadorst5,map: map,icon: 'antenna.gif'});
                                                          
                                                          var ssstmarker6 = new google.maps.Marker({position: sansalvadorst6,map: map,icon: 'antenna.gif'});
                                                          
                                                          var ssstmarker7 = new google.maps.Marker({position: sansalvadorst7,map: map,icon: 'antenna.gif'});
                                                          
                                                          var ssstmarker8 = new google.maps.Marker({position: sansalvadorst8,map: map,icon: 'antenna.gif'});
                                                          
                                                          var ssstmarker9 = new google.maps.Marker({position: sansalvadorst9,map: map,icon: 'antenna.gif'});
                                                          
                                                          var ssstmarker10 = new google.maps.Marker({position: sansalvadorst10,map: map,icon: 'antenna.gif'});
                                                          
                                                          map.setCenter(ssstmarker5.getPosition());
                                                          
                                                          infoWindow1.open(map,ssstmarker5);
                                                          infoWindow2.open(map,ssstmarker10);
                                                          infoWindow3.open(map,ssstmarker15);
                                                          
                                                          ssstmarker5.addListener('click',function(){infoWindow1.open(map,ssstmarker5);
                                                                                  document.getElementById('cluster').value = 1;});});
                                   
                                   // ssstmarker5.addListener('click',function(){
                                   //         infoWindow1.open(map,ssstmarker5);
                                   //         document.getElementById('cluster').value = 1;
                                   //     });
                                   
                                   //     ssstmarker10.addListener('click',function(){
                                   //         infoWindow2.open(map,ssstmarker10);
                                   //         document.getElementById('cluster').value = 2;
                                   //     });
                                   
                                   sjmarker.addListener('click', function(){
                                                        map.setZoom(15);
                                                        document.getElementById('street').value = 'E Santa Clara St';
                                                        var scst2 = new google.maps.Marker({
                                                                                           position: santaclarast2,
                                                                                           map: map,
                                                                                           icon: 'antenna.gif'});
                                                        
                                                        var scst3 = new google.maps.Marker({
                                                                                           position: santaclarast3,
                                                                                           map: map,
                                                                                           icon: 'antenna.gif'
                                                                                           });
                                                        
                                                        var scst4 = new google.maps.Marker({position: santaclarast4,map: map,icon: 'antenna.gif'});
                                                        
                                                        var scst5 = new google.maps.Marker({position: santaclarast5,map: map,icon: 'antenna.gif'});
                                                        
                                                        var scst6 = new google.maps.Marker({position: santaclarast6,map: map,icon: 'antenna.gif'});
                                                        
                                                        var scst7 = new google.maps.Marker({position: santaclarast7,map: map,icon: 'antenna.gif'});
                                                        
                                                        var scst8 = new google.maps.Marker({position: santaclarast8,map: map,icon: 'antenna.gif'});
                                                        
                                                        var scst9 = new google.maps.Marker({position: santaclarast9,map: map,icon: 'antenna.gif'});
                                                        
                                                        var scst10 = new google.maps.Marker({position: santaclarast10,map: map,icon: 'antenna.gif'});
                                                        
                                                        var scst11 = new google.maps.Marker({position: santaclarast11,map: map,icon: 'antenna.gif'});
                                                        
                                                        var scst12 = new google.maps.Marker({position: santaclarast12,map: map,icon: 'antenna.gif'});
                                                        
                                                        var scst13 = new google.maps.Marker({position: santaclarast13,map: map,icon: 'antenna.gif'});
                                                        
                                                        var scst14 = new google.maps.Marker({position: santaclarast14,map: map,icon: 'antenna.gif'});
                                                        
                                                        var scst15 = new google.maps.Marker({position: santaclarast15,map: map,icon: 'antenna.gif'});
                                                        
                                                        map.setCenter(sjmarker.getPosition());
                                                        
                                                        infoWindow1.open(map,scst5);
                                                        
                                                        sinfoWindow2.open(map,scst10);
                                                        infoWindow3.open(map,scst15);
                                                        scst5.addListener('click',function(){
                                                                          infoWindow1.open(map,scst5);
                                                                          document.getElementById('cluster').value = 1;
                                                                          });
                                                        
                                                        scst10.addListener('click',function(){infoWindow2.open(map,scst10);
                                                                           document.getElementById('cluster').value = 2;
                                                                           });
                                                        
                                                        scst15.addListener('click',function(){infoWindow3.open(map,scst15);
                                                                           document.getElementById('cluster').value = 3;
                                                                           });
                                                        });
                                   });
          }
      </script>
      
      <script asynx defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcWpJpKZfQ4guU5PvpMNaXDCxdivzd73Q&callback=initMap">
          
          </script>
      </div>
	<div class="container">
	  <div class="main">
		<h2>Node Deletion</h2><hr/>
 
		<form id="form_id" method="post" name="myform">
          <label>Node ID :</label></br>
		  <input type="text" name="Node_ID" id="username"/></br>
 
		  <label>Under which Cluster? :</label></br>
		  <input type="password" name="CLuster_ID" id="password"/></br>
 
          <label>Zone :</label></br>
          <input type="password" name="Zone" id="password"/></br>
          
		  <input type="button" value="DELETE NODE" id="submit" onclick="validate()"/></br></br>
          <label>Confirm the details before clicking submit.</label></br>
		</form>
		
	  </div>
	  
	</div>
 </body>
</html>
