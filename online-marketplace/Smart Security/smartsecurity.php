<!DOCTYPE html>
<html>
<head>
	<title>Smart Security</title>
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
		<h1 style="color: black; margin-left: 20px; top: 20px; position: relative;">Smart Security</h1>
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
		<p>One of the first decisions you&#39ll make before building out your own smart home is weighing security features against convenience features. Most of the packages you&#39ll encounter will emphasize one or the other, even if they offer elements of both.If you&#39re mostly interested in being alerted to a break-in, or a disaster such as a fire or a burst water pipe, you&#39ll be happier with a home security system perhaps one with a service that can dispatch first responders on your behalf.But if you&#39re more interested in the fun and convenience of a modern home technology having lights turn on and off with voice commands, for example, or having a sprinkler system that operates in concert with the local weather you&#39ll want a smart home system. We&#39ve produced two stories that will help you understand the fundamentals of each type of system, so you can decide which is right for you. This one focuses on smart home systems. If you&#39	re more interested in a home security system, we encourage you to read this other story.</p>
		<p><strong>The basics of a home security system</strong><br>The home security business has been upended in recent years, driven by the availability of always on broadband services, low-cost wireless technology, and most recently smart home technology. In years past, a service provider would send a technician to your home to install a big metal box in your closet, connect it to your land line, and run wired sensors to all your doors and windows. You&#39d need to sign up for an expensive long-term contract for professional monitoring, without which the system would be useless.You can still buy professionally installed systems from vendors such as ADT, Vivint, or even Comcast with monitoring included in the price of the package. But a do it yourselfer can acquire equipment that&#39s every bit as good, if not always as flashy, and have it up and running in an hour or two. Opt-in professional monitoring is available with many of these systems, but if you&#39re looking to save even more money, some vendors let you monitor your own security using a smartphone app for free.Some localities require you to obtain a permit before installing an alarm system, and they might charge you a fee if their first responders are dispatched based on a false alarm. The vendor you&#39re considering doing business with should be able to tell you if such a permit is required where you live.</p>
		<p><strong>Home security system kits</strong><br>
			Most security systems are sold as kits, which ensures that all the components are known to work together. What comes in a security system starter kit? That will vary from one manufacturer to another, but the typical kit will include:<br>
		1. A hub that connects to your router, either wirelessly or with an ethernet cable. This is the &#34brains&#34 of the system. There will be a siren to warn you and frighten an intruder, and a keypad you&#39ll use to arm the system when you leave or retire for the night, and disarm when you come home or wake up and start your day. In some systems, the alarm, hub, and keypad will all be in the same enclosure.<br>
		2. More advanced hubs will contain a battery backup and a cellular radio, so that alerts are sent even if you lose power or your broadband connection goes down. In most cases, however, you&#39ll have to pay a monthly fee for that peace of mind.<br>
		3. Door/window sensors: These are small, typically two-piece devices that attach to your doors and windows via tape or screws. One side of the sensor has a magnet and the other a small piece of steel. Separating the two breaks the magnetic field between them and sends a signal to the hub to report that the door or window has been opened. The hub can typically be programmed with a delay that allows you to open a door, walk to the keypad, and disarm the system before the alarm goes off. Window sensors trigger an immediate alarm, since no one should be entering or exiting the home via a window.<br>
		4. At least one motion sensor that will detect movement within its field of view. When you plan to remain in the house, you&#39ll arm your system &#34home&#34 or &#34stay,&#34 and the hub will ignore messages from the motion sensor. When you leave the house and arm the system &#34away,&#34 any unexpected movement will trigger the hub to go into an alarm state. Most motion sensors include a pet mode that will prevent small animals from triggering false alarms.<br>
		It&#39s always a good idea to count the number of doors and windows you&#39ll want to monitor, because the starter kit probably won&#39t have enough to cover all of them. But here&#39s a pro tip: One motion sensor can cover at least one door and several windows, depending on where it&#39s placed. It might not trigger an alarm immediately after a breach, but there shouldn&#39t be an appreciable delay before an intruder sets it off by walking in front of it.
		</p>

	    <br><br><br>

		<img src="ss1.jpg" style="margin-left: 350px; margin-left: 140px">
		<img src="ss2.jpg" style="margin-left: 350px; float: left; margin-left: 300px">
		<br><br><br>

<p><strong>Beyond home security basics</strong><br>
Some home security systems provide or allow you to add other security components, such as:<br>
<strong>1. A remote key fob or a secondary keypad: </strong> Your most frequent interactions with your security system will probably occur via a smartphone app, but better systems offer more flexibility. You might set up a second keypad at another entry location, or push a button on a remote control on your keychain to arm and disarm the system. Nest Labs offers an NFC-enabled remote that you tap on its hub to disarm its Nest Secure system, which might be easier for children to work with.<br>
<strong>2. Glass break/vibration sensors: </strong> These sensors either listen for the specific pitch of glass breaking or adhere to a window, monitoring for the vibrational shock of damage, tripping the alarm if a break is detected.<br>
<strong>3. Smoke and/or carbon monoxide detectors: </strong> Many security vendors have been expanding their definition of security by adding the option to protect your home and its occupants from smoke, fire, and carbon monoxide.<br>
<strong>4. Water leak sensors: </strong> Insurance claims for water damage from burst pipes and similar disasters are far more common than fires, so a system that can warn you of the presence of water where it shouldn’t be can deliver big benefits.<br>
<strong5. A security camera: </strong> Surprisingly, most security systems do not include cameras as part of their base package, but many offer them as an add-on, or they partner with a third-party provider to incorporate cameras.
</p>
<img src="ss3.jpg" style="margin-left: 350px; width: 750px"><br>
<br>
<p><strong>Monitor it yourself, or pay a professional?</strong><br>Your final consideration with a home security system is how to monitor it. Some vendors give you the option of doing it yourself for free, while others don&#39t give you a choice. If you opt for self monitoring, know that it means you&#39re responsible for keeping tabs on your own security, whether you&#39re at home or not. If you get a notification from the app that your alarm has been tripped, you&#39ll need to decide whether to call the police or fire department, ask a neighbor to investigate, or simply ignore it and hope for the best.<br>

Professional monitoring is typically offered as a subscription service, but many companies expect you to sign a contract committing to the service for a year or longer and in some cases, much longer. Cancelling the contract before the term is up can leave you owing an early termination fee. Ring offers one of the least expensive optional monitoring plans: $10 per month for Ring Alarm users, and that includes cloud storage for an unlimited number of Ring cameras. What&#39s more, you can cancel any time. But if Ring Alarm doesn&#39t fit your needs, it doesn&#39t matter how cheap the service plan is.<br>

So what do you get from a professional monitoring plan? In almost all cases, a 24-hour watch by human beings who will call to check on you if an alarm is triggered. If they can&#39t reach you, they&#39ll attempt to contact any secondary contacts you&#39ve provided. And if they can&#39t get in touch with anyone, they&#39ll call the police if a break in is suspected or with plans that include smoke alarm coverage the fire department if there&#39s a fire. Professional monitoring fees typically also cover the cost of backup cellular service for the hub.

Service fees, terms, and the fine print that accompany professional monitoring services vary widely. If you sign up for a plan, make sure you understand exactly what you&#39re getting into. You&#39ll also want to be aware that self monitoring is not an option with some home security service providers.</p><br>

<img src="ss4.jpg" style="margin-left: 350px; width: 750px"><br>

<br>
<p><strong>Getting the best of both worlds</strong><br>
If you want a home security system that can also be used as a smart home system, pick one that at a minimum supports smart lighting and a smart thermostat, along with all the most important security features we&#39ve already discussed.

Whichever type of system you settle on today, know that you won&#39t be locked into it forever, provided it&#39s based on the most common types of radios: Wi-Fi and either Z-Wave or ZigBee. No one vendor controls all of those standards, and many of the hubs on today&#39s market today use all three.

While it might be little tedious to re pair tens or dozens of sensors and other devices with a new hub if something better catches your fancy in a few years, it won&#39t be impossible.<br>

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