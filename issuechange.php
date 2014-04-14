<?
//Check that the requests originates from Github 
//IP addresses are derived from Github's Web Hook.
//IF THIS BREAKS: check the public IPs for the hooks
//on GH! 

$server = $_SERVER['REMOTE_ADDR'];

//From: http://stackoverflow.com/questions/594112/matching-an-ip-to-a-cidr-mask-in-php5
function cidr_match($ip, $range)
{
    list ($subnet, $bits) = explode('/', $range);
    $ip = ip2long($ip);
    $subnet = ip2long($subnet);
    $mask = -1 << (32 - $bits);
    $subnet &= $mask; # nb: in case the supplied subnet wasn't correctly aligned
    return ($ip & $mask) == $subnet;
}

if(cidr_match($server, '204.232.175.64/27') || cidr_match($server, '192.30.252.0/22')){
	require_once 'issues.php';
	fetch_issues('open');
	fetch_issues('closed');
}else{
	//otherwise, it is: Forbidden 403!
	header(':', true, 403);
	echo('<h1>403 - Forbidden');
}
