<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generate QR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<div  class="container mt-4">
<?php
if(isset($_POST['qr_generate'])){
  $url = $_POST['url'];
?>
    <div id="qrcode"></div>
    <script type="text/javascript">
    new QRCode(document.getElementById("qrcode"), "<?=$url?>");
    </script>
<?php
}else{
  ?>
 <form method='POST' action="">
    <div class="form-group">
      <label>URL</label>
      <input type="text" name="url" class="form-control">
    </div>
    <div class="form-group mt-4">
      <button type="submit" name="qr_generate" class="btn btn-info">Get</button>
    </div>
</form>
<?php
}
?>
</div>
<!-- <div id="qrcode-2"></div> -->
<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode-2"), {
	text: "https://webisora.com",
	width: 128,
	height: 128,
	colorDark : "#5868bf",
	colorLight : "#ffffff",
	correctLevel : QRCode.CorrectLevel.H
});
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" ></script>
<script src="html5-qrcode.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>