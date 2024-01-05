<html>
  <head>
    <title>Home</title>
    <!-- Bootstrap css v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fontawesome 6.5.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Jquery v3 -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand h6" href="extend.php"><b>Navbar</b></a>
      </div>
    </nav>
    <section class="mt-2">
      <div class="container">
        <div class="row">
          <h3>Ngetik</h3>
          <p>Coba mengetik</p>
        </div>
        <a href="javascript:void(0)" class="btn btn-lg btn-primary" onclick="tombol1()"><i class="fa fa-download"></i> Tombol</a> 
        <a href="javascript:void(0)" class="btn btn-lg btn-outline-primary" onclick="tombol2()"><i class="fa-solid fa-download"></i> Reset</a>
      </div>
    </section>
  </body>
</html>
<!-- Bootstrap js v5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
  function tombol1(){
    alert('tomol 1');
  }

  function tombol2(){
    alert('tomol 2');
  }
</script>
<?php ?>