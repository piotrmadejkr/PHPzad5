
<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>
<body>
<form method="post">
<input type="text" name="imie"  placeholder="podaj imię">
<br>
podaj kolor<br><select name="kolor"> 
<br>
    <option value="red">czerwony</option>
    <option value="blue">niebieski</option>
    <option value="orange">pomarańczowy</option>
</select>



<br>

Podaj rodzaj rog 
<br>
<input type="radio" name="rodzaj" value="kwadratowy"> kwadratowy
<br>
<input type="radio" name="rodzaj" value="okrogly"> okrągły
<br>
<input type="radio" name="rodzaj" value="bardziej"> bardziej okrągły
<br>
<input type="submit" value="wyślij!">
</form>



<div class="wizytowka <?php echo $_POST['kolor'];  ?> <?php echo $_POST['rodzaj'];  ?>">
<h1 class="name"> <?php echo $_POST['imie']; ?></h1>


</div>



<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>



  

