
<html>
<head>
<title>Kelvin Converter</title>
</head>
<body style = "background-color:skyblue;">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="radio" name="name" value="celc" >Celsius
<input type="radio" name="name" value="farh">Fahrenheit
<input type="radio" name="name" value="rank">Rankine
<br><br>
Enter the tempearture: &nbsp; <input type="text" name="temp" required>
<br><br>
<input type="submit" value="Submit">
</form>
</body>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
        $temperature = $_POST["temp"];
        $button= $_POST["name"];
        
        
        if($button=="celc")
            $kelvin = $temperature + 273.15;
        
        else if ($button == "farh")
            
            $kelvin = ($temperature + 459.67)*(5/9);
        
        else
            
            $kelvin = ($temperature)*(5/9);
        
        $message =round($kelvin,2);
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    
    ?>
</html>
