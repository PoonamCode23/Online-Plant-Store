<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <link rel="stylesheet" type="text/css" href="flower1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Infinite Green</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <?php require 'nav1.php'; ?>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/front.png" alt="main" width="1100" height="500">
                <div class="carousel-caption">
                    <h3 style="font-family: 'Sofia', sans-serif; font-size:30px;color: yellow;">Plant flowers to fill you
                        with joy, happiness and hope.</h3>
                </div>
         </div>
            <div class="carousel-item">
                <img src="images/airplants.png" alt="daisy" width="1100" height="500">
                <div class="carousel-caption">
                    <h3 style="font-family: 'Sofia', sans-serif;font-size:35px;color:brown;">To plant a garden is to
                        believe in tomorrow.</h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="images/sus.jpg" alt="three" width="1100" height="500">
                <div class="carousel-caption">
                    <h3 style="font-family: 'Sofia', sans-serif;font-size:30px;color:purple">If you want to be Happy for
                        a Lifetime, be a Gardener</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="desc">
        <h2 class="product-desc">We are a team of horticultural experts, logistical masterminds, design geniuses, and
            lots of dedicated worker bees trying our best to earn the smile you wear on seeing the healthy, happy plants
            you receive. </br>We are not magicians, just really passionate plant people.</h2>
    </section>
    <hr>

    <section class="product">
        <h2 class="product-category">Best Online Plant Delivery in Nepal</h2>
    </section>
        <div class="product-container">
            <form action="manage.php" method="POST">
                <div class="product-card">
                    <div class="product-image">
                        <a href="flowering.php">
                            <img src="images/cupid.png" class='plant-img' height="350px" width="400px" alt="">
                        </a>
                        <input type="hidden" name="plant" value="Mini Bamboo">
                        <input type="hidden" name="price" value="450">
                    </div>
                    <div class="product-info">
                        <h2>Flowering Plants</h2>
                    </div>
                </div>
            </form>
            <form action="manage.php" method="POST">
                <div class="product-card">
                    <div class="product-image">
                        <a href="ceramic.php"><img src="images/planter.png" class='plant-img' height="350px"
                                width="400px" alt=""></a>
                        <input type="hidden" name="plant" value="Money Plant">
                        <input type="hidden" name="price" value="450">
                    </div>
                    <div class="product-info">
                        <h2>Planters</h2>
                    </div>
                </div>
            </form>
            <form action="manage.php" method="POST">
                <div class="product-card">
                    <div class="product-image">
                        <a href="herb.php"><img src="images/seed.png" class='plant-img' height="350px" width="400px"
                                alt=""></a>
                        <input type="hidden" name="plant" value="Peace Lily">
                        <input type="hidden" name="price" value="450">
                    </div>
                    <div class="product-info">
                        <h2>Seeds</h2>
                    </div>
                </div>
            </form>
            <form action="manage.php" method="POST">
                <div class="product-card">
                    <div class="product-image">
                        <a href="growth.php"><img src="images/care.png" class='plant-img' height="350px" width="400px"
                                alt=""></a>
                        <input type="hidden" name="plant" value="Jade Plant">
                        <input type="hidden" name="price" value="450">
                    </div>
                    <div class="product-info">
                        <h2>Plant Care</h2>
                    </div>
                </div>
            </form>

        </div>
        <hr>
        <section class="product">
            <h2 class="product-category">best selling</h2>
            <div class="product-container">
                <form action="manage.php" method="POST">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">10% off</span>
                            <img src="images/bamboo.png" class="product-thumb" alt="">
                            <button class="card-btn" name="addtocart">add to cart</button>
                            <input type="hidden" name="plant" value="Mini Bamboo">
                            <input type="hidden" name="price" value="450">
                        </div>
                        <div class="product-info">
                            <h2>Mini bamboo</h2>
                            <span class="price">Rs.450</span><span class="actual-price">Rs.500</span>
                        </div>
                    </div>
                </form>
                <form action="manage.php" method="POST">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">10% off</span>
                            <img src="images/money.png" class="product-thumb" alt="">
                            <button class="card-btn" name="addtocart">add to cart</button>
                            <input type="hidden" name="plant" value="Money Plant">
                            <input type="hidden" name="price" value="450">
                        </div>
                        <div class="product-info">
                            <h2>Money Plant</h2>
                            <span class="price">Rs.450</span><span class="actual-price">Rs.500</span>
                        </div>
                    </div>
                </form>
                <form action="manage.php" method="POST">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">10% off</span>
                            <img src="images/lily.png" class="product-thumb" alt="">
                            <button class="card-btn" name="addtocart">add to cart</button>
                            <input type="hidden" name="plant" value="Peace Lily">
                            <input type="hidden" name="price" value="450">
                        </div>
                        <div class="product-info">
                            <h2>Peace Lily</h2>
                            <span class="price">Rs.450</span><span class="actual-price">Rs.500</span>
                        </div>
                    </div>
                </form>
                <form action="manage.php" method="POST">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">10% off</span>
                            <img src="images/jade.png" class="product-thumb" alt="">
                            <button class="card-btn" name="addtocart">add to cart</button>
                            <input type="hidden" name="plant" value="Jade Plant">
                            <input type="hidden" name="price" value="450">
                        </div>
                        <div class="product-info">
                            <h2>Jade Plant</h2>
                            <span class="price">Rs.450</span><span class="actual-price">Rs.500</span>
                        </div>
                    </div>
                </form>
            </div>
          
        </section>
      
        <section class="aelo">
            <img src="images/aelo.png" alt="aloe">
            <div class="centered">
            
            </div>
            <button onclick="window.location.href='doctor.php';" class="button-53" role="button">
                Call Doctor Green
            </button>  
        </section>
       
         <?php require 'footer.php'; ?>
</body>

<style>
.plant-img {
    transition: 0.5s transform ease-out;
    max-width: 100%;
}

.plant-img:hover {
    transform: scale(1.2);
    transition: 0.5s transform ease-out;
}

.product-info {
    text-align: center;}
    body{
        background-color:white;
    }
    .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 40px;
color:#8B4513;
  transform: translate(-50%, -120%);
}
.button-53 {
  background-color:#D59D11 ;
  border: 0 solid #E5E7EB;
  box-sizing: border-box;
  color: #000000;
  display: flex;
  font-family: ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 1rem;
  font-weight: 700;
  justify-content: center;
  line-height: 1.75rem;
  padding: .75rem 1.65rem;
  position: relative;
  text-align: center;
  text-decoration: none #000000 solid;
  text-decoration-thickness: auto;
  max-width: 460px;
  position: relative;
  transform: rotate(-2deg);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  transform: translate(290%, -600%);
}

.button-53:focus {
  outline: 0;
}

.button-53:after {
  content: '';
  position: absolute;
  border: 1px solid #000000;
  bottom: 4px;
  left: 4px;
  width: calc(100% - 1px);
  height: calc(100% - 1px);
}

.button-53:hover:after {
  bottom: 2px;
  left: 2px;
}

@media (min-width: 768px) {
  .button-53 {
    padding: .75rem 3rem;
    font-size: 1.25rem;
  }
}

</style>

</html>