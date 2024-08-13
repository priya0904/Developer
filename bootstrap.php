<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
    <a class="navbar-brand" href="#"><?php echo "CompanyName"; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto ">
        <li class="nav-item active">
          <a class="nav-link "  href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <hr class="dropdown-divider">
            <a class="dropdown-item" href="#">Something else here</a>
</div>
</li>
        <li class="nav-item">
          <a class="nav-link disabled" tabindex ="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-1 my-lg-0">
        <input class="form-control mr-sm-0" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-1 my-sm-0" type="submit">Search</button>
      </form>
  </div>
</nav>
<div class="alert alert-warning alert-dismissible fade show" role ="alert">
    <strong>Holy guacamole </strong> You should check in some of those field.
    <button type="button" class="close" data-dimiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
</body>
</html>