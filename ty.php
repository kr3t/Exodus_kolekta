<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Kolekta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .mont{font-family: 'Montserrat', sans-serif;
}    
    </style>   
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
     

    
</head>
<body>
   <div class="onediv"><img src="logo.png" width="100%"></div>

<?php
$ile = $_GET['status'];    
if ($ile == "OK"){
?><div class="ty_text">
<span class="thanks mont">Dziękujemy za twoją chojność!</span>
    </div>   
<?php    
}
else{
?>

<div class="ty_text">
<span class="onemore mont">Coś poszło nie tak... spróbuj jeszcze raz</span>
    </div>  
   
<?php    
}    
    
?> 
<div class="ty_text">   
<span>Za chwile przenieśmiemy Ciebie na stronę kolekty.</span>
</div>

<meta http-equiv="refresh" content="8; url=index.html">
</body>
</html>