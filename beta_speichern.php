// BETA - Optimierte Testversion
<?php
// Set timezone
date_default_timezone_set('Europe/Berlin');

$mac = "48:E7:29:5E:DA:AE";
$md5hash = strtoupper(md5($mac));

if ($_POST["PASSKEY"] == $md5hash) 
{
    // File names for different formats
    $file_live = "live.csv";
    $file_daily = date('Y-m-d') . ".csv";
    $file_monthly = date('Y-m') . ".csv";
    $file_yearly = date('Y') . ".csv";

    $csv_header = "";
    $csv_data = "";
    $csv_separator = ";";
    $csv_linebreak = "\n";

    // Prepare CSV content
    foreach ($_POST as $key => $value) {
        $csv_header .= $key . $csv_separator;
        $csv_data .= $value . $csv_separator;
    }

    $csv_header = rtrim($csv_header, $csv_separator);
    $csv_data = rtrim($csv_data, $csv_separator);

    // Function to write data to a file
    function write_to_file($file_name, $header, $data, $linebreak, $overwrite = false) {
        $is_new_file = !file_exists($file_name) || filesize($file_name) === 0;
        $mode = $overwrite ? "w" : "a"; // Overwrite or append mode
        $handle = fopen($file_name, $mode);
        if ($is_new_file || $overwrite) {
            fwrite($handle, $header . $linebreak);
        }
        fwrite($handle, $data . $linebreak);
        fclose($handle);
    }

    // Overwrite live.csv to ensure only the latest data is stored
    write_to_file($file_live, $csv_header, $csv_data, $csv_linebreak, true);

    // Append data to the other files without deleting old entries
    write_to_file($file_daily, $csv_header, $csv_data, $csv_linebreak);
    write_to_file($file_monthly, $csv_header, $csv_data, $csv_linebreak);
    write_to_file($file_yearly, $csv_header, $csv_data, $csv_linebreak);
}
else {
    echo "Invalid PASSKEY";
}
?>
