<!-- the head section -->
<head>
<title>Food Court</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="validation.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="preconnect"  href="https://fonts.googleapis.com">
<link rel="preconnect"  href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@700&family=League+Gothic&display=swap" rel="stylesheet">
</head>
<!-- the body section -->
<body>
<nav class="navbar navbar-light" style="background-color: #703f37">
  <div class="container-fluid">
    <img class ="logo" src = "image_uploads/000.png">
    <a class="navbar-brand" href="index.php">Food Court</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="displayAll.php">Show all record</a></li>
          <aside>
<nav>
<ul>
<?php foreach ($categories as $category) : ?>
<li><a class="dropdown-item" href=".?category_id=<?php echo $category['categoryID']; ?>">
<?php echo $category['categoryName']; ?>
</a>
</li>
<?php endforeach; ?>
</ul>
</nav>          
</aside>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="category_list.php"> Manage Categories</a></li>
            <li><a class="dropdown-item" href="add_record_form.php"> Add a record</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>