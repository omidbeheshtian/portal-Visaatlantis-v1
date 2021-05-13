<?php
//  add action show user profile option and edit user profile enable edit in user profile
//  my_show_extra_profile is the name of me want
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	<h3>اطلاعات کاربری بیشتر</h3>

	<table class="form-table">
<?php $status = esc_attr( get_user_meta($user->ID,'status',true) );?>
		<tr>
			<th><label for="status">وضعیت کاربر</label></th>

			<td>
				<select name="status" id="status">
					<option value="0" <?php if($status == '0') echo 'selected'; ?> >غیرفعال</option>
					<option value="1" <?php if($status == '1') echo 'selected'; ?> >فعال</option>
				</select>
			</td>
		</tr>
		<tr>
			<th><label for="phone">شماره همراه</label></th>

			<td>
				<input type="text" name="phone" id="phone" value="<?php echo esc_attr( get_user_meta($user->ID,'phone',true) ); ?>" class="regular-text" /><br />
				<span class="description">لطفا شماره همراه خود را وارد نمایید.</span>
			</td>
		</tr>
		<tr>
			<th><label for="tell">شماره تماس</label></th>

			<td>
				<input type="text" name="tell" id="tell" value="<?php echo esc_attr( get_user_meta($user->ID,'tell',true) ); ?>" class="regular-text" /><br />
				<span class="description">لطفا شماره تماس خود را وارد نمایید.</span>
			</td>
		</tr>
		<tr>
			<th><label for="code_meli">کد ملی</label></th>

			<td>
				<input type="text" name="code_meli" id="code_meli" value="<?php echo esc_attr( get_user_meta($user->ID,'code_meli',true) ); ?>" class="regular-text" /><br />
				<span class="description">لطفا کد ملی خود را وارد نمایید.</span>
			</td>
		</tr>
		<tr>
			<th><label for="gender">جنسیت</label></th>
<?php $gender = esc_attr( get_user_meta($user->ID,'gender',true) ); ?>
			<td>
				<select name="gender" id="gender">
					<option value="blank" <?php if($gender == 'blank' && $gender == '') echo 'selected'; ?> >-</option>
					<option value="m" <?php if($gender == 'm') echo 'selected'; ?> >آقا</option>
					<option value="f" <?php if($gender == 'f') echo 'selected'; ?> >خانم</option>
				</select>
			</td>
		</tr>
		<tr>
			<th><label for="education">تحصیلات</label></th>
<?php $education = esc_attr( get_user_meta($user->ID,'education',true) );?>
			<td>
				<select name="education" id="education">
					<option value="blank" <?php if($education == 'blank' && $education == '') echo 'selected'; ?> >-</option>
					<option value="دیپلم" <?php if($education == 'دیپلم') echo 'selected'; ?> >دیپلم</option>
					<option value="فوق دیپلم" <?php if($education == 'فوق دیپلم') echo 'selected'; ?> >فوق دیپلم</option>
					<option value="لیسانس" <?php if($education == 'لیسانس') echo 'selected'; ?> >لیسانس</option>
					<option value="فوق لیسانس" <?php if($education == 'فوق لیسانس') echo 'selected'; ?> >فوق لیسانس</option>
				</select>
			</td>
		</tr>
		<tr>
			<th><label for="address">آدرس</label></th>

			<td>
				<textarea type="text" name="address" id="address" class="regular-text"><?php echo esc_attr( get_user_meta($user->ID,'address',true) ); ?></textarea><br />
				<span class="description">لطفا آدرس خود را وارد نمایید.</span>
			</td>
		</tr>
	<tr>
			<th><label for="avatar">لینک آواتار</label></th>

			<td>
				<input type="text" name="avatar" id="avatar" class="regular-text" value="<?php echo esc_attr( get_user_meta($user->ID,'avatar',true) ); ?>"><br />
				<span class="description">لطفا لینک آواتار خود را وارد کنید.</span>
			</td>
		</tr>
		<tr>
		<th><label for="avatar">آواتار</label></th>
		<td><img src="<?php echo esc_attr( get_user_meta($user->ID,'avatar',true) ); ?>" alt="Avatar" width="200"></td>
		</tr>

	</table>
<?php }
// add action personal_options_update  and name of my function called my_save_extra_profile_fields
add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $UserID ) {
	if ( !current_user_can( 'edit_user', $UserID ) )
		return false;

	update_user_meta( $UserID, 'phone', $_POST['phone'] );
	update_user_meta( $UserID, 'tell', $_POST['tell'] );
	update_user_meta( $UserID, 'code_meli', $_POST['code_meli'] );
	update_user_meta( $UserID, 'gender', $_POST['gender'] );
	update_user_meta( $UserID, 'education', $_POST['education'] );
	update_user_meta( $UserID, 'address', $_POST['address'] );
	update_user_meta( $UserID, 'avatar', $_POST['avatar'] );
	update_user_meta( $UserID, 'status', $_POST['status'] );
}

?>