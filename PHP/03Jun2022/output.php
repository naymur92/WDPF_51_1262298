<?php
    echo "Output using echo.";
    echo "<br>";

    echo "<h1>Pass multiple variable to echo() statement</h1>";
    $title = "<h2>Outputting content</h2>";
    $body = "<p>Content of the paragraph....</p>";

    echo $title, $body;
    

    echo "{$title} {$body} <p>Additional Content</p>";
?>

<?php
    print "<h1>Importance of brace</h1>";
    $num = 5;

    // echo "$num_abc";
    echo "{$num}_abc";
?>