<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>PHP Functions</title>

        <link href="./css/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h2>PHP Functions</h2>
        <p>
            PHP functions are very similar to JavaScript functions.  They are defined the same way and use parameters in the same way as well.  The syntax for a function is shown below.
        </p>      
        <pre>function <strong><em>function_name</em></strong> ([<em>parameter</em>]) {
    // function statements
}</pre>

        <h4>Example</h4>
        <p>
            Define a function which accepts a number as a parameter and return <code>true</code> if that number is even.  Use this function to print the even numbers from 0 to 20.
        </p>

        <table>
            <tr>
                <th>Number</th>
                <th>Is Even? By Value</th>
            </tr>
            <?php
            for($i = 0; $i <= 20; $i++) {
                $isEvenString = "";

                if (isEven($i) == true) {
                    $isEvenString = "YES";
                } else {
                    $isEvenString = "NO";
                }

                print "<tr><td>$i</td><td>$isEvenString</td></tr>";
            }
            ?>
        </table>

        <table>
            <tr>
                <th>Number</th>
                <th>Is Even? By Reference</th>
            </tr>
            <?php
            for($i = 0; $i <= 20; $i++) {
                $evenOrNot = false;
                $isEvenString = "";

                isEvenReference($evenOrNot, $i);

                if ($evenOrNot == true) {
                    $isEvenString = "YES";
                } else {
                    $isEvenString = "NO";
                }

                print "<tr><td>$i</td><td>$isEvenString</td></tr>";
            }
            ?>
        </table>
    </body>
</html>

<?php 
function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    }

    return false;
}

function isEvenReference(&$isEven, $number){
    if ($number % 2 == 0) {
        $isEven = true;
    } else {
        $isEven = false;
    }
}
?>