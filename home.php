<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="Shortcut Icon" type="image/jpeg" href="img_waad/web_icon1.jpeg">
</head>
<!-- for book now option still did not kept the link -->

<body>
    <?php
    // put your code here
    $Name = $id = $Contact = $Password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $First_Name = $_POST['First_Name'];
        $Last_Name = $_POST['Last_Name'];
        $City = $_POST['City'];
        $Subject = $_POST['Subject'];


        $con = mysqli_connect("localhost", "root", "", "pet_care");

        $query = "INSERT INTO `contact` (First_Name, Last_Name, City, Subject) VALUES ('$First_Name', '$Last_Name', '$City', '$Subject')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo ("Registration Succesful");
            header("Location: home.php");
        } else {
            echo ("Fail");
        }
    }
    ?>




    <header>
        <!-- i think i have to declare class for nav! -->
        <nav>
            <div class="logo">
                <img src="/c/web_dev/WAAD/img_waad/4k-dog-wallpaper-8.jpg" alt="Pet Services Logo">
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#contant">Pricing</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>

    </header>

    <main>

        <!-- contant -->
        <div class="price" id="contant">
            <div class="contact_head">
                <h2>Our Pet sitting service charges include</h2><br>
                <p>689/- Only</p>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="/c/web_dev/WAAD/img_waad/contant.png" alt="loading...">
                </div>
                <div class="card">
                    <img src="/c/web_dev/WAAD/img_waad/contant3.jpg" alt="loading...">
                </div>
                <div class="card">
                    <img src="/c/web_dev/WAAD/img_waad/contant2.png" alt="loading...">
                </div>
            </div>
        </div>
        <!-- contant -->

        <!-- services -->
        <div class="services-container" id="service">
            <div class="ser_head">
                <h2>Our Services</h2>
            </div>
            <section id="services">
                <div class="service">
                    <img src="/c/web_dev/WAAD/img_waad/grooming.png" alt="Grooming">
                    <h3>Grooming</h3>
                    <p>We offer a variety of grooming services to keep your pet looking and feeling their best. Our
                        experienced groomers will work with you to determine the best grooming plan for your pet.</p>
                    <a href="booking.php" class="book-now-button">Book Now</a>
                </div>

                <div class="service">
                    <img src="/c/web_dev/WAAD/img_waad/boarding3.png" alt="Boarding">
                    <h3>Boarding</h3>
                    <p>When you need to leave town, our boarding services provide a comfortable and safe home away from
                        home
                        for your pet. We offer a variety of amenities to ensure your pet's stay is enjoyable.</p>
                    <a href="booking.php" class="book-now-button">Book Now</a>
                </div>

                <div class="service">
                    <img src="/c/web_dev/WAAD/img_waad/training.jpg" alt="Training">
                    <h3>Training</h3>
                    <p>Our professional trainers use positive techniques to help your pet learn new behaviors
                        and manners. Whether you're looking to teach your pet basic or more advanced skills, we
                        can help.</p>
                    <a href="booking.php" class="book-now-button">Book Now</a>
                </div>
            </section>
        </div>
        <!-- services -->

        <!-- About -->
        <div class="about_part" id="about">
            <h2 class="about_head">Our STORY</h2>
            <div class="about_contant">
                <div class="about_img">
                    <img src="/c/web_dev/WAAD/img_waad/about5.png" alt="loading">
                </div>
                <div class="abou_matter">
                    <p>
                        We at Kuddle are committed to redefining pet parenting and making it a more joyful and
                        convenient journey for all pet lovers. With great obsession towards quality and ease we are
                        creating a platform which will be a one stop solution for all your pet parenting needs. We have
                        started this journey by providing a bouquet of doorstep services across Bengaluru, which include
                        grooming, walking, training, vet consulting and nutrition planning. We are a group of passionate
                        pet lovers who ensure a safe and joyful experience is provided to your furry friends and at the
                        same time provide you with flexibility of scheduling appointments that fit in your schedule
                        perfectly.
                    </p>
                </div>
            </div>
        </div>

        <div class="pet-care-services" id="about2">
            <h2>About Us</h2>
            <p>At Pet Care Services, we believe that pets are an important part of any family. That's why we're
                dedicated to providing the highest quality pet care services to our clients. Our team of experienced
                professionals is passionate about animals and committed to ensuring that your pets receive the love,
                attention, and care they deserve.</p>
            <p>We offer a wide range of services to meet the needs of all types of pets, including dog walking, pet
                sitting, feeding and watering, bathing and grooming, and more. Whether you need us to look after your
                pets while you're away on vacation, or just need some extra help with daily walks, we're here to help.
            </p>
            <p>At Pet Care Services, we pride ourselves on our attention to detail and our commitment to providing a
                safe and nurturing environment for your pets. We understand that every pet is unique, and we take the
                time to get to know your pets and their individual needs. Our team is fully licensed, insured, and
                bonded, so you can rest assured that your pets are in good hands.</p>
            <p>Contact us today to learn more about our pet care services and how we can help you care for your furry
                friends!</p>
            <div class="pet-photos">
                <img src="/c/web_dev/WAAD/img_waad/forabout1.jpeg" alt="A happy dog and cat">
                <img src="/c/web_dev/WAAD/img_waad/forabout2.jpg" alt="A happy dog and cat">
                <img src="/c/web_dev/WAAD/img_waad/forabout3.jpg" alt="A happy dog and cat">
                <img src="/c/web_dev/WAAD/img_waad/forabout4.jpg" alt="A happy dog and cat">
            </div>
        </div>
        <!-- About -->

        <!-- contact -->
        <div class="container" id="contact">
            <div style="text-align:center">
                <h2>Contact Us</h2>
                <p>Swing by for a cup of coffee, or leave us a message:</p>
            </div>
            <div class="row">
                <div class="column">
                    <img src="/c/web_dev/WAAD/img_waad/for contact.jpeg" style="width:100%">
                </div>
                <div class="column">
                    <form action="" method="POST">
                        <label for="fname">First_Name</label>
                        <input type="text" id="First_Name" name="First_Name" placeholder="Your name.." required>
                        <label for="lname">Last_Name</label>
                        <input type="text" id="Last_Name" name="Last_Name" placeholder="Your last name.." required>
                        <label for="city">City</label>
                        <select id="City" name="City" required>
                            <option value="bangalore" id="City" name="City">Bangalore</option>
                            <option value="hyderabad" id="City" name="City">Hyderabad</option>
                            <option value="delhi" id="City" name="City">Delhi</option>
                            <option value="others" id="City" name="City">others</option>
                        </select>
                        <label for="subject">Subject</label>
                        <textarea id="Subject" name="Subject" placeholder="Write something.." style="height:170px"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <!-- contact -->

        <p class="at_last">
            <a href="#">Back to top</a>
        </p>

    </main>

    <footer>
        <div class="social-media-icons">
            <a href="https://www.instagram.com/___call_me_vivek/" target="_blank"><img src="/c/web_dev/WAAD/img_waad/Facebook_Logo_(2019).png.webp" alt="Facebook" width="30" height="30"></a>
            <a href="https://www.instagram.com/___call_me_vivek/" target="_blank"><img src="/c/web_dev/WAAD/img_waad/twitter.png" alt="Twitter" width="30" height="30"></a>
            <a href="https://www.instagram.com/___call_me_vivek/" target="_blank"><img src="/c/web_dev/WAAD/img_waad/Instagram_icon.png.webp" alt="Instagram" width="30" height="30"></a>
        </div>
        <div class="copyright">
            <p>&copy; 2023 Pet care. All rights reserved.</p>
        </div>
    </footer>



</body>

</html>