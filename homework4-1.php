<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = "";
$name = "";

?>

<h2>Homework4-1</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  n : <input type="text" name="i" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <input type="submit" name="submit" value="submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["i"])) 
        {
       echo "Number is required";
        } 
        else 
        {
            $n = $_POST["i"];
    $sum = 0;
    $mul = 1;
    
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
        $mul *= $i;
    }

    echo("입력한 숫자 : " .$n. "<br>");

    echo("합계 : ");
    for ($i = 1; $i <= $n; $i++) {
        echo($i);
        if ($i < $n) {
            echo(" + ");
        }
    }
    echo(" = " . $sum);

    echo("<br>");

    echo("팩토리얼 : ");
    for ($i = 1; $i <= $n; $i++) {
        echo($i);
        if ($i < $n) {
            echo(" * ");
        }
    }
    echo(" = " . $mul);
        } 
    }

?>

</body>
</html>