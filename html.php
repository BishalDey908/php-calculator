<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="number" name="num01" id="num01" placeholder="1st value">
    <select name="operator" id="">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select>

    <input type="number" name="num02" id="num02" placeholder="2nd value">

    <button>culculator</button>
</form>

<?php 
if($_SERVER['REQUEST_METHOD']== "POST"){
    $error = false;
    if(empty($_POST["num01"]) || empty($_POST["num02"]) || empty($_POST["operator"])){
        echo "<p>Please fill all the fields</p>";
        $error = true;
    }
    if(!is_numeric($_POST["num01"]) || !is_numeric($_POST["num01"])){
        echo "<p>Please enter a valid number</p>";
        $error = true;
    }
    
    $num1 = htmlspecialchars($_POST["num01"]);
    $num2 = htmlspecialchars($_POST["num02"]);
    $operator = htmlspecialchars($_POST["operator"]);
    
    if(!$error){
        $value = 0;
        switch ($operator){
            case "add":
            $value = $num1 + $num2;
            break;

            case "sub":
            $value = $num1 - $num2;
            break;

            case "mul":
            $value = $num1 * $num3;
            break;

            case "div":
            $value = $num1 / $num4;
            break;

            default:
            echo "<p>Something went wrong</p>";
        }
        echo "<p>The Ans is $value</p>";
    }
}



?>
</body>
</html>