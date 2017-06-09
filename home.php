<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href='login.php'>Login</a></br>
	<a href='list.php'>list</a></br>
    <a href='home.php'>Home</a></br><hr />


    <h1>ユーザのホーム画面</h1>

<?php
$login = [];
$login['1001'] = array('name'=>'TAMA Taro', 'pass'=>password_hash('pass01', PASSWORD_DEFAULT));
$login['1002'] = array('name'=>'HIJIRI Hanako', 'pass'=>password_hash('pass02', PASSWORD_DEFAULT));
$login['1003'] = array('name'=>'NAGAYAMA Jiro', 'pass'=>password_hash('pass03', PASSWORD_DEFAULT));

if(isset($_POST['id'],$_POST['pass']) && strlen($_POST['id'])>0 )
{
  $id = $_POST['id'];
  $pass = $_POST['pass'];

 // if(isset($login[$id]) && $login[$id]['pass'] == $pass)

 if(password_verify('pass01', $login['1001']['pass'])
 ||password_verify('pass02', $login['1002']['pass'])
 ||password_verify('pass03', $login['1003']['pass']))
  {
    print('Welcome');
	$_SESSION['id']=$id;
	$_SESSION['name']=$login[$id]['name'];
	}
  else
   {
    print('Wrong Password');
		//var_dump($_SESSION);

  }
}

$name =$_SESSION['name']; // ここ書き換え
print('<hr />');
print($name . "さんでログイン中");

 ?>

  </body>
</html>
