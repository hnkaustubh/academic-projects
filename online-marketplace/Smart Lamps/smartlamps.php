<!DOCTYPE html>
<html>
<head>
	<title>Smart Lamps</title>
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
<body style="background-color: #FFA07A; padding-left: 30px; text-align: justify;">
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
	<div class="smartlamps" style="background-image: url('../img/wheat.jpg'); height: 180px;">
		<h1 style="color: black; margin-left: 20px; top: 20px; position: relative;"><strong>Smart Lights</strong></h1>
	</div>
    <br>
    <div style="border-style: dotted solid double dashed;">
        <label for="email" style="font-size: 20px;">Please Rate this product :</label>  <div class='starrr' id='rating-student'></div>

        <div class="numberRating" style="font-size: 20px; position: relative; left: 700px;">
            <p style="margin-top: -34px; margin-left: 250px;"><strong>Give a Number Rating: </strong></p>
            <div style="margin-top: -40px; margin-left: 470px;">
                <?php foreach (range(1,5) as $rating): ?>
                    <a href="rate.php?rating=<?php echo $rating; ?>"><?php echo $rating."&nbsp"; ?></a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
	<div style="font-size: 20px; /*background-color: green;*/ margin-top: -50px; color: black; position: relative; top: 60px;">
		<p>Street lighting is one of the most important aspects of a city&#39s infrastructure, which illuminate a city&#39s streets during dark hours of the day. Conventional street lighting systems in areas with a low frequency of passersby are online most of the night without purpose. The consequence is that a large amount of power is wasted meaninglessly. Smart street lights is a project on intelligent illumination control of street lights to optimize the problem of power consumption and illumination of the streets, late in the night.</p>
		<p>Making cities smarter helps improve city services and increases citizens&#39 quality of life. Information and communication technologies (ICT) are fundamental for progressing towards smarter city environments. Smart City software platforms potentially support the development and integration of Smart City applications. <br><br><br>
		<img src="../img/smartstreet.jpg" style="margin-left: 350px;"><br><br>
	This project is designed to develop, implement, and validate an IOT-based cloud infrastructure system as a Software as a Service(SaaS) for Smart Streets in a smart city. As shown in the figure above, a smart street consists of several smart nodes. Each node is installed on a utility pole on a street. Further, each node is equipped with a few sensors. A smart cluster controller among smart nodes will be used to control few such connected smart nodes and supports communication with the back-end server in order to send the collected sensor data for all the nodes. In addition, each smart node has wireless communication capability, which supports node-to-cluster communication. Each cluster node has internet connectivity.</p>

	<h3>System Design and Architecture</h3>
	<img src="../img/architecture.png" style="margin-left: 80px;">
	<p>The above architecture shows the outline of our infrastructure.

Several sensors constitute towards the forming of one Smart Node. The above shown nodes do not have any communication mechanism with each other. All the Smart Nodes send the sensor data to the cluster. Therefore 4 clusters take care of the underlying 20 smart nodes.

Cluster acts as an interface to transfer/transmit its underlying sensor&#39s data to the cloud database. The data from the cluster is sent to the cloud service provider as IP Packets through the ISP. These IP Packets are then received by the Gateway router of the cloud provider and the sensor data is taken out from the packets and then stored in the Database.<br><br>
The data from the sensors will be sent to the cloud provider&#39s database. Then the data is organized in a framework (web page). The statistics, performance and availability of the sensors and its data can be viewed in a structured manner through a webpage. This information will be helpful to the Clients, maintenance people and the infrastructure managers. The smart node can be configured by the maintenance people after viewing and fetching the visual report of the sensors. Configuration of the sensors by the authoritative staffs is possible as the status of each cluster, smart node and each sensor is clearly visible.

The data can be easily accessed by throwing the API request to the Cloud Provider Database. According to the response received, the data is manipulated and plotted/marked. The UI design of the IOT framework allows us to communicate with the cloud service using the ISP. Request packets are sent, and the response packets are received like an HTTP request and response (API request/response).</p>
<img src="../img/system.png" style="margin-left: 250px;">
</div>

<br><br><br>
<div class="row">
<div class="col-md-12">

<div style="border-style: dotted; margin-top: 20px; padding-left: 20px; width: 70%; margin-left: 200px;">
    <div class="form-group">
        <form method="POST">
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
            <input type="button" name="submit" id="submit" class="btn btn-success" value="Submit" style="margin-left: 300px; width: 100px; background-color: black; color: green; font-weight: bold; ">
            <div class="msg"></div>
        </form>
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

    <?php
        $conn = mysqli_connect("54.193.22.204","tester","password","project_281");
        if(isset($_POST['submit'])){
            $rating = $_POST['rating'];
            echo $rating;
            $query = "INSERT INTO slnum(rating) VALUES($rating)";
            $result = mysqli_query($conn,$query);
        }

    ?>
</body>
</html>