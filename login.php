<?php
require("include.php");
$include_class = ['admin_header'=>'is_login','database'=>''];
$class_auto = class_auto($include_class);
$class_auto[0]->admin_header();
$login=new login($class_auto[1]);
$message=new check($login);
$message->main();
?> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" name="email" required="required">
			<?=$message->get_emailerror();?>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password"  name="password" required="required">
			<?=$message->get_passworderror();?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div> 
		<?=$login->get_loginerror();?>
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>                               		                            