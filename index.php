<?php require_once 'includes/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php head(); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-right">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">

    <div class="card card-block">
        <p class="card-text">Flexbox is great for aligning things. By adding one of the classes below to any <b>row</b> we can define the position of columns inside it. Regular offsets work as well.</p>
    </div>
        
    <div class="row justify-content-start">
        <div class="col-6 ">justify-content-start</div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">justify-content-center</div>
    </div>
    <div class="row justify-content-end">
        <div class="col-6">justify-content-end</div>
    </div>
    <div class="row justify-content-around">
        <div class="col-4">justify-content-around</div>        
        <div class="col-4">justify-content-around</div>
    </div>
    <div class="row justify-content-between">
        <div class="col-4">justify-content-between</div>
        <div class="col-4">justify-content-between</div>
    </div>
    <div class="row justify-content-end justify-content-sm-start">
        <div class="col-8">Responsive alignment: <br> justify-content-end <br> justify-content-sm-start</div>
    </div>

</div>
    </nav>


    <?php foot(); ?>
</body>

</html>
