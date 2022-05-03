Name parameter missing
<!DOCTYPE html>
<html>
<head>
    <title>Piyusha Barapatre 1da6a3b3</title>
</head>
<body style="font-family: Helvetica">
    <h1>Rock Paper Scissors</h1>
    <p>Welcome: <?php echo htmlentities($_GET["name"])?></p>
    <form method="post">
        <select name="human">
            <option value="-1">Select</option>
            <option value="0">Rock</option>
            <option value="1">Paper</option>
            <option value="2">Scissors</option>
            <option value="3">Test</option>
        </select>
        <input type="submit" name="play" value="Play">
        <input type="submit" name="logout" value="Logout">
    </form>
<?php
    echo "<pre>";
    $names = array('0' => "Rock", '1' => "Paper", '2' => "Scissors");
if (isset($_POST["human"]) && $_POST["human"] != -1 && is_numeric($_POST["human"])) {
    if ($_POST["human"] != 3) {
        $h = $_POST['human'];
        $c = rand(0, 2);
        echo "Your Play=". $names[$h] .
        " Computer Play=" . $names[$c] .
        " Result=" . check($c, $h);
    } else {
        for ($c=0; $c<3; $c++) {
            for ($h=0; $h<3; $h++) {
                $r = check($c, $h);
                print "Human=$names[$h] Computer=$names[$c] Result=$r\n";
            }

        }
    }
} else {
        print "Please select a strategy and press Play.";
}
    echo "</pre>";
?>
</body>
</html>
