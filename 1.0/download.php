<?
if($_FILES && $_FILES["image"]["error"] == UPLOAD_ERR_OK){
  $name = $_FILES["image"]["name"];
if($_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/jpg" || $_FILES["image"]["type"] == "image/png")
{


//  move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $name);
    move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $name);
  //  move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $name);
  echo "<script type='text/javascript'>alert('Изображение успешно загруженно');</script>";
}else{
    echo "<script type='text/javascript'>alert('Можно загружать только изображения');</script>";
}
}


?>


<html>
<head>

  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script
    src="http://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <link rel="stylesheet" href="style/style.css">
  <script>
  function beforeCheck(){

  }
  function successCheck(data){
    if(data == "Error"){
      document.location.href="enter.html";
    }else{
  $("#main").show(500);
    }
  }
  $(document).ready(function(){

    $("#main").hide();
    $("#leftMenu").load("menu.html");
    $.ajax({
      url:"Controllers/autoController/CheckAuto.php",
      type:"POST",
      dataType:"html",
      data:({query:"CheckPass"}),
      beforeSend: beforeCheck,
      success:successCheck
    });
    $("#menu").load("menu.html");
});
  </script>
</head>
<body>

  <div class="container-fluid" style="margin:0px; height:98%;padding:0px;">
  <div class="row" >


      <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3" id="leftMenu">
  </div>

    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-9" id="main">

      <h2>Загрузить файл</h2>
      <form method="post" enctype="multipart/form-data">
      Выбирете файл<input type="file" name="image"/>

      <input type="submit" name="down" />

    </div>

  </div>

  </div>
  <div class="container-fluid" id="footer">
    <a href="#"><font style="font-size:70%">Условия использования</font></a>
  </div>

</body>
</html>
