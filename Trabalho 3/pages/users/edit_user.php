
 <?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/users.php');

if ($_SESSION['login_l']!=1){
	header("Location:  $BASE_URL" . '/pages/homepages/index_no_login.php');
}



 $user = getuser($_SESSION['m_id']);
 
 $smarty->assign('user', $user);
 $smarty->assign('userinuse', $_SESSION['em_u']);
 $smarty->assign('emailinuse', $_SESSION['em_e']);
 $smarty->assign('admin', $_SESSION['admin_l']);
 $smarty->display('users/edit_user.tpl');
 $_SESSION['em_u']=0;
 $_SESSION['em_e']=0;
?>


