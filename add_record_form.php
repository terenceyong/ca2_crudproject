<?php
require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
        <h1>Add Record</h1>
        <form action="add_record.php" method="post" enctype="multipart/form-data"
              id="add_record_form">

            <label class="input-group-text">Category:</label>
            <select class="form-select" name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br>
            <label  class="input-group-text">Name:</label>
            <input  class="form-control"  pattern = "[a-zA-Z0-9]+" placeholder = "Add food name only" type="input" id="name " name="name" required/>
            <br>

            <label  class="input-group-text" >Allergens:</label>
            <input  placeholder = "Food allergens" class="form-control" type="input" name="allergens"  required>
            <br>      
            
            <label  class="input-group-text" >List Price:</label>
            <input  placeholder = "Food price" class="form-control" type="input" name="price" required>
            <br>     
            
            <label>Image:</label>
            <input class="form-control" type="file" name="image" accept="image/*" required >
            <br>
            
            <label  >&nbsp;</label>
            <input class="btn btn-primary"  type="submit" value="Add Record">
            <br>
        </form>
        <p><a href="index.php">View Homepage</a></p>
    <?php
include('includes/footer.php');
?>

