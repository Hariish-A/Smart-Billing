<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");
$sql= "SELECT * from  products where delete_status='0'
ORDER BY id DESC";
$result=$conn->query($sql);
?>
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Products</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Products</a>
</li>
<li class="breadcrumb-item"><a href="">Products</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-header">
    <div class="col-sm-10">
        <a href="addproduct.php"><button class="btn btn-primary pull-right">+ Add New</button></a>
    </div>

</div>
<div class="card-block">

<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
                <tr>
                    <th>Id</th>
                    <th>Product Image </th>
                    <th>Product Name</th>
                    <th>Instock</th>
                    <th>Buying Prize</th>
                    <th>Saleing Price</th>
                     <th>Product Added</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
foreach ($result as $row) {
     $sql="SELECT * from categories where id='".$row['categorie_id']." '";
     $result1=$conn->query($sql);
     $row1=$result1->fetch_assoc();
    

$sql="SELECT * from media where id='".$row['media_id']." '";
     $result2=$conn->query($sql);
     $row2=$result2->fetch_assoc();

    ?>
                <tr class="odd gradeX">
                   <td><?php echo $row['id']; ?></td>
                   <td><img class="img circle"src="image/<?php echo $row2['file_name']; ?>" style="width: 50px; height: 50px;border-radius:50%;"></td>
        <td><?php echo $row['name']; ?></td>
         <td><?php echo $row['quantity']; ?></td>
        <td><?php echo $row['buy_price']; ?></td>
        <td><?php echo $row['sale_price']; ?></td>
        <td><?php echo $row['date']; ?></td>
        
        <td>    
            <a href="editproduct.php?id=<?php echo $row['id']?>"><input id="edit" type="submit" name="edit" value="Edit" class="btn btn-success" /></a>
          <a href="deleteproduct.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure to delete this record?')">  <input id="delete" type="submit" name="delete" value="Delete" class="btn btn-danger" /></a>
        </td>
        </tr>
         <?php       
         } 
         ?>      
                
            </tbody>
</table>
</div>
</div>
</div>


</div>

</div>
</div>

<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include("footer.php"); ?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->