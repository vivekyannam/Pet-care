<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="booking.css">
    <link rel="Shortcut Icon" type="image/jpeg" href="img_waad/web_icon1.jpeg">
</head>

<body>
<?php
    // put your code here
    // $Name = $id = $Contact = $Password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Mobile = $_POST['Mobile'];
        $Select_pet = $_POST['Select_pet'];
        $From_date = $_POST['From_date'];
        $To_date = $_POST['To_date'];
        $Message = $_POST['Message'];
        $Select_service = $_POST['Select_service'];

        $con = mysqli_connect("localhost", "root", "", "pet_care");

        $query = "INSERT INTO `pet_booking` (Name, Email, Mobile, Select_pet, From_date, To_date, Message, Select_service) VALUES ('$Name', '$Email', '$Mobile', '$Select_pet', '$From_date', '$To_date', '$Message', '$Select_service')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo ("Registration Succesful");
            header("Location: home.php");
        } else {
            echo ("Fail");
        }
    }
    ?>



    <div class="container">
        <div class="title"><strong>Booking form</strong></div>
        <div class="content">
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" id="Name" placeholder="Enter name" required>
                    </div>
                    <div class="input-box">
                        <label for="Email">Email</label>
                        <input type="email" name="Email" id="Email" placeholder="Enter email" required>
                    </div>
                    <div class="input-box">
                        <label for="Mobile">Mobile</label>
                        <input type="tel" name="Mobile" id="Mobile" placeholder="Enter number" required>
                    </div>
                </div>
                <div class="box">
                    <label for="animal">Select_pet</label>
                    <select id="Select_pet"name="Select_pet">
                        <option value="dog" id="Select_pet" name="Select_pet">Dog</option>
                        <option value="cat" id="Select_pet" name="Select_pet">Cat</option>
                        <option value="cat" id="Select_pet" name="Select_pet">Parrot</option>
                        <option value="cat" id="Select_pet" name="Select_pet">Rabbit</option>
                    </select>
                </div>
                <div class="box">
                    <label for="From_date">From_date</label>
                    <input type="date" name="From_date" id="From_date" placeholder="select" required>
                </div>
                <div class="box">
                    <label for="To_date">To_date</label>
                    <input type="date" name="To_date" id="To_date" placeholder="select" required>
                </div>
                <div class="input-box">
                    <label for="message">Message</label>
                    <br>
                    <textarea  type="message" name="Message" id="Message" placeholder="your message" cols="30" rows="10"
                    placeholder="your complian or suggestions"></textarea>
                </div>
                <div class="box">
                    <label for="service">Select_service</label>
                    <select id="Select_service" name="Select_service">
                        <option value="boarding" id="Select_service" name="Select_service">Boarding</option>
                        <option value="daycare" id="Select_service" name="Select_service">Day_care</option>
                        <option value="grooming" id="Select_service" name="Select_service">Grooming</option>
                        <option value="grooming" id="Select_service" name="Select_service">Medication</option>
                        <option value="grooming" id="Select_service" name="Select_service">Health_checkup</option>
                        <option value="grooming" id="Select_service" name="Select_service">Pet_training</option>
                    </select>
                </div>
                <br>
                <div class="button">
                    <input type="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>