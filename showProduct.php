<?php 
include 'connection.php';
include 'AdminHeader.php';
$q="CALL `spGetProduct`();";
$res=mysqli_query($conn,$q);
?>
<body>
<center><h1>All Products List</h1></center>
<div class="row">
 <div class="col-12" style="overflow-x:auto;">
<table class="tableClass">
    <tr>
        <th>No.</th> 
        <th>Product Name</th>
        <th>Product price</th>
        <th>Product Category</th>
        <th>Product Image</th>
        <th>Product MaxQuntity/Order</th>
        <th>Product description</th>
        <th>Created_At</th>
        <th>Updated_At</th>
        <th colspan="2">Action</th> 
    </tr>
    <?php
    $num = 1;
    while ($row=mysqli_fetch_array($res)) {?>
    <tr>
        <td><?php echo $num ?></td>
        <td><?php echo $row['pro_name']; ?></td>
        <td><?php echo $row['pro_price']; ?></td>
        <td><?php echo $row['pro_category']; ?></td>
        <td><?php if(!empty($row['pro_image'])) {?>
        <img src="uploads/<?php echo $row['pro_image'];?>" style="width:60px; height: 60px;">
        <?php } else { ?>
        <img src="uploads/defult.png" style="width:60px;">
        <?php }?>
        </td>
        <td><?php echo $row['pro_MaxQuntity']; ?></td>
        <td><?php echo $row['pro_description']; ?></td>
        <td><?php echo $row['pro_createdat']; ?></td> 
        <td><?php echo $row['pro_updatedat']; ?></td> 
        <td><a href="editProduct.php?id=<?php echo $row['pro_id']?>">Edit</a>/<a href="deleteProduct.php?id=<?php echo $row['pro_id']; ?>">Delete</a></td>
    </tr>
    <?php
    $num++;
    }?>
</table>
   </div>
</div>
</body>
</html>
