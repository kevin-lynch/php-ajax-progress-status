<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    $i = 0;

    echo "<p>$i</p>";
    flush();
    ob_flush();

    while ($i < 5) {
        $i++;
        echo "<p>$i</p>";
        flush();
        ob_flush();
        sleep(3);
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Output PHP Script Progress via Ajax - Basic Example</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-101130767-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>
<body>

<div class="container">
    <h2>Output PHP Script Progress via Ajax - Basic Example</h2>
    <p>Cick button below to run script.</p>
    <form class="" role="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <button type="submit" class="btn btn-primary">Execute Long PHP Script</button>
    </form>

    <div id="progress"></div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./dist/script-basic.min.js"></script>

</body>
</html>