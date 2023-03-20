<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <?php require 'nav1.php'; ?>
    <section class="desc">
    <h2 class="product-desc">Botanist Luther Burbank rightly said, “Flowers always make people better, happier, and more helpful; they are sunshine, food and medicine for the soul.” Flowering plants add an aesthetic appeal to your home garden taking it to the next level of nature’s beauty</h2>
</section>

    <div class="product-container">
    <form action="manage.php" method="POST">
        <div class="product-card">
            <div class="product-image">

                <img src="images/rose.jpg" class="product-thumb" alt="">
                <button class="card-btn"name="addtocart">add to cart</button>
                <input type="hidden" name="plant" value="Rose Plant">
                <input type="hidden" name="price" value="450">
            </div>
            <div class="product-info">
                <h2 class="flower">Rose Plant</h2>
                <span class="price">Rs.450</span>
            </div>
        </div>
</form>
        <form action="manage.php" method="POST">
        <div class="product-card">
            <div class="product-image">

                <img src="images/portulaca.jpg" class="product-thumb" alt="">
                <button class="card-btn"name="addtocart">add to cart</button>
                <input type="hidden" name="plant" value="Portulanca Plant">
                <input type="hidden" name="price" value="500">
            </div>
            <div class="product-info">
                <h2 class="flower">Portulanca Plant</h2>
                <span class="price">Rs.500</span>
            </div>
        </div>
</form>
        <form action="manage.php" method="POST">
        <div class="product-card">
            <div class="product-image">
                <img src="images/peacock.jpg" class="product-thumb" alt="">
                <button class="card-btn"name="addtocart">add to cart</button>
                <input type="hidden" name="plant" value="Peacock Plant">
                <input type="hidden" name="price" value="550">
            </div>
            <div class="product-info">
                <h2 class="flower">Peacock Plant</h2>
                <span class="price">Rs.550</span>
            </div>
        </div>
    </form>
</div>
    <div class="product-container">
    <form action="manage.php" method="POST">
        <div class="product-card">
            <div class="product-image">
                <img src="images/bush.jpg" class="product-thumb" alt="">
                <button class="card-btn"name="addtocart">add to cart</button>
                <input type="hidden" name="plant" value="Bush Allamanda">
                <input type="hidden" name="price" value="300">
            </div>
            <div class="product-info">
                <h2 class="flower">Bush Allamanda</h2>
                <span class="price">Rs.300</span>
            </div>
        </div>
        </form>
    
        <form action="manage.php" method="POST">
        <div class="product-card">
            <div class="product-image">

                <img src="images/aster.jpg" class="product-thumb" alt="">
                <button class="card-btn"name="addtocart">add to cart</button>
                <input type="hidden" name="plant" value="Aster Plants">
                <input type="hidden" name="price" value="600">
            </div>
            <div class="product-info">
                <h2 class="flower">Aster Plants</h2>
                <span class="price">Rs.600</span>
            </div>
        </div>
</form>
        <form action="manage.php" method="POST">
        <div class="product-card">
            <div class="product-image">
                <img src="images/bougainvillea.jpg" class="product-thumb" alt="">
                <button class="card-btn" name="addtocart">add to cart</button>
                <input type="hidden" name="plant" value="Bougainvillea Plant">
                <input type="hidden" name="price" value="250">
            </div>
            <div class="product-info">
                <h2 class="flower">Bougainvillea Plant</h2>
                <span class="price">Rs.250</span>
            </div>
        </div>
</form>
</div>
    <div class="product-container">
    <form action="manage.php" method="POST">
        <div class="product-card">
            <div class="product-image">
                <img src="images/euphorbia.jpg" class="product-thumb" alt="">
                <button class="card-btn" name="addtocart">add to cart</button>
                <input type="hidden" name="plant" value="Euphorbia Plant">
                <input type="hidden" name="price" value="450">
            </div>
            <div class="product-info">
                <h2 class="flower">Euphorbia</h2>
                <span class="price">Rs.450</span>
            </div>
      </div>
</form>
        <form action="manage.php" method="POST">
        <div class="product-card">
            <div class="product-image">

                <img src="images/dahlia.jpg" class="product-thumb" alt="">
                <button class="card-btn" name="addtocart">add to cart</button>
                <input type="hidden" name="plant" value="Dahlia Plant">
                <input type="hidden" name="price" value="400">
                </div>
               <div class="product-info">
                <h2 class="flower">Dahlia Plant</h2>
                <span class="price">Rs.400</span>
            </div>
        </div>
 </form>
        <form action="manage.php" method="POST">
        <div class="product-card">
            <div class="product-image">
                <img src="images/torenia.jpg" class="product-thumb" alt="">
                <button class="card-btn" name="addtocart">add to cart</button>
                <input type="hidden" name="plant" value="Torenia Plant">
                <input type="hidden" name="price" value="400">
            </div>
            <div class="product-info">
                <h2 class="flower">Torenia Plant</h2>
                <span class="price">Rs.400</span>
            </div>
        </div>
        </form>
    </div>
</div>
    <div class='see-more'>
        <a href="flowering2.php" class='btn btn-primary'>See More</a>
    </div>
    <?php require 'footer.php'; ?>



    <style>
           .desc{
    position: relative;
    overflow: hidden;
    padding: 20px 0;
}

.product-desc{
    padding: 0 10vw;
    font-size: 30px;
    font-weight: 500;
    margin-bottom: 40px;
    text-transform: capitalize;
    color:green;
    text-align:center;}
    
    .product-container {
        padding: 0 10vw;
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;

    }

    .flower {
        color: green;
    }

    .product-container::-webkit-scrollbar {
        display: none;
    }

    .product-card {
        flex: 0 0 auto;
        width: 320px;
        height: 450px;
        margin-right: 60px;
    }

    .product-image {
        position: relative;
        width: 100%;
        height: 350px;
        overflow: hidden;
    }

    .product-thumb {
        width: 100%;
        height: 350px;
        object-fit: cover;
    }

    .card-btn {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        padding: 10px;
        width: 90%;
        text-transform: capitalize;
        border: none;
        outline: none;
        background: #fff;
        border-radius: 5px;
        transition: 0.5s;
        cursor: pointer;
        opacity: 0;
        color: green;

    }

    .product-card:hover .card-btn {
        opacity: 1;
    }

    .card-btn:hover {
        background: #efefef;
    }

    .product-info {
        width: 100%;
        height: 100px;
        padding-top: 10px;
    }

    .see-more {
        width: 100;
        text-align: center;
    }

    .see-more a {
        border: 1px solid blue;
        padding: 5px;
        text-decoration: none;
        transition: 0.5s all ease-out;

    }

    .see-more a:hover {
        background: pink;
        color: black;
        transition: 0.5s all ease-out;
    }



    .price {
        font-weight: 900;
        font-size: 20px;
        color: green;
    }
    </style>
</body>

</html>