<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$data['judul'];?></title>
  <link rel="stylesheet" href="<?= BASE_URL;?>/css/custom.css">
  <link rel="stylesheet" href="<?=BASE_URL;?>/css/bootstrap.min.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary border">
    <div class="container-fluid">
      <a class="navbar-brand py-2 ms-5 fw-semibold text-brand" href="<?=BASE_URL;?>"><b class="text-primary">S</b>report</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-5" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link nav-text active me-2" aria-current="page" href="<?=BASE_URL;?>">Home</a>
          <a class="nav-link nav-text me-2" href="<?=BASE_URL;?>About">About</a>
          <a class="nav-link nav-text me-2" href="#">Complaint</a>
        </div>
      </div>
    </div>
  </nav>