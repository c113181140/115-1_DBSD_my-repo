<?php
$error = "";
$msg = "";
$name = "";
$username = "";
$showform = true;
    if(isset($_GET["Reg"])){
        $name = $_GET["name"];
        $username = $_GET["UserName"];
        $password = $_GET["password"];
        $password_again = $_GET["password-again"];
        if (empty($username)){
            $error = "請輸入帳號";}
            else{
                if(empty($password)){
                    $error = "請輸入密碼";}
                    else{
                        if($password != $password_again){
                            $error = "密碼不一致";}
                            else{
                                $msg = "註冊成功";
                                $showform = false;
                                $msg = "name:" . $name .'<br/>';
                                $msg .= "username: " . $username .'<br/>';
                                $msg .= "password: " . $password .'<br/>';
                            }
                    }
            }
        
    }
?>
<?php if ($showform) { // 顯示網頁表單
       require("about_me.php");
echo "ch08-4-5.php EX03<br>";
       ?>
    <form action="ch08-4-5.php" method="get">
        Name: <input type=text name="Name" /><br />
        ID: <input type=text name="UserName" /><br />
        Password: <input type=password name="Pass1" /><br />
        Password-again: <input type=password name="Pass2" /><br />
        <input type="submit" name="Reg" value="Register User" />
    </form>
    <?php
    } else
        echo $msg;  // 顯示表單處理結果
    ?>