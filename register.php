<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="register.css">
    <link rel="Shortcut Icon" type="image/jpeg" href="img_waad/web_icon1.jpeg">
</head>

<body>

    <?php
    // put your code here
    $Name = $id = $Contact = $Password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Confirm_Password = $_POST['Confirm_Password'];


        $con = mysqli_connect("localhost", "root", "", "pet_care");

        $query = "INSERT INTO `user` (Username, Email, Password, Confirm_Password) VALUES ('$Username', '$Email', '$Password', '$Confirm_Password')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo ("Registration Succesful");
            header("Location: login.php");
        } else {
            echo ("Fail");
        }
    }
    ?>




    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter your username" id="Username" name="Username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="Enter your email" id="Email" name="Email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Enter your password" id="Password" name="Password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm_Password</span>
                        <input type="password" placeholder="Confirm your password" id="Confirm_Password" name="Confirm_Password" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Register">
                    <p class="login"><strong>Already have an account ?</strong><a href="login.php">Login.</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>