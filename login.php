<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="Shortcut Icon" type="image/jpeg" href="img_waad/web_icon1.jpeg">
</head>

<body>
    <?php
    // put your code here
    if (isset($_POST['Password'])) {
        $Email = $_POST['Email'];

        $Password = $_POST['Password'];

        $con = mysqli_connect("localhost", "root", "", "pet_care");

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }


        $query = "SELECT * FROM user WHERE Email='$Email' and Password='$Password'";
        $result = mysqli_query($con, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                session_start();
                $_SESSION['Email'] = $Email;

                header("Location: home.php");
            } else {
                echo ("Invalid credenatials");
            }
        } else {
            echo ("Invalid credenatials");
        }
    }
    ?>


    <div class="container">
        <div class="title">Login</div>
        <div class="content">
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details"><strong>Email</strong></span>
                        <input type="email" placeholder="Enter your email" id="Email" name="Email" required>
                    </div>
                    <div class="input-box">
                        <span class="details"><strong>Password</strong></span>
                        <input type="password" placeholder="Enter your password" id="Password" name="Password" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Login">
                </div>
                <p class="x"><strong>Did not register ?<a href="register.PHP">Register</strong></a></p>
            </form>
        </div>
    </div>


</body>

</html>