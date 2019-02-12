<?php
include 'inc/header.php';
include 'inc/db.php';

$cat_sql = $conn->query("SELECT * FROM `categories`");
$cats = $cat_sql->fetchAll();


?>


<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Categories</li>
    </ol>



    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-newspaper"></i>
        All Categories</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th> Name</th>
                <th> Delete</th>
                
               
              </tr>
            </thead>

            <tbody>
                <?php
                foreach ($cats as $value){
                    echo <<<cats
                    <tr>
                    <td>{$value['cat_name']}</td>
                    <td><a type="button" href="delete?cat_id={$value['cat_id']}" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                    cats;
                }
                ?>


              
            </tbody>
          </table>
        </div>
      </div>
    </div>

  
  <!-- /.container-fluid -->

<?php
include 'inc/footer.php';
?>