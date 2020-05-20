<?php 
//ckashi

include_once('fn/ghost.php');
include_once('fn/make_log.php');
$usr_det = get_user_details();

/*echo "User Agent: ".$usr_det['usr_agent']."<br>";
echo "IP Address: ".$usr_det['usr_ip']."<br>";
echo "User Host: ".$usr_det['usr_host']."<br>";*/

$log = date("d/m/y h:i:s A ")." Uagent: ".$usr_det['usr_agent']." Uip: ".$usr_det['usr_ip']." Uhost: ".$usr_det['usr_host']."\r\n";
write_log($log, "logs/log_main.txt");

?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CK</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container padtop">
		<div class="row">
			<div class="col-xs-12 col-md-6" align="center">
				<h2>Welcome_></h2>
			</div>
			<div class="col-md-6">
				<blockquote class="blockquote-reverse">Time isn't the main thing. its the only thing<footer>Unknown</footer></blockquote>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8" id="myDIV">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
				    <li><a data-toggle="tab" href="#projects">Projects</a></li>
				    <li><a data-toggle="tab" href="#about">About</a></li>
				    <li><a data-toggle="tab" href="#contact">Contact</a></li>
				</ul>
				<div class="tab-content">
				    <div id="home" class="tab-pane fade in active">
				        <h2 style="color: yellow;"> ('-') </h2>
				      	<h3>HOME</h3>
				      	<ui>
				      	    <li><a href='./aiet'>AIET Digital Brochure 2020</a></li>
				      	    <li><a href='./yc'>Youth Center -WTA ProjectT</a></li>
				      	    <li><a href='./wtl'>WTA-ML Lab Programs</a></li>
				            <li><a href='./iste'>ISTE -AIET</a></li>
				            <li><a href='http://airspy.ml'>Darshan's Blog</a></li>
				            <li><a href='./manu'>Raki</a></li>
				            <li><a href='./newiste'>New ISTE template</a></li>
				            <li><a href='syslog.php'>Python Logger</a></li>
				        </ui>
				        
				    </div>
				    <div id="projects" class="tab-pane fade">
				      <h3>Projects</h3>
				      <p><a href="https://github.com/rakeshmr20">Github</a></p>
				    </div>
				    <div id="about" class="tab-pane fade">
				      	<h3>Rakesh M R</h3>
				      	<p><br><br>Information Science and Engineering<br>Alva's Institute of Engineering and Engineering, Mijar</p>
				      	<div >
				            <h4>Profile Link:</h4>
				            <a href="https://www.hackerearth.com/@rakesh1291">HackerEarth</a>
				        </div>
				    </div>
				    <div id="contact" class="tab-pane fade">
				    	<div class="row">
				    		<div class="col-md-6">
				    			<h3>Contact</h3><br>
							    	<p><i class="glyphicon glyphicon-phone"></i><span> +919632260381 </span><kbd>[Whatsapp]</kbd></p>
							    	<p><i class="glyphicon glyphicon-envelope"></i><span> rakeshmr20@gmail.com </span></p>
				    		</div>
				    		<div class="col-md-6">
				    			<h3>Send Query</h3>
						      	<form method="post" action="fn/process.php">
							    	<input type="email" name="email" placeholder="Email" class="form-control" id="con" required=""><br>
							    	<input type="number" name="phone" placeholder="Whatsapp Number" class="form-control" id="con"><br>
							    	<textarea rows="4" cols="48" class="form-control" id="con" name="message" placeholder="Write your message..."></textarea><br>
							    	<button type="submit" class="btn btn-info">Send</button>
							  	</form>
				    		</div>
				    	</div>
				    </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<p></p>
					<form action="/action_page.php">
						<div class="input-group">
					      	<input type="text" class="form-control" placeholder="Search" name="search" id="searchall">
					      	<div class="input-group-btn">
					        	<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					      	</div>
					    </div>
					</form>
					<br>
				</div>
				<div class="row">
					<div class="cmd">
						<kbd>ckashi@C-KASHI:/mnt/ck$</kbd>
						<p><code class="puregreen">>> Welcome <?php  echo $usr_det['usr_ip'];?></code></p>
						<p><kbd>Agent:</kbd><code class="puregreen">>> <?php echo $usr_det['usr_agent']; ?></code></p>
						<p><kbd>Host:</kbd><code class="puregreen">>> <?php echo $usr_det['usr_host']; ?></code></p>
						<p><code class="lessgreen">Log saved @ mnt/ck/log.txt <?php echo date('d-m-y h:i:s A'); ?></code></p>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<script>
		$(document).ready(function(){
		  $("#searchall").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#myDIV *").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>
</body>
</html>