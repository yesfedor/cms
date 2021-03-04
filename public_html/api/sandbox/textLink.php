<?php
function textLink($text) {
    // The Regular Expression filter
    $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
    // Check if there is a url in the text
    if(preg_match($reg_exUrl, $text, $url)) {
    // make the urls hyper links
        return preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank" rel="noopener noreferrer">'.$url[0].'</a>', $text);
    
    } else {
    // if no urls in the text just return the text
    return $text;
    
    }
}

$result = textLink($_POST['text']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>textLink</title>
    </head>
    <body>
        <main>
            <center>
                <form method="POST" action="https://tester.iny.su/api.php?_action=textLink&v=sandbox">
                    <input name="text" type="text">
                    <input type="submit" value="Go">
                </form>
            </center>
            <center><?= $result ? $result : '' ?></center>
        </main>
    </body>
</html>