<?php
if(isset($_POST["query"])){
$images = scandir("../images/");
$result = "";
foreach($images as $value){

if($value == "." || $value == ".."){

}else{
  $size = filesize("../images/" . $value) / 8 / 1024;
  $result = " <div class='container-fluid'>
  <div class='row' id='userCard'>
  <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
<img src='../images/$value' class='img-fluid'/>

</div>

  <div class='col-xs-12 col-sm-12 col-md-8 col-lg-8'>
  <h3>$value</h3>
  <h5 style='color:#C0C0C0'>$size КБайт</h5>

  <p align='right'><a class='waves-effect waves-light btn' style='background:white; color:red;' onclick='deleteBut(this, `$value`)' >Удалить</a></p>



</div>
  </div>
  <hr style='width:100%; color:#DCDCDC; height:2px;'>
  </div>" . $result;
}

}
 echo $result;
}
?>
