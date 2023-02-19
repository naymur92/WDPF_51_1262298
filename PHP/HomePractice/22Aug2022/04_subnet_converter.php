<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subnet Converter</title>
</head>

<body>
    <form action="" method="post">
        <p>
            IP Address:<br />
            <input type="text" name="ip[]" size="3" maxlength="3" value="" />.
            <input type="text" name="ip[]" size="3" maxlength="3" value="" />.
            <input type="text" name="ip[]" size="3" maxlength="3" value="" />.
            <input type="text" name="ip[]" size="3" maxlength="3" value="" />
        </p>
        <p>
            Subnet Mask:<br />
            <input type="text" name="sm[]" size="3" maxlength="3" value="" />.
            <input type="text" name="sm[]" size="3" maxlength="3" value="" />.
            <input type="text" name="sm[]" size="3" maxlength="3" value="" />.
            <input type="text" name="sm[]" size="3" maxlength="3" value="" />
        </p>
        <input type="submit" name="submit" value="Calculate" />
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Concatenate the IP form components and convert to IPv4 format
        $ip = implode('.', $_POST['ip']);
        $ip = ip2long($ip);

        // Concatenate the netmask form components and convert to IPv4
        $netmask = implode('.', $_POST['sm']);
        $netmask = ip2long($netmask);
        echo $netmask . "<br>";

        // Calculate the network address
        $na = ($ip & $netmask); // Bitwise and operatin
        // Calculate the broadcast address
        $ba = $na | (~$netmask);    // Bitwise or, (not) operation
        // Number of hosts
        $h = ip2long(long2ip($ba)) - ip2long(long2ip($na));
        // Convert the addresses back to the dot-format representation and display
        echo "Addressing Information: <br />";
        echo "<ul>";
        echo "<li>IP Address: " . long2ip($ip) . "</li>";
        echo "<li>Subnet Mask: " . long2ip($netmask) . "</li>";
        echo "<li>Network Address: " . long2ip($na) . "</li>";
        echo "<li>Broadcast Address: " . long2ip($ba) . "</li>";
        echo "<li>Total Available Hosts: " . ($h - 1) . "</li>";
        echo "<li>Host Range: " . long2ip($na + 1) . " -  " . long2ip($ba - 1) . "</li>";
        echo "</ul>";
    }
    ?>
</body>

</html>