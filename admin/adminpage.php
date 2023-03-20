<!DOCTYPE html>
<html>
    <head>
        <title> Admin Dashboard</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container-fluid">
   <nav class=" nav navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid bg-success">
            <img src="images/profile.jpg" class="logo" alt="logo">
            <h3 class="text-left p-2"><a href="adminpage.php"  style="color:white;">Welcome Admin!</a></h3>
        </div>
    </nav>
    <div class="bg-light">
        <h3 class="text-center p-2" style="color:green;">Manage Details</h3>
    </div >
    <div class="row">
        <div class="col-md-12 bg-success p-3 d-flex align-items-center">
       <div class="button text-center bg-success p-3 ">
        <button><a href="insertp.php" class="nav-link text-success  my-1 font-weight-bold">Insert Products</a></button>
        <button><a href="viewp.php" class="nav-link text-success  my-1 font-weight-bold ">  View Products</a></button>
        <button><a href="insertpcat.php" class="nav-link text-success  my-1 font-weight-bold">Insert Product Categories</a></button>
        <button><a href="viewpcat.php" class="nav-link text-success  my-1 font-weight-bold">View Product Categories</a></button>
        <button><a href="insertcat.php" class="nav-link text-success  my-1 font-weight-bold">Insert Categories</a></button>
        <button><a href="viewcat.php" class="nav-link text-success  my-1 font-weight-bold">View Categories</a></button>
        <button><a href="vieworders.php" class="nav-link text-success  my-1 font-weight-bold">View Customers and Orders</a></button>
        <button><a href="viewusers.php" class="nav-link text-success  my-1 font-weight-bold">View Users</a></button>
        <button><a href="viewschedule.php" class="nav-link text-success  my-1 font-weight-bold">View Appointment Details</a></button>
        <button><a href="../logout.php" class="nav-link text-success  my-1 font-weight-bold">Logout</a></button>
       </div> 
        </div>
    </div>          
</div>
</body>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .logo{
        width:100px;
        height:100px;
     }
     body {background-color: #e6ffe6;}

</style>
</html>