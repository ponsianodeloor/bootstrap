<!DOCTYPE html>
<html lang="es" dir="ltr">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <style media="screen">
   body{
    background: #f0f3f5;
    color: #fff;
   }

   .header{
    background: #9aca40;
    padding: 20px;
    margin-bottom: 20px;
   }
   .main{
    margin-bottom: 20px;
    background: #fff;
    color: #424242;
    padding: 20px 0;
   }
   .aside{
    background-color: #cfcfcf;
    color:#05bfcf;
    padding: 60px 0;
   }
   .productos{
    background-color: #00c2f6;
    margin-bottom: 20px;
    padding: 20px;
    color: white
   }
   .footer{
    background-color: #031318;
    color:white;
   }
  </style>
  <title>Columnas Anidadas</title>
 </head>
 <body>
  <div class="container">
   <div class="row">
    <div class="col-12 header">
     <h1> Header </h1>
     <p>12 columnas</p>
    </div>
   </div>

    <div class="row">
     <div class="col-8 main">
      <h1>Main</h1>
      <p>8 columnas</p>
      <p>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet pharetra libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In blandit leo metus, vel feugiat velit fringilla vitae. Aliquam metus neque, congue nec commodo sit amet, malesuada et sapien. Donec ullamcorper, turpis sit amet euismod rutrum, dui mi laoreet turpis, nec elementum magna magna vitae turpis. Morbi lobortis nec magna in placerat. Mauris eleifend vitae leo eget dignissim. Nunc laoreet at nulla eu aliquet. Aliquam vel consequat ligula, sed euismod tellus. In lobortis convallis nisl at eleifend.
      </p>
     </div>
     <div class="col-4 aside align-self-center">
      <h3>ASIDE</h3>
      <p>4 columnas</p>
     </div>
    </div>

    <div class="row justify-content-between">
     <div class="col-3 productos">
      <p>3 columnas</p>
      <p>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet pharetra libero.
      </p>
     </div>
     <div class="col-3 productos">
      <p>3 columnas</p>
      <p>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet pharetra libero.
      </p>
     </div>
     <div class="col-3 productos">
      <p>3 columnas</p>
      <p>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet pharetra libero.
      </p>
     </div>
    </div>

    <div class="row">
     <div class="col-12 footer">
      <h4>FOOTER</h4>
      <p>12 columnas</p>
     </div>
    </div>


  </div>
  <script type="text/javascript" src="../js/jquery-3.5.0.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
 </body>
</html>
