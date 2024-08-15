<?php
if (isset($_GET['u'])):
    include('config.php');
    $u = mysqli_real_escape_string($conn, $_GET['u']); // Corrected to $_GET

    $sql = mysqli_query($conn, "SELECT * FROM shorten_url WHERE short_url='{$u}'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        $Shorten_URL = $row['short_url'];
        $Original_URL = $row['full_url']; // Corrected variable name
        $Clicks = $row['clicks'];

        echo '
        <div class="data">
            <li><a href="#">example.com/'.$Shorten_URL.'</a></li>
            <li>'.$Original_URL.'</li> <!-- Corrected variable name -->
            <li>'.$Clicks.'</li>
            <li><button>Delete</button></li>
        </div>';
        
        header('Location: ' . $Original_URL); // Moved before HTML output
        exit(); // Ensure no further code is executed after redirect
    } else {
        echo 'There is no data';
    }
endif;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Shorten URL</title>
</head>

<body>

    <div class="wrapper">
        <form action="#">
            <input name="full_url" type="text" placeholder="Enter You're URL.." required>
            <i class="icon">icon</i>
            <button>Shorten</button>
        </form>
        <div class="count">
            <span>Total Links: <span>10</span> & Total Clicks: <span>140</span></span>
        </div>

        <!-- Start URLs Area -->
        <div class="urls-area">
            <div class="title">
                <li>Shorten URL</li>
                <li>Original UTL</li>
                <li>Clicks</li>
                <li>action</li>
            </div>
            <div class="data">
                <li><a href="#">example.com/xyz234</a></li>
                <li>https://www.codingnepalweb.com/p/about-us.html</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>

            <?php
            include ('config.php');
                $sql = mysqli_query($conn, "SELECT * FROM shorten_url");
                if (mysqli_num_rows($sql) > 0) {
                    while($row = mysqli_fetch_assoc($sql)){
                        $Shorten_URL = $row['short_url'];
                        $Original_UTL = $row['full_url'];
                        $Clicks = $row['clicks'];
            
                        echo '
                        <div class="data">
                            <li><a href="#">example.com/'.$Shorten_URL.'</a></li>
                            <li>'.$Original_UTL.'</li>
                            <li> '.$Clicks.' </li>
                            <li><a href="#">Delete</a></li>
                        </div>';}
                    }
            ?>
        </div>
    </div>
    <div class="blur-effect"></div>
    <div class="popup-box">
        <div class="info-box">Your short link is ready. You can also edit you</div>
        <p>Edit You're shorten URL</p>
        <form action="#">
            <i class="copy">copy</i>
            <input type="text" spellcheck="false" value="">
            <button>Save</button>
        </form>
    </div>
    <script src="main.js"></script>
</body>

</html>