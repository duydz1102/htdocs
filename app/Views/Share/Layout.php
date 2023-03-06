<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>

    <link href="<?php echo _WEB_ROOT . "/public/lib/bootstrap/bootstrap.min.css" ?>" rel="stylesheet">
    <script src="<?php echo _WEB_ROOT . "/public/lib/jquery-3.6.3.js" ?>"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?php echo _WEB_ROOT . "/public/css/style.css" ?>">
    
</head>

<body class="gradient">

    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    
    <div style="width:100%; height: 100%;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/admin-home">Tổng quan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/index.php">Giao diện của người dùng</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <?php require_once _DIR_ROOT . "/app/Views/" . $data['subview'] . '.php' ?>
    </div>
    
    <script src="<?php echo _WEB_ROOT . "/public/lib/bootstrap/bootstrap.bundle.min.js" ?>"></script>
    <script src="<?php echo _WEB_ROOT . '/public/js/script.js' ?>"></script>
        
    <script>
        $(window).on("load", function() {
            $("body").addClass("loaded");
        });
    </script>
</body>

</html>