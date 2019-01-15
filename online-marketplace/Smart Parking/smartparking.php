<!DOCTYPE html>
<html>
<head>
	<title>Smart Parking</title>
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
		<h1 style="color: black; margin-left: 20px; top: 20px; position: relative;">Smart Parking</h1>
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
		<p>We propose a new &#34smart parking&#34 system for an urban environment. The system assigns and reserves an optimal parking space for a driver based on the user's requirements that combine proximity to destination and parking cost, while also ensuring that the overall parking capacity is efficiently utilized. Our approach solves a Mixed Integer Linear Program (MILP) problem at each decision point in a time-driven sequence. The solution of each MILP is an optimal allocation based on current state information and subject to random events such as new user requests or parking spaces becoming available. The allocation is updated at the next decision point ensuring that there is no resource reservation conflict and that no user is ever assigned a resource with higher than the current cost function value. Implementation issues including parking detection, reservation guarantee and Vehicle-to-Infrastructure (V2I) or Infrastructure-to-Vehicle (I2 V) communication are resolved in the paper. Our system can save driver time, fuel and expense, while reducing the traffic congestion and environment pollution. We also describe a deployment and testing pilot study of the system in a garage at Boston University.</p>
		<p>The industrialization of the world, increase in population, slow paced city development and mismanagement of the available parking space has resulted in parking related problems. There is a dire need for a secure, intelligent, efficient and reliable system which can be used for searching the unoccupied parking facility, guidance towards the parking facility, negotiation of the parking fee, along with the proper management of the parking facility. Intelligent Parking Service is a part of Intelligent Transportation Systems (ITS). This paper reviews different Intelligent Parking Services used for parking guidance, parking facility management and gives an insight into the economic analysis of such projects. The discussed systems will be able to reduce the problems which are arising due to unavailability of a reliable, efficient and modern parking system, while the economic analysis technique will help in analyzing the projects' feasibility.</p>
		<p>Parking and traffic congestion are constant sources of frustration for drivers, merchants, employers and public officials in most cities around the world. It is no surprise that smart parking services are top of mind with public officials, city information technology (IT) and innovation executives when planning smart cities.

In the age of “smart” and the Internet of Things (IoT), it’s easy to see why smart parking solutions are considered innovative.

Sensors embedded in the ground, or cameras mounted on light poles or building structures, determine whether the parking spaces are occupied or available. This data is routed wirelessly to a gateway, and relayed to a central cloud-based smart parking platform. It is aggregated with data from other sensors to create a real time parking map.</p>
		<p>Drivers use this map on their mobile phone to find parking faster and easier instead of blindly driving around searching (Figure One). For parking control officers, the map below directs them to where the parking violations are and improves their citation enforcement effectiveness.</p>

	    <br><br><br>

		<img src="../img/smartparkingin3.jpg" style="margin-left: 350px; margin-left: 140px">
		<img src="../img/smartparkingin2.jpg" style="margin-left: 350px; float: left; margin-left: 300px">
		<br><br><br>

<p>In order to understand the potential innovation opportunities with smart parking – we must understand who is impacted by parking problems and to the extent of the impact.

To drivers, parking is often seen as a necessary evil, and often leads to frustration. At best, it causes drivers to utilize alternate transportation options (walk, bike, bus taxi, or ride-sharing) to reach their destination. At worst, they will avoid going to those places and go to other destinations with easier parking.</p>
<p>Consider the following examples of what is possible:</p>
<p><strong>1. Sponsored meter time extension</strong>Everyone hates parking tickets. It could turn an otherwise positive outing into a negative experience.

What if smart parking solutions were configured to notify the driver that their parking meter is expiring soon, and allows them to extend the parking time through their phone? What if a merchant in the area gets a notification, pays for a 15 minute extension, and the driver gets a notification that the merchant paid for it?

In either scenario, the result is a positive experience for the driver, goodwill generated for the merchant and an increased likelihood the driver would come back again. Meanwhile, the city gets additional parking revenues it might have missed (approximately 5 to 10% of the parking violations are actually enforced), which more than offsets the decrease in revenue from parking citations.</p>
<p><strong>2. High value, high priority enforcement</strong>Not all parking violations are equal. What if the smart parking solutions can efficiently identify violators that pose potential safety risks? Cars that are illegally parked in red zones, passenger loading and unloading zones, bus stops, and handicapped zones pose a bigger disruption to traffic than a car that is five minutes past the time limit.

This type of targeted enforcement allows the parking control officers to find and clear those disruptions proactively before they become a real problem.</p>
<p><strong>3. Parking incentives to drive business growth and economic development </strong>What if merchants could offset their customer’s parking costs as incentive to get them in? This is similar to parking validation programs for garage parking, but applied to metered street parking. This has the intended effect removing some of the barriers that might have prevented their customers from coming in.

Merchants can get creative with this – they can create temporary parking promotions, pair it with special sales events, or create incentives that give customers a reason to come in during non-peak days, times and periods of the year. The increased visitor traffic allows the business to generate higher revenues, while allowing the city to increase their parking revenues. Some portion of the increased revenues can be funneled back to the local area for services and infrastructure improvements to drive further economic development.</p>
<p><strong>4. Efficient citywide parking space utilization</strong>What if parking control agencies can maximize the number of spaces available for drivers on any given day, turning otherwise empty spaces into revenue generating occupied spaces? Using historical parking and traffic information, parking analysts can adjust meter enforcement times, rates, and maximum parking times to fill up normally unoccupied spaces.

For example, analysts could allocate a certain number of spaces as all day parking to attract suburban commuters who could park at the edge of the city centers, and then use public transit to go the rest of the way in. They could adjust the meter enforcement times on historically “slow” days, and coordinate with merchants to host events (sales, etc.) on those days to boost visitors.

Conversely, on busy days or during major events where traffic congestion is high, analysts coordinate with traffic planners to adjust parking control parameters to maximize use of public transit, and alternative transportation options.</p>

	<img src="../img/smartparkingin1.png" style="margin-left: 400px; width: 550px">
	<p>In looking for the real innovation potential of smart parking solutions, buyers, managers and planners must look past the obvious and initial benefits to drivers.

The real value lies in the data, and when combined with data from key stakeholders (businesses, other city agencies), processes and systems, will yield real innovations that matter most. The real sustainable innovations that come out of smart parking do not happen overnight, but must be found, in collaboration with others, through a period of experimentation and analysis.</p>
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