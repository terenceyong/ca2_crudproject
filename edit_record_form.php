<?php
require('database.php');

$record_id = filter_input(INPUT_POST, 'record_id', FILTER_VALIDATE_INT);
$query = 'SELECT *
          FROM records
          WHERE recordID = :record_id';
$statement = $db->prepare($query);
$statement->bindValue(':record_id', $record_id);
$statement->execute();
$records = $statement->fetch(PDO::FETCH_ASSOC);
$statement->closeCursor();
?>
<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
        <h1>Edit Product</h1>
        <form action="edit_record.php" method="post" enctype="multipart/form-data"
              id="add_record_form">
              
            <input type="hidden" name="original_image" value="<?php echo $records['image']; ?>" required/>
            <input type="hidden" name="record_id"
                   value="<?php echo $records['recordID']; ?>">   
                   
            <label  class="input-group-text">Category ID:</label>
            <input class="form-control"  type="category_id" name="category_id" 
                   value="<?php echo $records['categoryID']; ?>" placeholder = "Category ID only"required>
            <br>

            <label  class="input-group-text">Name:</label>
            <input  class="form-control" type="input" name="name"
                   value="<?php echo $records['name']; ?>" placeholder="Name only"required>
            <br>

            <label  class="input-group-text">Allergens:</label>
            <input  class="form-control" type="input" name="allergens"
                   value="<?php echo $records['allergens']; ?>" placeholder= "Food Allergens only"required>
            <br>

            <label class="input-group-text">List Price:</label>
            <input  class="form-control" type="input" name="price"
                   value="<?php echo $records['price']; ?>" placeholder= "Price only" required>
            <br>
            <div class="input-group mb-3">
            <label class="input-group-text">Image:</label>
            <input class="form-control" type="file" name="image" accept="image/*" required/>
            <br>            
            <!-- <?php if ($records['image'] != "") { ?>
            <p><img src="image_uploads/<?php echo $records['image']; ?>" height="150" /></p>
            <?php } ?> -->
            </div>
            <label>&nbsp;</label>
            <input class="btn btn-primary" type="submit" value="Save Changes">
            <br>
        </form>
        <p><a href="index.php">View Homepage</a></p>
    <?php
include('includes/footer.php');
?>