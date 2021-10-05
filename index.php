<?php 
     
     $showAlert = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){

     include 'partials/db.php';
     $name = $_POST["name"];
     $email = $_POST["email"];
     $number = $_POST["number"];
     $fooditem = $_POST["fooditem"];
     $address = $_POST["address"];
      
      $sql = "INSERT INTO `foods` ( `name`, `email`, `number`, `fooditem`, `address`) 
      VALUES ('$name', '$email', '$number', '$fooditem', '$address')";

      $result = mysqli_query($conn,$sql);
      
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody</title>

    <!--font awesome cdn link   -->
    <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <!-- css link stylesheet-->
    <link rel="stylesheet" href="style.css">
</head>
<?php 
    if($showAlert){
  echo '<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>';
    }
    ?>
<body>

    <!-- header section starts-->
    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>food</a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#speciality">Speciality</a>
            <a href="#popular">Popular</a>
            <a href="#gallery">Gallery</a>
            <a href="#review">Review</a>
            <a href="#order">Order</a>
        </nav>
    </header>


    <!-- header section ends -->

    <!--home section start-->

    <section class="home" id="home">
        <div class="content">
            <h3>Food Made with lOve</h3>
            <p>Food is symbolic of love when words are inadequate.
            “All you need is love. But a little chocolate now
             A recipe has no soul. You, as cook bring soul to the recipe.
            </p>
            <a href="#" class="btn">Order now</a>
        </div>

        <div class="image">
            <img src="images/home-img.png" alt="">
        </div>
    </section>
    <!--home section end -->
    <!--speciality section starts-->
    <section class="speciality" id="speciality">
        <h1 class="heading">Our <span>speciality</span></h1>
        <div class="box-container">
            <div class="box">
                <img class="image" src="images/s-img-1.jpg" alt="">
                <div class="content">
                    <img src="images/s-1.png" alt="">
                    <h3>Tasty burger</h3>
                    <p>A perfect burger has to be juicy and minimally topped. The bun should be
                        nicely toasted to hold up beef</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-2.jpg" alt="">
                <div class="content">
                    <img src="images/s-2.png" alt="">
                    <h3>Tasty pizza</h3>
                    <p>Poll after poll, pepperoni always tops the list of America's favorite
                        pizza toppings. When it doubt, you can't go wrong.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-3.jpg" alt="">
                <div class="content">
                    <img src="images/s-3.png" alt="">
                    <h3>Cold ice-cream</h3>
                    <p>Ice cream is a colloidal emulsion made with water, ice, milk fat,
                        milk protein, sugar and air. Water and fa</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-4.jpg" alt="">
                <div class="content">
                    <img src="images/s-4.png" alt="">
                    <h3>Cold drinks</h3>
                    <p>
                        Some types of soft drinks are lemon-lime drinks, orange soda, cola,
                        grape soda, and root beer. Examples-Coca-Cola, Pepsi,</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-5.jpg" alt="">
                <div class="content">
                    <img src="images/s-5.png" alt="">
                    <h3>tasty sweets</h3>
                    <p>Cheesecake, cupcakes,carrot cake, apple pie, ice cream, brownies,
                        chocolate chip cookies and chocolate cake are most popular desserts</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-6.jpg" alt="">
                <div class="content">
                    <img src="images/s-6.png" alt="">
                    <h3>healthy breakfast</h3>
                    <p>Eggs, greek yogurt, COffee, Oatmeal, Chia seeds, Berries, Nuts, Green Tea, Protein Shake
                        ,Fruit,Flax seeds,Cottage Cheese and Quinoa.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--speciality section ends-->
    <!--popular section starts-->
    <section class="popular" id="popular">
        <h1 class="heading">most <span> Popular</span> foods</h1>
        <div class="box-container">
            <div class="box">
                <span class="price">$5 -$20</span>
                <img src="images/p-1.jpg" alt="">
                <h3>tasty burger</h3>
                <div class="stars">
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="far fa-stars"></i>
                </div>
                <a href="#" class="btn">Order now</a>
            </div>
            <div class="box">
                <span class="price">$5 -$20</span>
                <img src="images/p-2.jpg" alt="">
                <h3>tasty cakes</h3>
                <div class="stars">
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="far fa-stars"></i>
                </div>
                <a href="#" class="btn">Order now</a>
            </div>
            <div class="box">
                <span class="price">$5 -$20</span>
                <img src="images/p-3.jpg" alt="">
                <h3>tasty sweets</h3>
                <div class="stars">
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="far fa-stars"></i>
                </div>
                <a href="#" class="btn">Order now</a>
            </div>
            <div class="box">
                <span class="price">$5 -$20</span>
                <img src="images/p-4.jpg" alt="">
                <h3>tasty cupcakes</h3>
                <div class="stars">
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="far fa-stars"></i>
                </div>
                <a href="#" class="btn">Order now</a>
            </div>
            <div class="box">
                <span class="price">$5 -$20</span>
                <img src="images/p-5.jpg" alt="">
                <h3>cold drinks</h3>
                <div class="stars">
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="far fa-stars"></i>
                </div>
                <a href="#" class="btn">Order now</a>
            </div>
            <div class="box">
                <span class="price">$5 -$20</span>
                <img src="images/p-6.jpg" alt="">
                <h3>cold ice-cream</h3>
                <div class="stars">
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="fas fa-stars"></i>
                    <i class="far fa-stars"></i>
                </div>
                <a href="#" class="btn">Order now</a>
            </div>
        </div>
    </section>
    <!--popular section ends-->
    <!--fav food selection section starts-->
    <section class="steps">
        <div class="box">
            <img src="images/step-1.jpg" alt="">
            <h3>Choose your favorite food</h3>
        </div>
        <div class="box">
            <img src="images/step-2.jpg" alt="">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="images/step-3.jpg" alt="">
            <h3>easy payment methods</h3>
        </div>
        <div class="box">
            <img src="images/step-4.jpg" alt="">
            <h3>and finally ,Enjoy your food</h3>
        </div>
    </section>
    <!--fav food selection section ends-->

    <!--gallery part here starting-->
    <section class="gallery" id="gallery">
        <h1 class="heading">our food<span> gallery</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Error quae porro ipsum rem, minus necessitatibus totam veritatis commodi
                        amet sapiente.</p>
                    <a href="#" class="btn">Order now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Error quae porro ipsum rem, minus necessitatibus totam veritatis commodi
                        amet sapiente.</p>
                    <a href="#" class="btn">Order now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Error quae porro ipsum rem, minus necessitatibus totam veritatis commodi
                        amet sapiente.</p>
                    <a href="#" class="btn">Order now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Error quae porro ipsum rem, minus necessitatibus totam veritatis commodi
                        amet sapiente.</p>
                    <a href="#" class="btn">Order now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Error quae porro ipsum rem, minus necessitatibus totam veritatis commodi
                        amet sapiente.</p>
                    <a href="#" class="btn">Order now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Error quae porro ipsum rem, minus necessitatibus totam veritatis commodi
                        amet sapiente.</p>
                    <a href="#" class="btn">Order now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Error quae porro ipsum rem, minus necessitatibus totam veritatis commodi
                        amet sapiente.</p>
                    <a href="#" class="btn">Order now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Error quae porro ipsum rem, minus necessitatibus totam veritatis commodi
                        amet sapiente.</p>
                    <a href="#" class="btn">Order now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Error quae porro ipsum rem, minus necessitatibus totam veritatis commodi
                        amet sapiente.</p>
                    <a href="#" class="btn">Order now</a>
                </div>
            </div>
        </div>
    </section>

    <!--gallery part here ending-->

    <!--review section starts-->

    <section class="review" id="review">
        <h1 class="heading"> our customers<span> reviews</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="images/pic1.png" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>“Breakfast will knock your slippers off.”
                The food is excellent, generous portions and great prices. The service 
                was fast and friendly. I highly recommended it if you’re in the Wellfleet area.
                  </p>
            </div>
            <div class="box">
                <img src="images/pic2.png" alt="">
                <h3>Schimin Rhilly</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>“Best Pizza On The Cape”.
                We always get pizza here at least once during our summer visit. 
                Breakfasts are hardy. All menu options are tasty- truffle fries- the best!!!</p>
            </div>
            <div class="box">
                <img src="images/pic3.png" alt="">
                <h3>Peppy Rexie</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>“Awesome Corned-beef Hash Breakfast”
                    To my family’s chagrin, I love corned-beef hash and eggs “up” 
                for breakfast. This place has HOMEMADE hash and it’s delicious</p>
            </div>
        </div>
    </section>
    <!--review section ends-->

    <!--order section starts-->
    <section class="order" id="order">
        <h1 class="heading">order<span> now</span></h1>
        <div class="row">
            <div class="image">
                <img src="images/order-img.jpg" alt="">
            </div>
            <form action="/food/index.php" method ="post">
                <div class="inputBox">
                <label for="name" class="form-label"></label>
                    <input type="text" placeholder="Enter your name" id = "name"name="name" >
                    <label for="email" class="form-label"></label>
                    <input type="email" placeholder="Enter your email" id = "email" name= "email" >
                </div>
                <div class="inputBox">
                <label for="number" class="form-label"></label>
                    <input type="number" placeholder="number" id = "number" name= "number" >
                    <label for="fooditem" class="form-label"></label>
                    <input type="text" placeholder="Enter your food name"  id= "fooditem" name= "fooditem">
                </div>
                <label for="address" class="form-label"></label>
                <textarea placeholder="address" name="address" id="address" name= "address" cols="30" rows="10"></textarea>
                <input type="submit" value="order now" class="btn">
                
            </form>
        </div>
    </section>
    <!--order section ends-->

    <!--footer section here goes-->
    <section class="footer">
        <div class="share">
            <a href="#" class="btn">facebook</a>
            <a href="#" class="btn">instagram</a>
            <a href="#" class="btn">twitter</a>
            <a href="#" class="btn">whatsapp</a>
            <a href="#" class="btn">pinterest</a>
        </div>
        <h1 class="credit">created by <span> coder</span> | all rights reserved</h1>
    </section>

    <!--footer closed-->

    <!--loader here-->

  <!--  <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>  */  -->

    <!-- custom js script -->
    <script src="script.js"></script>

</body>

</html>