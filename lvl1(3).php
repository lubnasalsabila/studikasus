<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Bilangan 1 :</label>
        <input type="number" name="1"><br>
        <label for="">Bilangan 2 :</label>
        <input type="number" name="2"><br>
        <label for="">Bilangan 3 :</label>
        <input type="number" name="3"><br>
        <label for="">Bilangan 4 :</label>
        <input type="number" name="4"><br>
        <button type="submit" name="submit">kirim</button>

    </form>
</body>
</html>
<?php
if (isset($_POST["submit"])){
$bilangan1 = $_POST["1"];
$bilangan2 = $_POST["2"];
$bilangan3 = $_POST["3"];
$bilangan4 = $_POST["4"];

$terbesar = $bilangan1;
if ($bilangan2 > $terbesar) {
    $terbesar = $bilangan2;
}
if ($bilangan3 > $terbesar) {
    $terbesar = $bilangan3;
}
if ($bilangan4 > $terbesar) {
    $terbesar = $bilangan4;
}

echo "Bilangan terbesar adalah: " . $terbesar;
}
?>