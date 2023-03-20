<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <?php require 'nav1.php'?>
<section class="desc">
    <h2 class="product-desc">Grow your own healthy and organic leafy vegetables</h2>
</section>

<div class="product-container">
    <div class="product-card">
        <div class="product-image">
            
            <img src="images/lettuce.png" class="product-thumb" alt="">
            <button class="card-btn">add to cart</button>
        </div>
        <div class="product-info">
            <h2 class="flower">Lettuce Seeds</h2>
            <span class="price">Rs.400</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            
            <img src="images/kale.png" class="product-thumb" alt="">
            <button class="card-btn">add to cart</button>
        </div>
        <div class="product-info">
            <h2 class= "flower">Kale Seeds</h2>
            <span class="price">Rs.200</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <img src="images/beetroot.png" class="product-thumb" alt="">
            <button class="card-btn">add to cart</button>
        </div>
        <div class="product-info">
            <h2 class="flower">Beetroot Seeds</h2>
            <span class="price">Rs.100</span>
        </div>
    </div>
</div>
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
    text-align:center;
}
.product-container{
    padding: 0 10vw;
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;

}

.flower{
    color:green;
}

.product-container::-webkit-scrollbar{
    display: none;
}

.product-card{
    flex: 0 0 auto;
    width: 320px;
    height: 450px;
    margin-right: 60px;
}

.product-image{
    position: relative;
    width: 100%;
    height: 350px;
    overflow: hidden;
}

.product-thumb{
    width: 100%;
    height: 350px;
    object-fit: cover;
}

.card-btn{
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
    color:green;

}

.product-card:hover .card-btn{
    opacity: 1;
}

.card-btn:hover{
    background: #efefef;
}

.product-info{
    width: 100%;
    height: 100px;
    padding-top: 10px;
}



.price{
    font-weight: 900;
    font-size: 20px;
    color: green;
}


</style>