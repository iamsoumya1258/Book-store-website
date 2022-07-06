<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img2.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p> One of the earliest online books marketplace in India we have stayed true to our mission of providing an extensive range of books spanning from Fiction, Non-Fiction, Literature, Classics, Academic, Competitive Exam books written by Indian and International Authors to users all across India at most affordable price. Our sincere hope is the people read more and those that read end up writing more.</p>
          
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>The book came in a few days which was faster than anywhere else said theirs would and it came just as described. I will be buying from them again. I can't attest for ebooks, but their textbooks come quickly and they are cheap.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>John White</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I loved the service. It was fast, it was awesome, I could see where my books were being sent, and I got them in no time at all. I will definitely keep coming back because my worries were over as soon as I received my books.Go for it</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alie Grater</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Just amazing. The delivery is too fast. I got my book in the cheapest price.They are quick to purchase many of your textbooks and I received my check in less than a month. I recommend them highly.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Sanket Swayam</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I was desperate for a book. I ordered it yesterday and it came TODAY! Customer service was perfect and the book was in mint condition. Thank you thank you. Absolutly satisfied.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            
         </div>
         <h3>Geeta Agrawal</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>The best website i came across. Wide range of books with cheap price. The delivery service was just wow. Thank you The Booktown.Had a great experience with you</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Varun Sharma</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Its great to get my ordered book within two days. The delivery was too good.It was nicely packed too. well Recomended.Will order again.Thanks for such service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Richa S</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chetan Bhagat</h3>
      </div>

      <div class="box">
         <img src="images/author2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>J.K Rowling</h3>
      </div>

      <div class="box">
         <img src="images/author3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ravinder Singh</h3>
      </div>

      <div class="box">
         <img src="images/author4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ruskin Bond</h3>
      </div>

      <div class="box">
         <img src="images/author5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Nikita Singh</h3>
      </div>

      <div class="box">
         <img src="images/author6.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Durjoy Dutta</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>