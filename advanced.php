<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    $total = 25;
    $i = 0;

    echo json_encode(array('progress' => 0, 'count' => $i, 'total' => $total));
    flush();
    ob_flush();

    while ($i < $total) {
        $i++;
        echo json_encode(array('progress' => (($i/$total)*100), 'count' => $i, 'total' => $total));
        flush();
        ob_flush();
        sleep(1);
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Output PHP Script Progress via Ajax</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="./dist/style.min.css">

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
    <h2>Output PHP Script Progress via Ajax</h2>
    <p>Cick button below to run script.</p>
    <form class="" role="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <button type="submit" class="btn btn-primary">Execute Long PHP Script</button>
    </form>

    <div class="ajax-res">
        <hr />
        <h3>PHP Script Progress below</h3>
        <p>Starting Process...</p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">0%</div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./dist/script.min.js"></script>

</body>
</html>