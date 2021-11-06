<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>PHP Loops</title>
        <link href="./css/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h2><code>while</code> Loop</h2>
        <p>
            The <code>while</code> loop will execute <em>while</em> something is true.  The check happens at the start of the loop, <em>before</em> the loop iterates even once.  Then the expression is checked at the end of each iteration.
        </p>
        <pre>while (<em>expression</em>) {
    // loop statements
}</pre>
        <h4>Example</h4>
        <p>
            Assume we want to list the even numbers from 0 to 20 in a table.  The loop could look like this.
        </p>
        <pre>$maxNumber = 20;
$currentNumber = 0;

while ($currentNumber <= $maxNumber) {
    // a number is even if it can be divided by 2 evenly
    if ($currentNumber % 2 == 0) {

        // output the number
        print "&lt;tr&gt;&lt;td&gt;<strong>$currentNumber</strong>&lt;/td&gt;&lt;/tr&gt;";
    }

    $currentNumber++;
}</pre>

        <table>
            <tr>
                <th>Even Number</th>
            </tr>
            <?php
                $maxNumber = 20;
                $currentNumber = 0;
                
                while ($currentNumber <= $maxNumber) {
                    // a number is even if it can be divided by 2 evenly
                    if ($currentNumber % 2 == 0) {
                
                        // output the number
                        print "<tr><td>$currentNumber</td></tr>";
                    }
                
                    $currentNumber++;
                }
            ?>
        </table>

        <h2><code>do-while</code> Loop</h2>
        <p>
            The <code>do-while</code> loop will execute <em>while</em> something is true.  The check happens  at the end of the loop, <em>after</em> the loop iterates once.  Then the expression is checked at the end of each iteration.
        </p>
        <pre>do {
    // loop statements
} while (<em>expression</em>)</pre>
        <h4>Example</h4>
        <p>
            Assume we want to list the even numbers from 0 to 20 in a table.  The loop could look like this.
        </p>
        <pre>$maxNumber = 20;
$currentNumber = 0;

do {
    // a number is even if it can be divided by 2 evenly
    if ($currentNumber % 2 == 0) {

        // output the number
        print "&lt;tr&gt;&lt;td&gt;<strong>$currentNumber</strong>&lt;/td&gt;&lt;/tr&gt;";
    }

    $currentNumber++;
} while ($currentNumber <= $maxNumber)</pre>

        <table>
            <tr>
                <th>Even Number</th>
            </tr>
            <?php
                $currentNumber = 0;
                
                do {
                    // a number is even if it can be divided by 2 evenly
                    if ($currentNumber % 2 == 0) {
                
                        // output the number
                        print "<tr><td>$currentNumber</td></tr>";
                    }
                
                    $currentNumber++;
                } while ($currentNumber <= $maxNumber)
            ?>
        </table>

        <h2><code>for</code> Loop</h2>
        <p>
            The <code>for</code> loop executes a predefined number of times.  The loop requires a start point, a condition to check, and the increase for each iteration to be defined.  The condition is checked <em>before</em> the loop starts.  In <code>while</code> and <code>do-while</code> loops we do not know how many times the loop will iterate, but with a <code>for</code> loop we know exactly how many 
            times.
        </p>
        <pre>for (<em>expression1</em>; <em>expression2</em>; <em>expression3</em>) {
    // loop statements
}</pre>
        <h4>Example</h4>
        <p>
            Assume we want to list the even numbers from 0 to 20 in a table.  The loop could look like this.
        </p>
        <pre>for ($i = 0; $i <= $maxNumber; $i++) {
    // a number is even if it can be divided by 2 evenly
    if ($i % 2 == 0) {

        // output the number
        print "&lt;tr&gt;&lt;td&gt;<strong>$i</strong>&lt;/td&gt;&lt;/tr&gt;";
    }
}</pre>
        <p>
            The <code>$currentNumber</code> and <code>$maxNumber</code> are not needed because we have defined 
            the counter in the loop itself.
        </p>

        <table>
            <tr>
                <th>Even Number</th>
            </tr>
                <?php
                    for ($i = 0; $i <= $maxNumber; $i++) {
                        // a number is even if it can be divided by 2 evenly
                        if ($i % 2 == 0) {
                    
                            // output the number
                            print "<tr><td>$i</td></tr>";
                        }
                    }
                ?>
            </table>

    </body>
</html>