<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
 
<div class="form">
    <form>
        <input type="text" name="num1" placeholder="Enter Number">
        <input type="text" name="num2" placeholder="Enter Number">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button class="submit" type="submit" name="submit" value="submit">Calculate</button>
    </form>
</div>
<p class="form1">Answer: </p>


<div class="form1">
    <?php
        if (isset($_GET["submit"])) {
            $result1 = $_GET["num1"];
            $result2 = $_GET["num2"];
            $operator = $_GET["operator"];

            switch ($operator) {
                case "None":
                    echo "You must enter numbers";
                break;
                case "Add":
                    echo $result1 + $result2;
                break;
                case "Subtract":
                    echo $result1 - $result2;
                break;
                case "Multiply":
                    echo $result1 * $result2;
                break;
                case "Divide":
                    echo $result1 / $result2;
                break;
            }
        }
    ?>
</div>


</body>
</html>