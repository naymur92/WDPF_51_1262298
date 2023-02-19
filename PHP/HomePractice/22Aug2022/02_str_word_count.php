<?php
    $summary = <<< summary
    The most up to date source for PHP documentation is the PHP manual.
    It contins many examples and user contributed code and comments.
    It is available on the main PHP web site
    <a href="http://www.php.net">PHP's</a>.
    summary;

    $words = str_word_count($summary);
    printf("Total words in summary: %s<br>", $words);   // Count number of words.

    $str = "My name is Naymur Rahman.";

    $output = str_word_count($str, 1);  // Return numerical indexed array of the words.
    echo "<pre>";
    print_r($output);

    $output1 = str_word_count($str, 2); // Return associative array with position of the words.
    print_r($output1);
?>