<!DOCTYPE html>
<html >
<head>
    <title>
        vowels php
    </title>
</head>
<body>
    <center>
        <h1>Count The Number Of vowels In Given Words</h1>
        <form action="vouwels.php" method="get">
            <label for="tb1">Please Enter The Words</label>
            <input type="text" name="tb1" id="tb1">
            <input type="submit" value="submit" name="submit">
        </form>
    </center>
    <?php
   if (isset($_GET['submit'])) {
    $word=strtolower($_GET["tb1"]);
    $vowels=array("a","e","i","o","u");
    $c=0;
    for ($i=0; $i <strlen($word) ; $i++) {
        if (in_array($word[$i],$vowels)) {
            $c++;
        }
    }
    echo ($c);
   }
    ?>
</body>
</html>