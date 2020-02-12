<?php 
include 'connection.php';
include 'AdminHeader.php';
$q="CALL `spGetUser`();";
$res=mysqli_query($conn,$q);
?>
<body>
<center><h1>All User List</h1></center>
<div class="row">
 <div class="col-12" style="overflow-x:auto;">
<table class="tableClass">
    <tr>
        <th>No.</th> 
        <th>Username</th> 
        <th>Email</th> 
        <th>Address</th>
        <th>Role</th>
        <th>Gender</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="2">Action</th>
    </tr>
    <?php
    $num = 1;
    while ($row=mysqli_fetch_array($res)) {?>
    <tr>
        <td><?php echo $num ?></td>
        <td><?php echo $row['user_name']; ?></td>
        <td><?php echo $row['user_email']; ?></td>
        <td><?php echo $row['user_address']; ?></td>
        <td><?php echo $row['role_name']; ?></td>
        <td><?php echo $row['user_gender']; ?></td>
        <td><?php echo $row['user_createdat']; ?></td> 
        <td><?php echo $row['user_updatedat']; ?></td> 
        <td><a href="editUser.php?id=<?php echo $row['user_id']?>">Edit</a>/<a href="deleteUser.php?id=<?php echo $row['user_id']; ?>">Delete</a></td>
    </tr>
    <?php
    $num++;
    }?>
</table>
   </div>
</div>
</body>
</html>
