<?php

mysql_connect("localhost", "root", "");
mysql_select_db("mnt");

$_POST['emailcheck']=mysql_escape_string($_POST['emailcheck']);

$re=mysql_query("SELECT email FROM member WHERE email='$_POST[emailcheck]'");
if($row=mysql_fetch_array($re)){

	echo "old";

}else{

	echo "new";
}



?>