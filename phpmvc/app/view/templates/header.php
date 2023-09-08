<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Halaman <?= $data['judul']?></title>
    <style>
      nav {
        background: blue;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  
  <div class="collapse navbar-collapse" id="navbarNav" style="
  margin-left:8%;
  ">
  <a class="navbar-brand" href="<?= BASE_URL; ?>/home" style="
  margin-bottom: 2px;
  ">AbellaMvc</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL; ?>/guru">Data Guru</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL; ?>/jurusan">Kompetensi Keahlian</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL; ?>/user/profile">About</a>
      </li>
      
    </ul>
  </div>
</nav>