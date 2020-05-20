<?php
date_default_timezone_set("Asia/Kolkata");

function writeLog($log)
{
	$log = $log."\r\n";
	if (isset($_POST['sFName'])) {
		write_log($log, "logs/".$_POST['sFName']);
	} else 
		write_log($log, "logs/syslog.txt");
	update_time();
	return true;
}

function write_log($data, $filename) {
	//$filename = "../logs/log.txt";
	$file = fopen($filename,'a+');
	$size = filesize($filename);

	fwrite($file, $data);

	$filedata = fread($file, $size);

	echo $filedata;

	fclose($file);
}

function update_time()
{
	$date = date('d-m-Y h:i:s A');
	$ff = fopen('logs/time.txt','w');
	fwrite($ff, $date);
	fclose($ff);
}
update_time();
if (isset($_POST['log'])) {
	if (writeLog($_POST['log'])) {
		echo('true');
	}
} else echo('false');
?>