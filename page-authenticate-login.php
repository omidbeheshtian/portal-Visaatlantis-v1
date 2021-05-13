<?php
get_template_part('user');
get_header();
	if(!$user_ID){
?>



	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="border-bottom-width: 0px;border-bottom-style: solid;padding-bottom: 140px;margin-bottom: 0px;">

			<!-- input form -->
			<form class="login100-form validate-form" method="POST" action="#">
				<span class="login100-form-title">اعتبار سنجی</span>


				<!-- enter code-->
				<div class="wrap-input100 validate-input" data-validate = "لطفا کد ارسالی خود را وارد کنید!">
					<input class="input100" type="number" name="codelogin" placeholder="کد ارسالی">
					<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
				</div>
				<!-- / enter code -->

				<!-- register button-->
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="SendAuthLogin">ورود</button>
				</div>
				<!-- / register button -->


			</form>
			<!-- / input form -->

			<!-- form image -->
			<div class="login100-pic js-tilt" data-tilt>
				<img alt="login-image" src="<?php echo esc_url(get_template_directory_uri()); ?>/pics/img-01.png">
			</div>
			<!-- / form image -->

			</div>
		</div>
	</div>
	<?php }
	if($user_ID){
		wp_redirect(site_url().'/profile');
		exit;
	}
	?>

	<!-- scripts -->
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/popper.min.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/select2.min.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/scripts.js"></script>
	<!-- / scripts -->
