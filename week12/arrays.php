<?php
    // $someNewArray = array();
    $someNewArray[] = "foo";
    $someNewArray[] = "bar";
    $someNewArray[20] = "something else";
    $someNewArray[] = "yet something else";
    $someNewArray["asdf"] = "asdf";

    $anotherArray = array(
        "first" => "foo",
        "second" => "bar",
        "third" => "hello",
        1000.1 => 1, // Gets over-written below because they're similar
        1000 => 2
    );

    $someNewArrayKeys = array_keys($someNewArray);
    $someNewArrayValues = array_values($someNewArray);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>PHP Arrays</title>
        <link href="./css/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>PHP Arrays</h1>
        <h3><code>$someNewArray</code></h3>
        <pre><?php var_dump($someNewArray); ?></pre>
        <p>
            <code>$someNewArray</code> 3rd element is
            <code><?php print $someNewArray[20]; ?></code>
        </p>

        <h3><code>$anotherArray</code></h3>
        <pre><?php var_dump($anotherArray); ?></pre>
        <p>
            <code>$anotherArray</code> 3rd element is
            <code><?php print $anotherArray["third"]; ?></code>
        </p>

        <h3><code>$someNewArrayKeys</code></h3>
        <pre><?php var_dump($someNewArrayKeys); ?></pre>

        <h3><code>$someNewArrayValues</code></h3>
        <pre><?php var_dump($someNewArrayValues); ?></pre>

        <h3><code>$anotherArray</code></h3>
        <table>
            <tr>
                <th>Values</th>
            </tr>
            <?php
            foreach($anotherArray as $arrayElement) {
                print "<tr><td>$arrayElement</td></tr>";
            }
            ?>
        </table>

        <h3><code>$anotherArray with key</code></h3>
        <table>
            <tr>
                <th>Keys</th>
                <th>Values</th>
            </tr>
            <?php
            foreach($anotherArray as $arrayKey => $arrayElement) {
                print "<tr><td>$arrayKey</td><td>$arrayElement</td></tr>";
            }
            ?>
        </table>
    </body>
</html>