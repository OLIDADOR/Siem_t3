<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');  

$id = $_SESSION['m_id'];
$user = getuser($_SESSION['m_id']);
//echo  $user['email'];

$username = $user['username'];
$email = $user['email'];
$saldo = $user['saldo'];
$admin = $user['admin'];

$user_p = $_POST['login'];
$email_p = $_POST['email'];
$saldo_p = $_POST['saldo'];
$admin_p = $_POST['admin'];



if(!empty($user_p)){
	$user=$user_p;
}
if(!empty($email_p)){
	$email=$email_p;
}
if(!empty($saldo_p)){
	$saldo=$saldo_p;
}

echo  $user;
echo  $email;
echo  $saldo;

$tr = edituser($id,$user,$email,$saldo);




		if($tr==-1){
			echo $tr;
			header("Location:  $BASE_URL" . '/pages/users/edit_user.php');
		}
		elseif ($tr==-2){
			echo $tr;
			header("Location:  $BASE_URL" . '/pages/users/edit_user.php');
		}	
		elseif ($tr==-3){
			echo $tr;
			header("Location:  $BASE_URL" . '/pages/users/edit_user.php');
		}	
else{
	if($admin==1){
		makeadmin($id);
		header("Location:  $BASE_URL" . '/pages/users/user_management.php');
	}
	else if($admin!=1){
		removeadmin($id);
		header("Location:  $BASE_URL" . '/pages/users/user_management.php');
	}
}


?>