

    <!DOCTYPE html>
    <html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
   
</head>
<body>
    <header>
        <img src="/gambar/mobil.webp" alt="" width="100%" height="200px" >
    </header>
    <div class="navbar">
    <a href="<?= base_url('/');?>" class="active">Home</a>
    <a href="<?= base_url('/artikel');?>">Artikel</a>
    <a href="<?= base_url('/about');?>">About</a>
    <a href="<?= base_url('/contact');?>">Kontak</a>
    <a href="<?= base_url('Artikel/admin_index');?>" class="loginadmin">Admin</a>
    </div>


