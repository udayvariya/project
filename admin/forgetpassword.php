<?php
    include "_dbconnect.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

<<<<<<< HEAD
    function sendMail($email,$reset_token){
        echo $email;
        echo $reset_token;
        // require('/project/phpmaier/PHPMailer.php');
        // require('/project/phpmaier/SMTP.php');
        // require('/project/phpmaier/Exception.php');
=======
    function sendmail($reset_token){
        
        // require('phpmaier/PHPMailer.php');
        // require('phpmaier/SMTP.php');
        // require('phpmaier/Exception.php');
>>>>>>> 6bc97fc4eff9480bb74f24c79203e74866448bbb

        // $mail = new PHPMailer(true);

        // try {
        //     //Server settings
        //     $mail->isSMTP();                                            //Send using SMTP
        //     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        //     $mail->Username   = 'udayvariya302@gmail.com';                     //SMTP username
        //     $mail->Password   = 'Uday@2757';                               //SMTP password
        //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        //     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
        //     //Recipients
        //     $mail->setFrom('udayvariya302@gmail.com', 'UDAY PASS');
        //     $mail->addAddress($email);     //Add a recipient
        
            
        //     //Content
        //     $mail->isHTML(true);                                  //Set email format to HTML
        //     $mail->Subject = 'Password Reset Link from uday';
        //     $mail->Body    = "we got request the reset password link <br>
        //     click the link below : <br>
        //     <a href='http://localhost/php/updatepassword.php?email=$email&reset_token=$reset_token'>Reset Password</a>";
        
        //     $mail->send();
        //     return true;
        // }
        // catch (Exception $e) {
        //     return false;
        // }

    }
    if(isset($_POST['send-email-link'])){
    $sql = "SELECT * FROM `data` WHERE email = '$_POST[email]'";
    $result = mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result) == 1){
            
<<<<<<< HEAD
            $reset_token = bin2hex(random_bytes(16));
            date_default_timezone_set('Asia/kolkata');
            $date=date('y-m-d');
            // $email = $_POST["email"];
            $sql = "UPDATE `data` SET `resettoken`='$reset_token',`resettokenexp`='$date' WHERE email='$_POST[email]'";
            if(mysqli_query($conn,$sql) && sendMail($_POST["email"],$reset_token)){
                echo "complete to send mail";
                // echo '
                //     <script>
                //     alert("Resent password link send to email address");
                //     </script>
                // ';
        
            }
            else{
                echo "server dwon try again leter";
                // echo '
                //     <script>
                //     alert("server dwon try again leter");
                //     </script>
                // ';
=======
            $reset_token = "123456abcd";
            date_default_timezone_set('Asia/kolkata');
            $date=date('y-m-d');

            $sql = "UPDATE `data` SET `resettoken`='$reset_token',`resettokenexp`='$date' WHERE email='$_POST[email]'";
            if(mysqli_query($conn,$sql)){
                echo '
                    <script>
                    alert("Resent password link send to email address");
                    </script>
                ';
            }
            else{
                echo '
                    <script>
                    alert("server dwon try again leter");
                    </script>
                ';
>>>>>>> 6bc97fc4eff9480bb74f24c79203e74866448bbb
            }

        }
        else{
            echo '
            <script>
            alert("email not found");
            </script>
        ';
        }

    }
    else{
        echo '  
            <script>
            alert("can not send email");
            </script>
        ';
    }
    }
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 6bc97fc4eff9480bb74f24c79203e74866448bbb
