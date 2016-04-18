<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
<meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
<meta name="author" content="Codrops" />
<title>Hệ thống quản lý theo dõi khám bệnh</title>
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="{{ url('public/user/css/demo.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url('public/user/css/stylelogin.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url('public/user/css/animate-custom.css')}}">
</head>

 <body>
 <?php
    //Start session
    session_start();    
    //Unset the variables stored in session
    unset($_SESSION['SESS_MEMBER_ID']);
    unset($_SESSION['SESS_FIRST_NAME']);
    unset($_SESSION['SESS_LAST_NAME']);
?>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    <strong>Đại Học Y Hà Nội</strong>
                </a>
                <span class="right">
                    <a href="">
                        <strong>Hệ thống quản lý theo dõi khám bệnh</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
               <!-- <h1>Login and Registration Form <span>with HTML5 and CSS3</span></h1>
                <nav class="codrops-demos">
                   
                </nav> -->
            </header>
            <section>               
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form name="loginform" action="http://localhost/HIV/admin/home" > 
                                <h1>Đăng nhập</h1> 
                                 <?php
                                            if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                                            echo '<ul class="err">';
                                            foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                                            echo '<li>',$msg,'</li>'; 
                                            }
                                            echo '</ul>';
                                            unset($_SESSION['ERRMSG_ARR']);
                                            }
                                        ?>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Tài khoản </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="tên tài khoản của bạn"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Mật khẩu </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="ví dụ. Xdf!9O" /> 
                                </p>
                                <p class="keeplogin"> 
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                                    <label for="loginkeeping">Nhớ tài khoản</label>
                                </p>
                                <p class="login button">                                   
                                   <input type="submit" value="Đăng nhập" />
                                </p>
                                <p class="change_link">
                                    
                                    <a href="#toregister" class="to_register">Quên mật khẩu?</a>                                    
                                </p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" value="Sign up" /> 
                                </p>
                                <p class="change_link">  
                                    Already a member ?
                                    <a href="#tologin" class="to_register"> Go and log in </a>
                                </p>
                            </form>
                        </div>
                        
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>