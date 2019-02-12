
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
    <li class="breadcrumb-item active">New Article</li>
  </ol>

  <form method="POST" action="savepost.php" enctype="multipart/form-data">
<fieldset>



<!-- Form Name -->
<legend>New Article</legend>

<div class="form-group">
    <?php
        if(isset($_GET['done'])){
echo '<div class="alert alert-success">
<strong>Success!</strong> Your post has been sent to site admin to be reviewed then to be published 
</div>';
        }
    ?>



  <label for="title" class="control-label">Title</label>
  
    <input type="text" class="input-lg form-control" name="title" placeholder="Enter Title of you new article" required="">
    
  
</div>
<div class="form-group">
  <label class="control-label" for="category">Category</label>
  <div class="controls ">
    <select id="category" name="category" class="form-control input-lg" required="">
      <?php
                foreach ($cats as $value){
                    echo <<<cats
                    <option value="{$value['cat_id']}">{$value['cat_name']}</option>
                    cats;
                }
                ?>
    </select>
    
  </div>
</div>
<div class="form-group">
  <label class="control-label" for="content">Article</label>
  
    <textarea class="form-control" id="content" name="content" rows="7" required=""></textarea>

  
</div>

<div class="form-group">
  <label for="postimage" class="control-label">Cover Image</label>
  
  <input type="file" id="fileToUpload" name="fileToUpload" required="">
  
  
</div>

<div class="form-group">
  <label class="control-label" for="save"></label>
  <div class="text-center">
    <button type="submit" id="save" name="save" class="btn btn-success" aria-label="">Publish</button>
    
  </div>
</div>


</fieldset>
</form>



  </div>
    </div>
    <?php
include 'inc/footer.php';
?>