<?php

mysql_connect("localhost", "root", "");
mysql_select_db("mnt");


$_POST['emailvalue']=mysql_escape_string($_POST['emailvalue']);
$_POST['passwordvalue']=mysql_escape_string($_POST['passwordvalue']);


$save=mysql_query("INSERT INTO member (email, password) VALUES('$_POST[emailvalue]','$_POST[passwordvalue]')");

if(!$save){

	echo "fail";

}else{

	echo "success";
}


/*
$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'root', ''); $stat = $db->prepare("Select * from tt"); 
$stat->execute(); $result = $stat->fetchAll(); print_r($result); 
$stat = $db->prepare("SELECT * FROM users WHERE account = ? AND password = ?"); 
$stat->execute(array($account, $password)); $result = $stat->fetch(PDO::FETCH_ASSOC);
*/



?>