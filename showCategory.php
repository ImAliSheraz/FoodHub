<?php 
include 'connection.php';
include 'AdminHeader.php';
$q="CALL `spGetCategories`();";
$res=mysqli_query($conn,$q);
?>
<body>
<center><h1>All Category List</h1></center>
<div class="row">
 <div class="col-12" style="overflow-x:auto;">
<table class="tableClass">
    <tr>
        <th>No.</th> 
        <th>Category Name</th> 
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="2">Action</th>
    </tr>
    <?php
    $num = 1;
    while ($row=mysqli_fetch_array($res)) {?>
    <tr>
        <td><?php echo $num ?></td>
        <td><?php echo $row['category_name']; ?></td>
        <td><?php echo $row['category_createdat']; ?></td> 
        <td><?php echo $row['category_updatedat']; ?></td> 
        <td><a href="editCategory.php?id=<?php echo $row['category_id']?>">Edit</a>/<a href="deleteCategory.php?id=<?php echo $row['category_id']; ?>">Delete</a></td>
    </tr>
    <?php
    $num++;
    }?>
</table>
   </div>
</div>
</body>
</html>
