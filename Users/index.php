<?php
session_start();
$conn=mysqli_connect('localhost','root','','shuledigital');
//Getting Input value
if(isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username) && empty($password)) {
        $error = 'Fileds are Mandatory';
    } else {
        //Checking Login Detail
        $result = mysqli_query($conn, "SELECT*FROM user WHERE username='$username' AND password='$password'");
        $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        $role = $row['role'];

        if ($count > 0) {
            if ($role == 'Teacher'):
                $_SESSION['username'] = $row['username'];
                header('location:../Teachers/index.php');
            elseif ($role == 'Secretary'):
                $_SESSION['username'] = $row['username'];
                header('location:../Secretary/index.php');

            elseif ($role == 'Manager'):
                $_SESSION['username'] = $row['username'];
                header('location:../Manager/index.php');
            elseif ($role == 'Accountant'):
                $_SESSION['username'] = $row['username'];
                header('location:../Accountant/index.php');
            else:
                $error = 'Your PassWord or UserName is not Found';
            endif;
        }


    }
}
?>
<?php include 'head.php'; ?>
 <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info"><i class="fa fa-lock"></i> <b>Login</b></h3>
                            <br />
                            <?php if(isset($error)) : ?>
                         <div class="alert alert-danger">
                          <a href="#" class="close" data-dismiss="alert">&times;</a>
                         <?php if(isset($error)){ echo $error;} ?>
                           </div>
                            <?php else: echo ''; endif; ?>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                            <!--     <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label> --><br>
                                <input type="submit" name="login" class="btn btn-info btn-block" value="login">
                            </div>
                            <br />
                            <!-- <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>