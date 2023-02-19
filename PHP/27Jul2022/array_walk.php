<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Array_walk function</h1>
    <form action="" method="post">
        <p>
            Provide up to six keywords that you believe best describe the state in
            which you live:
        </p>
        <p>Keyword 1:<br />
            <input type="text" name="keyword[]" size="20" maxlength="20" value="" />
        </p>
        <p>Keyword 2:<br />
            <input type="text" name="keyword[]" size="20" maxlength="20" value="" />
        </p>
        <p>Keyword 3:<br />
            <input type="text" name="keyword[]" size="20" maxlength="20" value="" />
        </p>
        <p>Keyword 4:<br />
            <input type="text" name="keyword[]" size="20" maxlength="20" value="" />
        </p>
        <p><input type="submit" value="Submit!"></p>
    </form>

    <?php
        // echo "<pre>";
        function sanitize_data(&$value, $key)
            {
            //strip_tag() function remove html tags from string
            $value = strip_tags($value);
            echo "{$key} is the key, and {$value} is the value.<br>";
        }
        
        //$_POST['keyword'] is an array
        array_walk($_POST['keyword'], "sanitize_data");
        // print_r($_POST['keyword']);
    ?>
</body>

</html>