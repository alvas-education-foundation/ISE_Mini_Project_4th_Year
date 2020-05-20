<!DOCTYPE html>
<?php
include_once('fn/ghost.php');
$usr = get_user_details();
$fileName = 'syslog.txt';
date_default_timezone_set("Asia/Kolkata");
$date = date('d-m-Y h:i:s A');

function read_file($filename_)
{
	$filename = "logs/".$filename_;
	$file = fopen($filename,'r');
	$size = filesize($filename);
	$filedata = fread($file, $size);
	fclose($file);
	return $filedata;
}

if (isset($_POST['submit'])) {
	$fileName = $_POST['fileName'];
}
?>
<html>
<head>
	<title>System Logs: Python</title>
	<meta charset="utf-8">
	<meta name="description" content="cmd log report">
	<meta name="keywords" content="Python">
	<meta name="author" content="Rakesh M R">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/syslog.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container padtop">
	<p align="center">---</p>
	<div class="row"> <!-- Head row -->
		<div class="col-md-8">
			<h4 style="color: #AAFC0E;">C.KASHI</h4>
		</div>
		<div class="col-md-4">
			<h5><?php echo($date); ?></h5>
		</div>
	</div> <!--End of row -->
	<div class="row padtop">
		<div class="col-md-10">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#log">Log</a></li>
				<li><a data-toggle="tab" href="#error">Error</a></li>
				<li><a data-toggle="tab" href="#sfiles">Py script</a></li>
			</ul>
			<div class="tab-content">
				<div id="log" class="tab-pane fade in active">
					<h6><div class="msgspanv"><span class="msgspann">File Name:</span> <?php echo($fileName); ?> <span class="fr"><span class="msgspann">updated @</span> <?php echo(read_file('time.txt')); ?></span></div></h6>
					<div class="cmd" style="padding-bottom: 10px">
						<p><kbd>Agent:</kbd><code class="puregreen">>> <?php echo $usr['usr_agent']; ?></code></p>
						<div class="cmdlog">
							Log contents. <br>
							<?php //echo(read_file($fileName));
								$handle = fopen("logs/".$fileName, "r");
								if ($handle) {
									while (($line = fgets($handle)) !== false) {
										echo($line);
										echo("<br>");
									}
									fclose($handle);
								} else {
									echo("No content in file.");
								}
							 ?>
						</div>
					</div>
				</div>
				<div id="error" class="tab-pane fade">
					<h4>Error Log: &</h4>
					<div class="cmd">
						<div class="cmderr">
							Error logs.
						</div>
					</div>
				</div>
				<div id="sfiles" class="tab tab-pane">
					<div class="padtop">
						<p>Instructions: </p>
						<p>
							<ul>
								<li>* null</li>
							</ul>
						</p>
						<a href="script.py" download="script.py"><button class="btn btn-danger">Download .py</button></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2 padtop">
			<h5>View specific log file</h5>
			<p style="color: #898989;">*Provide file name with extension - filename.txt</p>
			<form id="viewlog" method="post">
				<div class="input-group">
					<input class="form-control" type="text" name="fileName" required placeholder="File Name">
					<div class="input-group-btn">
						<button class="btn btn-warning" type="submit" name="submit"><i class="glyphicon glyphicon-flash"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>