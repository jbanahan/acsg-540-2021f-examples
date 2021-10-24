<?php
    $date = date("l, F j H:i:s");
    $birth = 1989;
    $currentYear = 2021;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>PHP Example</title>
<head>
<body>
    <?php $age = $currentYear - $birth; ?>
    <p>
    <?php
        $ageGroup = "";
        if($age <= 30) {
            $ageGroup = "Young";
        } elseif ($age > 30 && $age <= 50) {
            $ageGroup = "Middle age";
        } else {
            $ageGroup = "Senior";
        }
        $name = "Jason";
        print "Hello <em>$name</em> from PHP! The date-time is: $date. You are $age years old and part of the $ageGroup group.";
    ?>
    </p>
</body>
</html>