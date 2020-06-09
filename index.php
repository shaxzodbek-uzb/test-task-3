<?php
require_once __DIR__ . './vendor/autoload.php';

use App\Setup\DB;
use App\Yoyo\Auth;


require('./config.php');
new DB($config["db"]);
$auth = new Auth($config["auth"]);
if (!$auth->Authorize()){
    header("HTTP/1.1 401 Unauthorized");
    echo json_encode(["result" => "401 Unauthorized"]);
}else{
    require('./routes.php');
}
