<?php
$host = substr(dirname(__FILE__), 0, strpos(__FILE__, "app")).'data/';
$dbname = 'addressbook.sdb';

$dcb = new LtDbConfigBuilder;
$singlehost = array("adapter" => "mysql", "host" => 'localhost', "port"=>'3306', "password" => "123456", "dbname" => 'lotusphp', 'username' => 'root');
$dcb->addSingleHost($singlehost);
$config["db.servers"] = $dcb->getServers();
