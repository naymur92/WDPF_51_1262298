<?php

    $summary = <<< summary
    Many of the functions introduced in this chapter will be among the most commonly used within your PHP applications, as they form the crux of the language's string-manipulation capabilities.
    The next chapter examines another set of commonly used functions: those devoted to working with the file and operating system.
    <a href="http://www.php.net">PHP's</a>.
    summary;

    $words = str_word_count($summary, 2);
    $frequency = array_count_values($words);
    // arsort($frequency);

    echo "<pre>";
    // print_r($words);
    print_r($frequency);

?>