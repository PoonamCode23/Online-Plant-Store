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
    <div class="product-container">
        <div class="product-card">
            <div class="product-image">

                <img src="images/rooting.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="flower">Rooting Powder</h2>
                <span class="price">Rs.450</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">

                <img src="images/breezy.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="flower">Breezy C02 Bag</h2>
                <span class="price">Rs.500</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/spaghum.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="flower">Spaghum Moss</h2>
                <span class="price">Rs.550</span>
            </div>
        </div>
    </div>
    <div class="product-container">
        <div class="product-card">
            <div class="product-image">

                <img src="images/bonemeal.jpg" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="flower">Bonemeal Powder</h2>
                <span class="price">Rs.450</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">

                <img src="images/kit.jpg" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="flower">Plant Growth Kit</h2>
                <span class="price">Rs.500</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/boost.jpg" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="flower">Plant Booster</h2>
                <span class="price">Rs.550</span>
            </div>
        </div>
        </div>
    </div>
    <div class='see-more'>
        <a href="airplants.php" class='btn btn-primary'>Back</a>
    </div>
    <?php require 'footer.php'; ?>



    <style>
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