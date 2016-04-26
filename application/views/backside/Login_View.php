<!DOCTYPE html>
<html>
	<head>
		<title>Login Administrator</title>
		<link href="<?php echo base_url().'assets/css/base_style.css'?>" rel="stylesheet"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	<body>
		<div style="width:100%;height:100%;background-color:#f5f5f5;position:absolute;top:0px;left:0px;">
			<div style="width:400px;margin:auto;height:100%;display:flex;align-items:center;">
				<?php 
					$att = array("style"=>"background-color:#fff;padding:20px;box-shadow:0 0 12px rgba(0, 0, 0, 0.6)");
					echo form_open('authen/',$att);
				?>
					<div style="width:100%;float:left;text-align:center;margin-bottom:20px;">
						<h2 style="text-align:center;margin-bottom:3px;">Panel Administrator</h2>
						<span style="color:#79bbaf">Sign in here</span>
					</div>
					<?php echo $this->session->flashdata('signin_result');?>
					<label style="width:50%;float:left;">Username or Email<i class="fa fa-asterisk" style="font-size:7px;color:#666"></i></label>
					<div style="width:50%;float:right;text-align:right;margin-top:20px;color:red;"><?php echo form_error("username");?></div>
					<input class="connect-input" style="width:92%;" type="text" name="username"/>
					<label style="width:50%;float:left;">Password<i class="fa fa-asterisk" style="font-size:7px;color:#666"></i></label>
					<div style="width:50%;float:left;text-align:right;margin-top:20px;color:red;"><?php echo form_error("password");?></div>
					<input class="connect-input" style="width:92%;" type="password" name="password"/>
					<button class="btn submit" style="float:right;" type="submit"><i class="fa fa-sign-in" style="margin-right:5px;"></i>Sign In</button>
					<div style="width:100%;float:left;color:#999;">
						<span style="font-size:11px;">&copy;copyright Evan Abeiza @2016 <br/>All be Reserved <i class="fa fa-usb"></i></span>
					</div>
				<?php echo form_close();?>
			</div>
		</div>
	</body>
</html>