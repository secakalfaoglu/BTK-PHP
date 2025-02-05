<?php
include "libs/ayar.php";
require "libs/variables.php";
require "libs/functions.php";


if(isLoggedIn()) {
    header("location: unauthorize.php");
}

$username =  $password = "";
$usernameErr = $passwordErr = $loginErr = "";


if (isset($_POST["login"])) {
    if (empty($_POST['username'])) {
        $usernameErr = "username boş olamaz";
    } else {
        $username = safe_html($_POST['username']);
    }

    
    if (empty($_POST['password'])) {
        $passwordErr = "Parola boş olamaz";
    } else {
        $password = safe_html($_POST['password']);
    }

    if (empty($usernameErr) && empty($passwordErr)) {
        
        $sql = "SELECT id, username, password, user_type FROM kullanicilar WHERE username=?";
        if($stmt = mysqli_prepare($baglanti, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $username);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    //parola kontrolü
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $user_type);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            $_SESSION["loggedIn"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["user_type"] = $user_type;
                            header("location: index.php");
                        }else{
                            $loginErr = "Parola hatalı";
                        }
                    }
                } else {
                    $loginErr = "Kullanıcı adı  hatalı";
                }
            }else{
                $loginErr = "Bir hata oluştu";
            }
           
        }
        mysqli_stmt_close($stmt);
        mysqli_close($baglanti);
    }
}

?>

<?php 
    if(!empty($loginErr)){
        echo '<div class="alert alert-danger" role="alert">'.$loginErr.'</div>';
    }
?>
<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>


<div class="container my-3">

    <div class="row">
        <div class="col-12">
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <div class="text-danger"><?php echo $usernameErr; ?></div>
                </div>

                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                    <div class="text-danger"><?php echo $passwordErr; ?></div>
                </div>

                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>

        </div>

    </div>

</div>

<?php include "partials/_footer.php" ?>