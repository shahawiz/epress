<?php
include 'inc/header.php';
include 'inc/db.php';

$cat_sql = $conn->query("select * from users");
$cats = $cat_sql->fetchAll();


?>


<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Users</li>
    </ol>



    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-newspaper"></i>
        All Users</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" style="text-align:center;" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th> Username</th>
                <th> Email</th>
                <th> Status</th>
                <th> Block</th>
                <th> Role</th>

                <th> Delete</th>
                <th> Edit</th>
               
              </tr>
            </thead>

            <tbody>
                <?php
                foreach ($cats as $value){
                    echo <<<cats_up
                    <tr>
                    <td style="font-weight:bold;">{$value['username']}</td>
                    <td>{$value['email']}</td>

                    
                    cats_up;
                    $user_id = $value['user_id'];

                    if ($value['status'] == 0){
                        echo '<td>Not Active</td>';
                    }else {
                        echo '<td>Active</td>';
                    }

                    if($value['blocked'] != NULL){
                        $exp_date = $value['blocked'];
                        echo '<td>$exp_date</td>';
                    }else{
                        echo '<td><a type="button" href="block.php?user_id=$user_id" class="btn btn-danger"> <i class="fas fa-ban"></i> Block </a>
                        ';
                    }
                    
                    echo <<<cats_down
                    <td>{$value['role']}</td>
                    <td><a type="button" href="edit_user.php?user_id=$user_id" class="btn btn-danger"> <i class="fas fa-trash"></i> Delete</a>

                    </td>
                    <td><a type="button" href="edit_user.php?user_id=$user_id" class="btn btn-success"> <i class="fas fa-pen"></i> Edit</a>
                    </tr>
                    cats_down;
                    
                    
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