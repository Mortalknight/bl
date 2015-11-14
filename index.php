<?php
require_once('includes.php');

if(isset($_POST))
{
    if(isset($_POST['action']) && $_POST['action']=='register')
    {
        $auth->register($_POST['name'],$_POST['password'],$_POST['password2']);
    }
     if(isset($_POST['action']) && $_POST['action']=='login')
    {
        
        $auth->login($_POST['name'],$_POST['password']);
    }
}

if(!$auth->isOnline())
{
    echo '
        <form method="post" action="">
        <input type="text" name="name"><br/>
        <input type="password" name="password"><b/>
        <input type="hidden" name="action" value="login">
        <input type="submit" >
        </form><br/><br/>
        
        <form method="post" action="">
        <input type="text" name="name"><br/>
        <input type="password" name="password"><b/>
        <input type="password" name="password2"><b/>
        <input type="hidden" name="action" value="register">
        <input type="submit" >
        </form>
        
    ';
}

?>