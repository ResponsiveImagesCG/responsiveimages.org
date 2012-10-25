<?
//Check that the requests originates from Github 
$svr = $_SERVER['REMOTE_ADDR']; 
if($svr == "207.97.227.253" || $svr == "50.57.128.197" || $svr == "108.171.174.178"){
	require_once 'issues.php';
	fetch_issues('open');
	fetch_issues('closed');
}else{
	//HttpResponse::status(401);
}