<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Giphy Final</title>
    </head>
    <body>
        <h1>Mirror Giphy ACSG 540</h1>
        <?php
        // This example code is mostly from the Giphy PHP Client: https://github.com/Giphy/giphy-php-client
        require_once(__DIR__ . '/vendor/giphy-php-client/autoload.php');

        $api_instance = new GPH\Api\DefaultApi();
        $api_key = "tJfJK5i27FhCcC2XVmRPTy6GWZiJIP69"; // string | Giphy API Key.
        $q = "cheeseburgers"; // string | Search query term or prhase.
        $limit = 2; // int | The maximum number of records to return.
        $offset = 0; // int | An optional results offset. Defaults to 0.
        $rating = "g"; // string | Filters results by specified rating.
        $lang = "en"; // string | Specify default country for regional content; use a 2-letter ISO 639-1 country code. See list of supported languages <a href = \"../language-support\">here</a>.
        $fmt = "json"; // string | Used to indicate the expected response format. Default is Json.

        try {
            $result = $api_instance->gifsSearchGet($api_key, $q, $limit, $offset, $rating, $lang, $fmt);
            //print_r($result);
            // print '<img src=' . $result["data"][0]["url"] . ' />'; Not going to work!

            // See what options are available here: https://github.com/Giphy/giphy-php-client/blob/master/docs/Model/Gif.md
            // If we really want to serve the images ourselves we have to first download the image onto the server and then serve it
            //$image = $result["data"][0]["url"];
            //$imageData = file_get_contents($image);
            //echo '<img src="'.$imageData.'">';

            // Recommended approach
            echo '<iframe src="'.$result["data"][0]["embed_url"].'" width="480" height="300" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';
            echo '<iframe src="'.$result["data"][1]["embed_url"].'" width="480" height="300" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';
        } catch (Exception $e) {
            echo 'Exception when calling DefaultApi->gifsSearchGet: ', $e->getMessage(), PHP_EOL;
        }
?>
    </body>
</html>