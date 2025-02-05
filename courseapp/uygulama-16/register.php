<?php
include "libs/ayar.php";
require "libs/variables.php";
require "libs/functions.php";

?>


<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<?php
$usernameErr = $emailErr = $passwordErr = $repasswordErr = "";
$username =  $email =  $password = $repassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    if (empty($_POST['username'])) {
        $usernameErr = "Kullanıcı adı boş olamaz";
    } elseif (strlen($_POST['username']) < 5 or strlen($_POST['username']) > 20) {
        $usernameErr = "username 5-20 karakter aralığında olmalıdır";

    } elseif(!preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $_POST['username'])){
        $usernameErr = "username sadece rakam, harf ve alt çizgi karakterlerinden olmalıdır";
    }
    else {
        $sql = "SELECT id FROM kullanicilar WHERE username=?";
        if($stmt = mysqli_prepare($baglanti, $sql)){
            $param_username = trim($_POST['username']);
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $usernameErr = "Bu kullanıcı adı zaten alınmış";
                }else{
                    $username = safe_html($_POST['username']);
                }
            } else{
                echo mysqli_error($baglanti);
                echo "hata oluştu";
            }
            
        }
       
    }

    if (empty($_POST['email'])) {
        $emailErr =  "Email boş olamaz";
    } elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $emailErr =  "Email hatalıdır.";
    }else {
        $sql = "SELECT id FROM kullanicilar WHERE email=?";
        if($stmt = mysqli_prepare($baglanti, $sql)){
            $param_email = trim($_POST['email']);
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $emailErr = "Bu email zaten alınmış";
                }else{
                    $email = safe_html($_POST['email']);
                }
            }else{
                echo mysqli_error($baglanti);
                echo "hata oluştu";
            }
            
        }
        $email = safe_html($_POST['email']);
    }

    if (empty($_POST['password'])) {
        $passwordErr = "Parola boş olamaz";
    } else {
        $password = safe_html($_POST['password']);
    }

    if ($_POST['repassword'] != $_POST['password']) {
        $repasswordErr = "Parolalar uyuşmuyor";
    } else {
        $repassword = safe_html($_POST['repassword']);
    }

    if (empty($usernameErr) && empty($emailErr) && empty($passwordErr) && empty($repasswordErr)) {
        
        //$password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO kullanicilar (username, email, password) VALUES (?,?,?)";
        if($stmt = mysqli_prepare($baglanti, $sql)){
            $param_username = $username;
            $param_email = $email;
            //$param_password = $password;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");
            }else{
                echo mysqli_error($baglanti);
                echo "<br>";
                echo "Bir hata oluştu. Lütfen daha sonra tekrar deneyiniz.";
            }
            mysqli_stmt_close($stmt);
        }
    }


}
?>

<div class="container my-3">

    <div class="row">
        <div class="col-12">
            <form action="register.php" method="POST" novalidate>
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <div class="text-danger"><?php echo $usernameErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="email">Eposta</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                    <div class="text-danger"><?php echo $emailErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                    <div class="text-danger"><?php echo $passwordErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="repassword">Parola Tekrar</label>
                    <input type="password" name="repassword" class="form-control">
                    <div class="text-danger"><?php echo $repasswordErr; ?></div>
                </div>
                
                <button type="submit" class="btn btn-primary">Kayıt Ol</button>
            </form>

        </div>

    </div>

</div>

<?php include "partials/_footer.php" ?>