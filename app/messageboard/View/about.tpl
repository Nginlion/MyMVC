<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>留言板</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="res/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="res/css/messageboard.css" rel="stylesheet">
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand" href="/index">留言板</a>
                <ul class="nav">
                    <li class="active"><a href="#">关于</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container main-area">
        <p><?php echo $about; ?></p>
    </div>
<script src="res/bootstrap/js/jquery.js"></script>
<script src="res/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>