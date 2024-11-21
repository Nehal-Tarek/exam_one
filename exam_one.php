<?php
for($i=1;$i<=8;$i++){
    for($j=1;$j<=8;$j++){
        if(($i+$j)%2==0){
            echo " black ";
        }else{
            echo " white ";
        }
    }
    echo "<br>";
}
echo "<hr>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = $i; $j < 5; $j++) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>"; 
}
for ($i = 5 - 1; $i >= 1; $i--) {
    for ($j = 5; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";} 
echo "<hr>";
for($n=1;$n<=5;$n++){
    for($m=1;$m<=5-$n;$m++){
        echo " ";
    }
    for($k=1;$k<=$n;$k++){
        echo " * ";
    }
    echo "<br>";
}
for($n=1;$n<=5;$n++){
    for($j=5;$j>=1;$j--){
        echo " ";
    }
    for($k=5;$k>=$n;$k--){
        echo " * ";
    }
    echo "<br>";}
echo "<hr>";
for ($i = 1; $i <= 5; $i += 2) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>"; }
for ($i = 3; $i >= 1; $i -= 2) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>"; 
}
echo "<hr>";
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
function Asc(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}
function Desc(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}
Asc($array);
echo "Sorted Array in ASC: ";
print_r($array);
echo "<br>";
Desc($array);
echo "Sorted Array in DESC: ";
print_r($array);
echo "<br>";
echo "<hr>";
$numbers = [2, 4, 3, 1, 6, 7, 5, 8, 10, 9];
$sum = 0;
$count = count($numbers);
for ($i = 0; $i < $count; $i++) {
    $sum += $numbers[$i]; 
}
if ($count > 0) {
    $average = $sum / $count; 
} else {
    $average = 0; 
}
echo "The average of the numbers array is: " . $average;
echo "<hr>";
$all_num = [2, 4, 3, 1, 6, 7, 5, 8, 10, 9];
$oddNumbers = [];
for ($i = 0; $i < count($all_num); $i++) {
 
    if ($all_num[$i] % 2 !== 0) {
        $oddNumbers[] = $all_num[$i];
    }
}
echo "Array after deleting even numbers: ";
print_r($oddNumbers);
echo "<hr>";
$num = [10, 30, 20];
$max = $num[0];
if ($num[1] > $max) {
    $max = $num[1]; 
}
if ($num[2] > $max) {
    $max = $num[2]; 
}
echo "The maximum number is: " . $max;
echo "<hr>";
$sampleDate = '2012-12-21';
$newTime = strtotime("+1 month", strtotime($sampleDate));
$newDate = date('Y-m-d', $newTime);
echo "Sample Date: " . $sampleDate . "<br>";
echo "Date after incrementing by one month: " . $newDate;
echo "<hr>";
$currentMonth = strtotime('first day of this month');
$previousMonth = strtotime('-1 month', $currentMonth);
$MonthNumber = date('m', $previousMonth);
echo "The number of the month before the current month is: " . $MonthNumber;
echo "<hr>";
$massage = "Hello, welcome to the world of PHP!";
$found= "welcome";
if (strpos($massage, $found) !== false) {
    echo "The string '$massage' contains the string '$found'.";
} else {
    echo "The string '$massage' does not contain the string '$found'.";
}
echo "<hr>";
function isPrime($number) {
    if ($number < 2) {
        return false; 
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }

    return true; 
}
$number = 29; 

if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
echo "<hr>";
if (isset($_POST['color'])) {
    setcookie('bgcolor', $_POST['color'], time() + (30 * 24 * 60 * 60), "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
$bgColor = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : '#ffffff'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
    <style>
        body {
            background-color: <?php echo $bgColor; ?>;
            color: #333; 
            font-family: Arial, sans-serif; 
            padding: 20px;
        }
    </style>
</head>
<body>

<h1>Change Background Color</h1>
<form method="post">
    <label for="color">Choose a background color:</label>
    <select name="color" id="color">
        <option value="#ffffff" <?php if ($bgColor == '#ffffff') echo 'selected'; ?>>White</option>
        <option value="#ffcccc" <?php if ($bgColor == '#ffcccc') echo 'selected'; ?>>Light Red</option>
        <option value="#ccffcc" <?php if ($bgColor == '#ccffcc') echo 'selected'; ?>>Light Green</option>
        <option value="#ccccff" <?php if ($bgColor == '#ccccff') echo 'selected'; ?>>Light Blue</option>
        <option value="#ffffcc" <?php if ($bgColor == '#ffffcc') echo 'selected'; ?>>Light Yellow</option>
        <option value="#ffccff" <?php if ($bgColor == '#ffccff') echo 'selected'; ?>>Light Pink</option>
    </select>
    <button type="submit">Change Color</button>
</form>

</body>
</html>
   