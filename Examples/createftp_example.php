<?php
ini_set('display_errors',true);
include("../xmlapi.php");

$ip = getenv('REMOTE_HOST');
$root_pass = getenv('REMOTE_PASSWORD');

$domain = "yourdomain.com";

$xmlapi = new xmlapi($ip);
$xmlapi->password_auth("root",$root_pass);

$xmlapi->set_debug(1);
$account = 'yourdomain';

print $xmlapi->createftpaccount($account, 'test_ftp', 'AStr0ngpASSW0RD');

?>