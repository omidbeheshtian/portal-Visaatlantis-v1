<?php
/* if a hacker want to brute force attack on our forms in website we can show this errors with 2 functions ==> wp_nonce_filde and wp_verify_nonce */
	if(isset($_POST['SendLogin'])){

			valogin($_POST['phonenumberlogin']);
		}

	if(isset($_POST['SubmitSignUp'])){

			vasignup($_POST['phonenumbersignup'],$_POST['fnamelnamesignup']);
		}

	if(isset($_POST['SendAuth'])){

		vaauth($_POST['code']);
	}


	if(isset($_POST['SendAuthLogin'])){

		vaauthlogin($_POST['codelogin']);
	}
////////////////////////////////////////////////////////////////////


/* we check the wp sign on errors and ifs from the page of functions.php line 24 to 42 we use two PARAMETERS login and msg and we use that for verify the reqs for LOGIN */
if($_GET['login'] == 'false' && $_GET['msg'] == '1'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title">با خطا مواجه شدید</span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					نام کاربری نمی تواند خالی باشد
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['login'] == 'false' && $_GET['msg'] == '2'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title">با خطا مواجه شدید</span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					رمز عبور نمی تواند خالی باشد
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['login'] == 'false' && $_GET['msg'] == '3'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title">با خطا مواجه شدید</span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					نام کاربری یا رمز عبور اشتباه است.
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['login'] == 'false' && $_GET['msg'] == '4'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title">با خطا مواجه شدید</span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					حساب کاربری شما فعال نیست
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['login'] == 'true'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title"></span>
						<i class="fa fa-check"></i>
				 </div>
				 <div class="modal-body text-center">'.$_GET['username'].' خوش آمدید</div>
			</div>
	 </div>
</div>';
}

//////////////////////////////////////

/* we check signup errors and empty fildes and get responde */
if($_GET['signup'] == 'false' && $_GET['msg'] == '1'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title">با خطا مواجه شدید</span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					تمامی فیلد ها باید 
					پر شوند.
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['signup'] == 'false' && $_GET['msg'] == '2'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title">با خطا مواجه شدید</span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					شما باید قوانین را قبول کنید
				
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['signup'] == 'false' && $_GET['msg'] == '3'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title">با خطا مواجه شدید</span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					لطفا ایمیل معتبر وارد کنید
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['signup'] == 'false' && $_GET['msg'] == '4'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title">با خطا مواجه شدید</span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					این ایمیل موجود است
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['signup'] == 'false' && $_GET['msg'] == '5'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title">با خطا مواجه شدید</span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					این نام کاربری موجود است
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['signup'] == 'false' && $_GET['msg'] == '6'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title">با خطا مواجه شدید</span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					رمز های عبور یکسان نیستند
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['signup'] == 'true'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title"></span>
						<i class="fa fa-check"></i>
				 </div>
				 <div class="modal-body text-center">
					شما با موفقیت ثبت نام شده اید برای فعال سازی حساب کاربری خود لطفا ایمیل خود را چک کنید.
				 </div>
			</div>
	 </div>
</div>';
}
if(isset($_GET['key']) && $_GET['action'] == 'real_email'){
	ActiveAcount($_GET['key'],$_GET['username']);
}
if($_GET['activation'] == 'true'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title"></span>
						<i class="fa fa-check"></i>
				 </div>
				 <div class="modal-body text-center">
					حساب کاربری شما با موفقیت فعال شد
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['activation'] == 'false'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title"></span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					خطایی پیش آمد
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['resetpassword'] == 'false' && $_GET['msg'] == 1){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title"></span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					نام کاربری یا ایمیل خود را وارد کنید.
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['resetpassword'] == 'false' && $_GET['msg'] == 2){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title"></span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					ایمیل موجود نیست
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['resetpassword'] == 'false' && $_GET['msg'] == 3){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title"></span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					نام کاربری موجود نیست
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['resetpassword'] == 'false' && $_GET['msg'] == 4){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title"></span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					به دلایلی ایمیل ارسال نشد لطفا دوباره امتحان کنید
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['resetpassword'] == 'false' && $_GET['msg'] == 5){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title"></span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					به دلایلی ایمیل ارسال نشد لطفا دوباره امتحان کنید
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['resetpassword'] == 'false' && $_GET['msg'] == 6){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title"></span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					با خطا مواجه شدید
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['checkmail'] == 'true'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title"></span>
						<i class="fa fa-close"></i>
				 </div>
				 <div class="modal-body text-center">
					رمز عبور جدید به ایمیل شما ارسال شد
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['resetpassword'] == 'true'){
	echo '<div id="msg" class="modal fade" role="dialog">
	 <div class="modal-dialog modal-sm">
			<div class="modal-content">
				 <div class="modal-header">
						<span class="modal-title"></span>
						<i class="fa fa-check"></i>
				 </div>
				 <div class="modal-body text-center">
					برای تغییر رمز به ایمیل خود مراجعه کنید
				 </div>
			</div>
	 </div>
</div>';
}
if($_GET['action'] == 'reset_pwd' && isset($_GET['key'])){
	WlNewPassword($_GET['key'],$_GET['login']);
}
?>