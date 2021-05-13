<?php

    function vasignup($phonenumber , $fnamelname){

        if (empty($phonenumber)){
            wp_redirect(site_url().'/dashboard?signup=false&msg=1');
            exit;
        }

        if (empty($fnamelname)){
            wp_redirect(site_url().'/dashboard?signup=false&msg=2');
            exit;
        }

        elseif(username_exists($phonenumber)){
            wp_redirect(site_url().'/dashboard?signup=false&msg=4');
            exit;
        }

        else{
            $userdata_signup = array(
                'user_login' => $phonenumber,
                'display_name' => $fnamelname,
                'nickname' => $fnamelname,
                'user_activation_key' => $verify = rand(111111,999999),
                'user_pass' => $verify,
                'user_password' => $verify,
            );

            session_start();
            $_SESSION['userdata-alldata'] = $userdata_signup;
            $_SESSION['userdata-number'] = $phonenumber;
            $_SESSION['userdata-verifykey'] = $verify;

            $username = "09123789821";
            $password = '4580098013';
            $from = "+983000505";
            $pattern_code = "d398x3o5b6";
            $to = array("$phonenumber");
            $input_data = array("code" => "$verify", "name" => "$fnamelname");
            $url = "https://ippanel.com/patterns/pattern?username=" . $username . "&password=" . urlencode($password) . "&from=$from&to=" . json_encode($to) . "&input_data=" . urlencode(json_encode($input_data)) . "&pattern_code=$pattern_code";
            $handler = curl_init($url);
            curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($handler, CURLOPT_POSTFIELDS, $input_data);
            curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($handler);


        wp_redirect('authenticate');
    }
 }

function vaauth($code){

    session_start();



    if(empty($code)){
        wp_redirect(site_url().'/dashboard?auth=false&msg=1');
		exit;
    }

    elseif($code==$_SESSION['userdata-verifykey']){

            session_start();

            $user_id = wp_insert_user($_SESSION['userdata-alldata']);
                global $wpdb;
            $wpdb->update($wpdb->users,
            array('user_activation_key' => ''),
            array('user_login' => $phonenumberauth),
     );
     wp_redirect(site_url().'/dashboard?signupauth=true');
     exit;
    }
    else{
        wp_redirect(site_url().'/dashboard?auth=false&msg=2');
		exit;
    }

    }

    function valogin($phonenumberlogin){

        $verifylogin = rand(111111,999999);

        $info = array();
		$info['user_login'] = $phonenumberlogin;
		$info['user_password'] = $verifylogin;
		$info['remember'] = true;

        session_start();
        $_SESSION['userdata-login'] = $info;
        $_SESSION['userdata-verifykey-login'] = $verifylogin;
        $_SESSION['userdata-id'] = $userdata_id;


        global $wpdb;
        $key = $wpdb->get_row($wpdb->prepare("SELECT ID,user_login,display_name FROM $wpdb->users WHERE user_login =$phonenumberlogin "));
        $name = $key->display_name;
        $userdata_id = $key->ID;

        if($phonenumberlogin == $key->user_login){
            $username = "09123789821";
            $password = '4580098013';
            $from = "+983000505";
            $pattern_code = "d398x3o5b6";
            $to = array("$phonenumberlogin");
            $input_data = array("code" => "$verifylogin", "name" => "$name");
            $url = "https://ippanel.com/patterns/pattern?username=" . $username . "&password=" . urlencode($password) . "&from=$from&to=" . json_encode($to) . "&input_data=" . urlencode(json_encode($input_data)) . "&pattern_code=$pattern_code";
            $handler = curl_init($url);
            curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($handler, CURLOPT_POSTFIELDS, $input_data);
            curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($handler);

            reset_password( $key->ID, $verifylogin );
            wp_set_password( $verifylogin, $key->ID );
        }
        else{
            wp_redirect(site_url().'/dashboard?login=false&msg=usernotregistered');
            exit;
        }


        if(empty($phonenumberlogin)){
            wp_redirect(site_url().'/dashboard?login=false&msg=1');
            exit;
        }
        else{
            wp_redirect(site_url().'/authenticate-login');
            exit;
        }
    }











    function vaauthlogin($codelogin){


        session_start();

        if(empty($codelogin)){
            wp_redirect(site_url().'/dashboard?loginauth=false&msg=1');
            exit;
        }
        elseif($codelogin == $_SESSION['userdata-verifykey-login']){
            $user_signon = wp_signon($_SESSION['userdata-login'],false);

            wp_redirect(site_url().'/dashboard?loginauth=true');
            exit;

        }
        else{
            wp_redirect(site_url().'/dashboard?loginauth=false&msg=2');
            exit;
        }

    }











function register_my_session()
{
  if( !session_id() )
  {
    session_start();
  }
}

add_action('init', 'register_my_session');



//auto login new user

function auto_login_new_user( $user_id ) {
    wp_set_current_user($user_id);
    wp_set_auth_cookie($user_id);
    wp_redirect(site_url().'/dashboard/index.html');
    exit();
}
add_action( 'user_register', 'auto_login_new_user' );


        add_filter( 'woocommerce_min_password_strength', 'omidweb_woocommerce_password' );
        function omidweb_woocommerce_password( $strength ) {
        return 0;
        }

        // custom login page in wordpress

        function wpb_login_logo() { ?>
            <style type="text/css">
                #login h1 a, .login h1 a {
                    background-image: url(http://path/to/your/custom-logo.png);
                height:100px;
                width:300px;
                background-size: 300px 100px;
                background-repeat: no-repeat;
                padding-bottom: 10px;
                }
            </style>
        <?php }
        add_action( 'login_enqueue_scripts', 'wpb_login_logo' );

        //change logo link in login page

        function wpb_login_logo_url() {
            return home_url();
        }
        add_filter( 'login_headerurl', 'wpb_login_logo_url' );
         
        function wpb_login_logo_url_title() {
            return 'Your Site Name and Info';
        }
        add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );


        // read custom css page for wp login

        function my_custom_login_stylesheet() {
            wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css/style-login.css' );
        }

        //This loads the function above on the login page
        add_action( 'login_enqueue_scripts', 'my_custom_login_stylesheet' );

        //error login page

        function login_error_override()
        {
            return 'Incorrect login details.';
        }
        add_filter('login_errors', 'login_error_override');

        ?>
