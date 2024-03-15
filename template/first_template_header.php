
<?php
$hnav = array(
    array("Home Page", "./first_template_home.php"),
    array("Product", "./notfound.php"),
    array("Download", "./notfound.php"),
    array("Contact", "./contact.php"),
    array("Checkout", "./notfound.php"),
    array("","#"),
    // array("","#"),
    // array("","#"),
    // array("","#"),
    // array("","#"),  
    array("","#"),
    array("","#"),
    array("","#"),
    array("","#"),
    array("","#"),
    array("","#"),
    array("🚴🏾‍♂️Signing Up","./signup.php"),
    array("🚴🏾‍♂️Login","./login.php"),

);

include_once('db.php');
if (isset($_GET['productid']))
    $sql = "select * from Product where ProductId ='" . $_GET['productid'] . "'";
elseif (isset($_GET['keyword']))
    $sql = "select * from product where productname like '%" . $_GET['keyword'] . "%' or productid like '%" . $_GET['keyword'] . "%' ";
else
    $sql = "select * from Product";
$rows = query($sql);


?>
<ul class="nav">
    <?php
    for($i = 0; $i < count($hnav); $i++){
    ?>    
     <li class="nav-item"><a href="<?=$hnav[$i][1]?>" class="nav-link">
     <?=$hnav[$i][0]?>
     </a></li>
    <?php
    }
    ?>
    
    <?php
    include_once('db.php');
if (isset($_GET['productid']))
    $sql = "select * from Product where ProductId ='" . $_GET['productid'] . "'";
elseif (isset($_GET['keyword']))
    $sql = "select * from product where productname like '%" . $_GET['keyword'] . "%' or productid like '%" . $_GET['keyword'] . "%' ";
else
    $sql = "select * from Product";
$rows = query($sql);
?>


</ul>



