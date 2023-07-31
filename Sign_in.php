<?php
    require_once 'connect.php';
    session_start();

    if($_POST){
        
        $email =trim($_POST['email']);
        $pass =trim($_POST['pass']);
        
        $SelectData = "select emailUser,passUser,idUser from users where emailUser='$email' and passUser='$pass'";
        $res = $connected -> query($SelectData);
        
        if($res -> num_rows > 0){
            $row = $res -> fetch_assoc();
            $_SESSION['User'] = $row['idUser'];
            header("Location: progect_2.php");
            exit;
        }else{ ?>
            <div class="masegeError">
            <p class="masege">The email or password not correct</p>
            </div>
            <?php
        }
    }
?>
<!DOCTYEP html>
<html>
    <head>
        <title>Market Sign In</title>
        <link rel="stylesheet" href="../fontawesome-free-6.2.0-web/fontawesome-free-6.2.0-web/css/all.min.css">
        <link rel="stylesheet" href="../CSS/CssProject2.css">
        <link rel="icon" href="../photo/market-icons-15740.png">
    </head>
    <body>
        <div>
            <form class="form_sign" method="post">
                <p>Sign in</p>
                <input type="text" placeholder="Phone or Email" name="email">
                <input type="password" placeholder="Password" name="pass">
                <button>Sign in</button>
                <p id="p_2_sign">Not your have account ?</p>
                <a href="Create_account.php">Create new account</a>
            </form>
        </div>
        <script src="../fontawesome-free-6.2.0-web/fontawesome-free-6.2.0-web/js/all.min.js"></script>
        <script src="../Js&JQuery/JQueryConnect.js"></script>
        <script src="../Js&JQuery/JQueryProject2.js"></script>
        <script src="../Js&JQuery/JsProject2.js"></script>
    </body>
</html>