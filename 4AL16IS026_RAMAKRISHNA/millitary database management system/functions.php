function get_option($optionname){
try{
	$sql = "CALL GetOptions('".$optionname."');
	$execute=$GLOBALS['database']->prepare($sql);
	$execute->setFetchMode(PDO::FETCH_ASSOC);
	$execute->execute();
   }catch (PDOException $pe) {
	die("Error occured:". $pe->getMessage());
}
	$results = $execute->fetch();
	return $result['option_value'];
}
function get_template_directory(){
	echo get_opption('siteurl').'frontend_module/template/';
}
function get_admin_directory(){
	echo get_opption('siteurl').'admin_module/';
}
function get_admin_header(){
	include ADMIN.'/admin_header.php';
}
function get_admin_footer(){
	include ADMIN.'/admin_footer.php';
	