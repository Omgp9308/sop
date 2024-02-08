<!DOCTYPE html>
<html>
<head>
    <title>voting eligibility</title>
</head>
<body>
    <center>
        <h1>
            Check If You Are Eligible To Vote
        </h1>
        <form method="$_get" action="age.php">
            <label for="tb1">Please Enter Your Correct Age</label><br><br>
            <input type="number" name="age" id="age" min="1" max="100"><br><br>
            <input type="submit" name="submit">
        </form>
    </center>
    <?php 
    if (isset($_GET['submit'])) {
        $age=$_GET['age'];
        if ($age<18) {
         echo ("<center> <H1>You Are Not Eligible To Vote</h1></center>");
        }
        else {
         echo ("<center> <H1>You Are Eligible To Vote</h1></center>");
        }
    }
     ?>
</body>
</html>