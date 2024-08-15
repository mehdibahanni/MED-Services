<?php
include('config.php');
if (isset($_POST['full_url'])) {
    $full_url = mysqli_real_escape_string($conn, $_POST['full_url']);

    if (!empty($full_url) && filter_var($full_url, FILTER_VALIDATE_URL)) {
        $rand_url = substr(md5(microtime()), rand(0, 26), 5);
        $query_short_url = mysqli_query($conn, "SELECT short_url FROM shorten_url WHERE short_url='{$rand_url}'"); // Corrected query

        if (mysqli_num_rows($query_short_url) > 0) {
            echo 'Something is wrong. Try again later or regenerate the URL.';
        } else {
            $query_insert = mysqli_query($conn, "INSERT INTO shorten_url (full_url, short_url, clicks) VALUES ('{$full_url}', '{$rand_url}', '0')");

            if ($query_insert) {
                $query_select_short_url = mysqli_query($conn, "SELECT short_url FROM shorten_url WHERE short_url='{$rand_url}'");
                if (mysqli_num_rows($query_select_short_url) > 0) {
                    $short_url = mysqli_fetch_assoc($query_select_short_url);
                    echo $short_url['short_url'];
                }
            } else {
                echo 'Something is wrong when pushing into the DB.';
            }
        }
    } else {
        echo "$full_url: This is not a valid URL.";
    }
}
?>
