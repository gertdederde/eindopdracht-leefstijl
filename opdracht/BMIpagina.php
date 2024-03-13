<!DOCTYPE html>
<html>
<head>
    <title>BMI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form name="bmi_berekenen" method="post" action="berekening.php">
        Wat is jouw BMI? <br/> 
        <input type="text" name="gewicht" placeholder="Gewicht in kg" /><br/>
        <input type="text" name="lengte" placeholder="Lengte in meter" /><br/>
        <input type="radio" name="geslacht" value="man"> Man
        <input type="radio" name="geslacht" value="vrouw"> Vrouw<br/>
        <input type="submit" name="bereken" value="Bereken" /><br/>
    </form>
</body>
</html>

