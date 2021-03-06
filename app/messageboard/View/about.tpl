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
        <div class="container">
            <p><?php echo $about; ?></p>
        </div>
        <div class="container" style="border-top: 1px solid #e5e5e5;">
            <p>
                表结构
            </p>
            <table class="table table-bordered">
                <tr>
                    <td>名称</td>
                    <td>类型</td>
                    <td>备注</td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>INT</td>
                    <td>AI PK</td>
                </tr>
                <tr>
                    <td>nickname</td>
                    <td>VARCHAR(32)</td>
                    <td></td>
                </tr>
                <tr>
                    <td>message</td>
                    <td>TEXT</td>
                    <td></td>
                </tr>
            </table>
            <div class="alert alert-info">
                数据库名称为messageboard，表名称为messagelist，用户名为root，密码为123456，使用3306端口.
            </div>
        </div>
    </div>
    <div class="container" style="border-top: 1px solid #e5e5e5;">
        <p>
            改写规则
        </p>
        <pre>
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_URI} !^/(?:crossdomain\.xml|favicon\.ico|.*\.js|.*\.css|.*\.png|.*\.jpg|.*\.gif|.*\.html|.*\.cur|.*\.map)$
RewriteRule /(.*)  /MyMVC/app/messageboard/index.php/$1
RewriteCond %{REQUEST_URI} ^/(?:crossdomain\.xml|favicon\.ico|.*\.js|.*\.css|.*\.png|.*\.jpg|.*\.gif|.*\.html|.*\.cur|.*\.map)$
RewriteRule /(.*)  /MyMVC/app/messageboard/$1
        </pre>
    </div>
<script src="res/bootstrap/js/jquery.js"></script>
<script src="res/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>