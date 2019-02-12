<?php
include 'inc/header.php';
include 'inc/db.php';

$cat_sql = $conn->query("select a.post_id ,a.post_title, u.username, c.cat_name, a.status, a.date from posts a inner join categories c on c.cat_id = a.cat_id left join users u on a.owner_id = u.user_id");
$cats = $cat_sql->fetchAll();


?>


<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Articles</li>
    </ol>



    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-newspaper"></i>
        All Articles</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" style="text-align:center;" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th> Title</th>
                <th> Category</th>
                <th> Publisher</th>
                <th> Date</th>
                <th> Status</th>
                <!-- <th> Delete</th> -->
                <th> Edit</th>
               
              </tr>
            </thead>

            <tbody>
                <?php
                foreach ($cats as $value){
                    echo <<<cats_up
                    <tr>
                    <td style="font-weight:bold;">{$value['post_title']}</td>
                    <td>{$value['cat_name']}</td>
                    <td style="font-weight:bold;color:green;">{$value['username']}</td>
                    <td>{$value['date']}</td>
                    
                    cats_up;
                    if ($value['status'] == 0){
                      $post_id = $value['post_id'];
                      
                      echo '<td><a type="button" class="btn btn-primary" href="approve_post.php?post_id="'.$post_id. '>Publish</a>';
                    }else if($value['status'] == 1){
                      echo '<td>Published</td>';
                    }else {

                    }
                    
                    echo <<<cats_down
                    <!-- <td><a type="button" href="delete_post.php?id={$value['post_id']}" class="btn btn-danger">Delete</a> -->
                    <td><a type="button" href="edit_post.php?id={$value['post_id']}" class="btn btn-success">Edit</a>

                    </td>
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