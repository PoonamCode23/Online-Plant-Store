<?php
require("conn.php");
require("adminpage.php");
?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

 <hr>
  <h4 style="color: green; margin-left:200px;">View Products By Categories</h4>
  <div class="container mt-5">
    <div class="row">
        <div class ="col-lg-12">
            <table class="table text-center  table-green">
            <thead>
                  <tr>
                    <th scope="col">Subcategory Number</th>
                    <th scope="col">Sub Category Name</th>
                     <th scope="col">Main Category Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query="SELECT * FROM `subcategory`";
                $user_result=mysqli_query($con,$query);
                while($user_fetch=mysqli_fetch_assoc($user_result))
                {
                    echo"
                    <tr>
                    <td>$user_fetch[SN]</td>
                    <td>$user_fetch[Sname]</td>
                     <td>$user_fetch[Cname]</td>
                     <td><form action='delete.php' method='POST'>
                    <button type='button' name='user_delete' class='btn btn-danger'>Delete</i></button>
                     </form>
                    </td>
                    ";
                }
                ?>    
        </tr>
    </tbody>
</table>
<style>body{background-color: #e6ffe6;}</style>
</div>
</div>
  <?php
    $sql1="Select * from categories";
    $query1=mysqli_query($con,$sql1);
    if(!$query1)
{
    die("Query couldnt be processed ".mysqli_error($con));
}
$rows=mysqli_num_rows($query1);
if($rows>0)
{   
$res=mysqli_fetch_all($query1, MYSQLI_ASSOC);
echo "<ul>";
foreach($res as $result)
{
    echo "<li>$result[category_title]</li>";
    $sql2="Select * from subcategory where cname='$result[category_title]' ";
        $query2=mysqli_query($con,$sql2);
        if(!$query2)
        {
            die("Options couldnt be loaded ".mysqli_error($con));
        }
        $rows2=mysqli_num_rows($query2);
    if($rows2>0)
    {   
    while($result2=mysqli_fetch_assoc($query2))
        {
            echo "<a href =products2.php?cat=".urlencode($result2["Sname"]).">$result2[Sname]</a><br/>";
        }
    }
}
echo "</ul>";
}
?>
