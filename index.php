<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>tamrin</title>
    
</head>
<body>
 

    <form method="GET">
  <input class="margin" type="number" name="num1">  
  <input class="margin" type="number" name="num2">  
  <div class="ssss">
    <label>+</label>
    <input type="radio" name="radio" value="+"> 
    <label>-</label>
    <input type="radio" name="radio" value="-"> 
    <label>*</label>
    <input type="radio" name="radio" value="*"> 
    <label>/</label>
    <input type="radio" name="radio" value="/">
  </div>
  <input id="halo" type="submit" value="=">
  <!-- <span id="loader" style="display: none; font-size: 20px;">...</span> -->
</form>

<!-- <script>
function showLoader() {
    var loader = document.getElementById("loader");
    loader.style.display = "inline";
    document.getElementById("halo").disabled = true;
    setTimeout(function() {
        loader.style.display = "none";
        document.getElementById("halo").disabled = false;
    }, 3000);
}
</script> -->

 
<?php
 
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['radio'];

    if ($operator == '+') {
    $result = $num1 + $num2;
    } elseif ($operator == '-') {
    $result = $num1 - $num2;
    } elseif ($operator == '*') {
    $result = $num1 * $num2;
    } elseif ($operator == '/') {
    if ($num2 != 0) {
        $result = $num1 / $num2;
    }
}

echo '<div class="javab">' . $result . '</div>';
   ?>


 

</body>
</html>