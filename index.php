<?php
$conn = mysqli_connect('localhost','root' ,'12345678','contact_db') or die ('connection failed ');
if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn , $_POST['name']);
    $email =mysqli_real_escape_string($conn , $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query( $conn , "INSERT INTO `contact_form`(name,email ,number , date )VALUES('$name','$email','$number','$date')") or die ('query failed');
    if ($insert){
        $message[] = 'appointment made successfully!';


    }else {
        $message[]='appointment failed';
    }
}



?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist Website</title>
    <link rel="shortcut icon" href="images/logo.svg.png">
    <!-- font awssome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!--bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <!--  css file link-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--header section starts -->
    <header class="header fixed-top">
        <div class="container">
        <div class="row align-items-center justify-content-between">
            <a href="#home" class="logo"> dental<span>care.</span></a>
            <nav class="nav">
                <a href="#home">Home </a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#reviwes">reviews</a>
                <a href="#contact">contact</a>

            </nav>
            <a href="#contact" class="link-btn">make appointment</a>
            <div id="menu-btn" class="fas fa-bars"></div>


        </div>
        </div>
    </header>

    <!--header section ends -->

    <!-- home section starts -->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>let us brighten your smile</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores quas quidem repellat eligendi impedit? Inventore!</p>
                    <a href="#content" class="link-btn">make appointment </a>

                </div>

            </div>
        </div>
    </section>


    <!-- home section ends -->

    <!-- about section starts -->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/pexels-anna-shvets-6291063.jpg" class=" w-100 mb-5 md-0" alt="">
                </div>
                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True Healthcare your Fmaily</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam laborum placeat ipsam est sunt nostrum, vel pariatur doloribus! Dignissimos autem molestiae velit, aliquid itaque delectus quaerat nemo mollitia excepturi porro!</p>
                    <a href="#contact" class="link-btn ">make appointment</a>

                </div>


            </div>
        </div>


    </section>

    <!-- about section ends-->



    <!-- services section starts -->
    <section class="services" id="services">
        <h1 class="heading">
            our services
        </h1>
        <div class="box-container container">
            <div class="box">
                <img src="./images/icon-1.svg" alt="">
                <h1>Alignment specialist</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, tenetur!</p>
                
            </div>
            <div class="box">
                <img src="./images/icon-2.svg" alt="">
                <h1>Cosmetic Dentisty</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, tenetur!</p>

            </div>
            <div class="box">
                <img src="./images/icon-3.svg" alt="">
                <h1>Oral Hygiene Experts</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, tenetur!</p>

            </div>
            <div class="box">
                <img src="./images/icon-4.svg" alt="">
                <h1>Root Canal specialist</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, tenetur!</p>

            </div>
            <div class="box">
                <img src="./images/icon-5.svg" alt="">
                <h1>Live Dental Adivisory</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, tenetur!</p>

            </div>
            <div class="box">
                <img src="./images/icon-6.svg" alt="">
                <h1>Cavity inspection</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, tenetur!</p>

            </div>


        </div>
    </section>






    <!-- services section ends -->


    <!-- prosess section start  -->
    <section class="process">
        <h1 class="heading">
            Our Process
        </h1>
        <div class="box-container container">
            <div class="box text-center">
                <img src="./images/st-10.png"  alt="">
                <h3>Cosmetic Dental</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, ab.</p>
                
            </div>
            <div class="box text-center">
                <img src="./images/st2.png"  alt="">
                <h3>Cosmetic Dental</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, ab.</p>

            </div>
            <div class="box text-center">
                <img src="./images/ST3.webp" class="w-100"  alt="">
                <h3>pediartic Dentisty</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, ab.</p>

            </div>
        </div>
    </section>

  




    <!-- prosess section end -->


    <!-- reviews section start  -->
    <section class="reviews" id="reviews">
        <h1 class="heading"> Satisfid Clientes</h1>
        <div class="box-container container">
            <div class="box">
                <img src="./images/pic-1.png"  alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quam magnam nam optio animi dolores.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John deo</h3>
                <span>Satified Clientes</span>
            </div>
            <div class="box">
                <img src="./images/pic-2.png"  alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quam magnam nam optio animi dolores.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John deo</h3>
                <span>Satified Clientes</span>
            </div>
            <div class="box">
                <img src="./images/pic-3.png"  alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quam magnam nam optio animi dolores.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John deo</h3>
                <span>Satified Clientes</span>
            </div>

        </div>
    </section>



    <!-- reviews section end  -->


    <section class="contact" id="contact">
        <h1 class="heading">Make Appointment</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
        <?php 
        if(isset($message)){
            foreach($message as $message){
                echo '<p class="message">'.$message.' </p>';
            }
    




        }
        ?>
        <p class="message">Testing message Box</p>
        <span>Your Name :</span>
        <input type="text" name="name" placeholder="inter your name" class="box" required>
        <span>Your Email :</span>
        <input type="email" name="email" placeholder="inter your email" class="box" required>
        <span>your Number :</span>
        <input type="number" name="number" placeholder="inter your number" class="box" required>
        <span>Appintment Data :</span>
        <input type="datetime-local" name="date"  class="box">
        <input type="submit" value="make appintment" name="submit" class="link-btn">
    </form>
    </section>


    <!-- footer section start  -->
    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+123-554-888</p>
                <p>+111-655-488</p>

            </div>
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Our Address</h3>
                <p>palestine - Gaza</p>
            </div>
            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>Opening Hours</h3>
                <p>00:07am to 10:00pm
                </p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Email Address</h3>
                <p>rozanashaqqoura@gmail.com</p>
                <p>yazanraed@gmail.com</p>

            </div>

        </div>
        <div class="credit">
         &copy;  Copyright @ <?php echo date('Y') ;?> By<span> Miss.Rozana Web Developer</span>
        </div>
    </section>




    <!-- footer section end -->

    























<!-- js file link -->
<script src="js/script.js"></script>

    
</body>
</html>