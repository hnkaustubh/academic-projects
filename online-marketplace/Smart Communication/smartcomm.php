<!DOCTYPE html>
<html>
<head>
	<title>Smart Communication</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta name="viewport" content="width=device-width">	    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- rating star css -->
    <link rel="stylesheet" href="js/ratingstar.css"> 
</head>
<body style="background-image: url('../img/try9.jpeg'); padding-left: 30px; margin-top: 10px; text-align: justify;">
	<div class="first" style="margin-top: -5px; margin-left: 220px; width: 1500px;">
		<ul>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="../smartsolutions.php">Home</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../about.html">About Us</a></li>
            <li style="font-size: 20px; width: 250px; height: 30px;"><a href="../products.php">Products and Services</a>
<!--                <ul></ul> -->
            </li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../news.html">News</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../contacts.php">Contacts</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../admin.php">Admin</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../users.php">Users</a></li>
		</ul>
	</div>
	<br><br><br>
	<div class="smartcomm" style="background-image: url('../img/wheat.jpg'); height: 180px; margin-top: -20px;">
		<h1 style="color: black; margin-left: 20px; top: 20px; position: relative;">Smart Communication</h1>
	</div>

    <div style="border-style: dotted solid double dashed;">
        <label for="email" style="font-size: 20px; margin-left: 10px;">Please Rate this product :</label>     
            <div class='starrr' id='rating-student'></div>
    </div>

    <div class="numberRating" style="font-size: 20px; position: relative; left: 700px;">
            <p style="margin-top: -34px; margin-left: 250px;"><strong>Give a Number Rating: </strong></p>
            <div style="margin-top: -40px; margin-left: 470px;">
                <?php foreach (range(1,5) as $rating): ?>
                    <a href="rate.php?rating=<?php echo $rating; ?>"><?php echo $rating."&nbsp"; ?></a>
                <?php endforeach ?>
            </div>
    </div>

	<div style="font-size: 20px; /*background-color: green;*/ margin-top: -50px; color: black; position: relative; top: 60px;">
		<p></p>
		<p>There are a variety of critical distribution automation functions within the smart grid where reliable data communication solutions will benefit the entire system. Some of the more recent functions/devices within the distribution layer being automated and remotely monitored are reclosers, feeder switches, capacitor banks, fault circuit indicators and voltage regulators. Reclosers, automated feeder switches and fault circuit indicators provide critical functionality within the distribution automation scheme because electric power can be instantaneously re-routed around a fault, improving power delivery and limiting any issues with end-users. Capacitor banks and voltage regulators play an integral role in grid optimization by increasing stored energy and improving system power quality.To improve distribution automation and leverage the power of the devices previously mentioned, utilities also must choose the ideal data communication technology. In other words, distribution automation practices are only as successful as the communication network technology that binds them together. It is important, therefore, for a utility operator to understand the needs of these applications within the individual system, as well as look to what has worked for other utilities.</p>
		<p>In the factories of the future, smart communications will become increasingly critical in all aspects of the operation. As models for the Industrial Internet of Things (IIoT) mature and become hardened realities, the technologies and strategies for connecting machines will be essential for enabling increased efficiency, resiliency and productivity. Moving toward a truly connected factory environment requires recognizing the fundamental shift from discrete silos to an integrated stack that connects all layers of the operation i.e. from the production floor to the back office and global networks as well as third party data sources. Advanced communication technology is essential for driving enormous increases in efficiency in this model and eliminating the obstacles for communication between the server and field levels.</p>
		<p><strong>What Smart Communications Networks Must Deliver</strong><br>
			The factory of the future will be built upon cyber-physical systems, which are the integration of computation, networking and physical processes.  It’s estimated that the number of connected devices will double or triple in these operations. In this environment, optimal performance of the communications network will be defined by the ability of the network to:<br>

1. Reliably and securely connect a large number of devices<br>
2. Transfer large amounts of data in real-time<br>
3. Leverage wireless technology for remote connectivity, both within the factory and remotely<br>
4. Play a valuable role in ensuring cybersecurity for all equipment and systems<br>
Examining the ways in which the communications and network technologies available today support these objectives offers a foundation for moving ahead on a smart communications strategy.
		</p>

	    <br><br><br>

		<img src="../img/sc1.jpg" style="margin-left: 350px; margin-left: 140px">
		<img src="../img/sc2.jpg" style="margin-left: 350px; float: left; margin-left: 300px">
		<br><br><br>

<p><strong>Designing the Smart Communications Network</strong><br>
While network complexity will increase in the factories of the future, manufacturers will remain diligent in ensuring the lowest cost and highest efficiency. Achieving these objectives will drive several shifts in connectivity and network topology, including:<br>

1. All communications will be based on IP protocol families, and Ethernet will be the underlying communication protocol for consistent and unified communication.<br>
2. The connectivity of devices will be hierarchical. Today, the field level is divided into logical cells, but as the amount of data generated in the cells will be significantly higher, this model will simplify network management and operation. Logical communication overlays and Publish-Subscribe systems will connect devices across all levels of the hierarchy.<br>
3. The use of star topologies will increase due to the advantages of lower latency and higher reliability. Simulations have shown that the use of one larger switch for connections delivers higher Mean-Time-Between-Failure (MTBF).<br>
4. Extensively meshed network topologies will also increase. Line or ring topologies will also be used, providing cabling advantages and requiring less management efforts.<br>
Combined with new protocols, these networks will be easier to manage with centralized cloud services, make better use of resources and reduce costs. New services that leverage this connectivity can increase productivity, create new production processes and offer better products, such as customer-specific designs and feature sets.</p>
<img src="../img/sc3.jpg" style="margin-left: 350px; width: 750px"><br>

<br>
<p><strong>Case Study Example:</strong><br>The key to successful smart grid operations is reliable, secure communications. Wireless data communication systems provide real-time visibility to system performance through an owned, self-operated network. This is unlike public infrastructure communications-such as cellular or satellite systems-that have recurring fees and limited accountability for outage resolution.

Dairyland Power, an electric power cooperative based in La Crosse, Wis., is an example of a utility organization that has leveraged robust, long-range wireless data communication networking for its distribution automation layer and, as a result, improved grid efficiency and business operations across the board.

Dairyland was looking for a communication system that could monitor data in the distribution of electric power. Dairyland serves more than 600,000 customers in a service area of 45,000 square miles. The cooperative specifically serves rural communities and provides wholesale electricity to 25 member distribution cooperatives and 16 municipal utilities in four states (Wisconsin, Minnesota, Iowa and Illinois).<br>

Dairyland's earliest distribution substations did not have real-time data acquisition. Instead, metering data was recorded on magnetic tapes, which was translated monthly by having a field technician drive to the substation and manually gather data. The company recognized the need to streamline its power delivery by deploying a more advanced monitoring system. At the time, wireless communication technology for data transmission in utilities was a new concept. While it had come a long way from its manual beginning, Dairyland's existing infrastructure was complicated, limiting in nature and was increasingly expensive.<br>

When Dairyland first implemented wireless data radios, it deployed a small installation base of frequency hopping spread spectrum wireless data radios. The power cooperative, however, also wanted to test the other available options. After conducting a distribution automation study comparing various types of communication technologies that faced harsh weather conditions and line-of-sight challenges from hilly terrain, the robust and reliable data transmission provided by a leading spread spectrum wireless data radio manufacturer helped convince Dairyland to continue using wireless data communications exclusively in its distribution network. After deployment, the product performed up to expectations and the wireless data radios eventually replaced the majority of Dairyland's pre-existing technology-lead circuits, analog cell phones, etc.-enabling real-time data collection across the distribution system. In some of the network's areas there was no prior technology, so wireless data radios were deployed, creating a fully integrated solution across Dairyland's entire communication network.<br>

These same wireless data radios are now used for a variety of distribution automation applications within the Dairyland data communication network, including AMI backhaul, transmission capacitor bank control, transmission line sectionalizing, and fault detection and isolation. The cooperative also uses industrial 900 MHz wireless Ethernet radios for applications that require more effective throughput. The radio network features a single-system design that is easily maintained. Much of the maintenance is credited to the technology vendor's diagnostic software and 24/7 technical support-another important consideration for selecting a communication technology and owning/operating the network. Overall, Dairyland has achieved single system integration, link performance and reliability by implementing a wireless data communications network.</p>

<img src="../img/sc4.jpg" style="margin-left: 350px; width: 750px"><br>

<p><strong>Conclusion:</strong><br>
With the proper technology, automation of distribution applications in the power grid can streamline operations, improve grid efficiency and ultimately benefit the end user. By choosing a spread spectrum wireless provider, for example, Dairyland Power was able to create single system integration for a variety of applications. In addition, with wireless automation, there is continuous data available for monitoring and control that can be managed from the utility operator's desktop. Some technology can offer security and reliability, all while transmitting data from remote locations. As more utilities adapt a wireless communications system, reputable technology providers are working hard to continue meeting the communication needs within the industry.<br>

</div>

<br><br><br>
<div class="row">
<div class="col-md-12">
   <div style="border-style: dotted; margin-top: 20px; padding-left: 20px; width: 70%; margin-left: 200px;">
    <div class="form-group">
        <div class="form-group has-success has-feedback">
            <h1>Please submit a Feedback</h1>
            <label for="name">Name :</label>
            <input type="text" class="form-control" id="name" style="width: 600px;">          
        </div>
        <div class="form-group has-success has-feedback">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" style="width: 600px;">            
        </div>   
        <h5 style="margin-left:0px">Message: </h5><textarea style="margin-left:0px" rows="10" cols="100"></textarea>  <br><br>
        <input type="button" id="submit" class="btn btn-success" value="Submit" style="margin-left: 300px; width: 100px; background-color: black; color: green; font-weight: bold; ">
        <div class="msg"></div>
    </div>  
</div>
</div>

<hr>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- star js -->
<script src="js/ratingstar.js"></script>
<!-- ajax -->
<script>
// rating
var rate;
$('#rating-student').starrr({
  change: function(e, value){ 
    rate = value;          
    if (value) {
      $('.your-choice-was').show();      
    } else {
      $('.your-choice-was').hide();
    }
  }
});
// ajax submit
$("#submit").click(function(){  
    var name = $('#name').val();
    var email = $('#email').val();  
    $.ajax({        
        url: "rating.php",
        type: 'post',
        data: {v1 : name, v2 : email, v3 : rate},
        success: function (status) {
            if(status == 1){
                $('.msg').html('<b>Student Inserted !</b>');
            }else{
                $('.msg').html('<b>Server side error !</b>');               
            }
        }
    });

});
</script>

</body>
</html>