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
            <a class="brand" href="#">留言板</a>
            <ul class="nav">
                <li class="active"><a href="#">关于</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container main-area">
    <div id="messageList">
        <?php if (count($messages) > 0): ?>
        <table class="table table-bordered">
            <tr>
                <td class="span4">昵称</td>
                <td class="span8">留言</td>
            </tr>
            <?php foreach ($messages as $msg): ?>
            <tr>
                <td><?php echo $msg['nickname']; ?></td>
                <td><?php echo $msg['message']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div id="inputArea">
        <div>
            <label>昵称</label>
            <input class="input-medium span4" type="text" id="nickname">
        </div>
        <div>
            <label>留言</label>
            <textarea class="container" rows="5" id="message"></textarea>
        </div>
        <div>
            <button class="btn btn-primary" id="submitBtn">提交</button>
        </div>
    </div>
    <div id="infoModal" class="modal hide fade">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3>提示</h3>
        </div>
        <div class="modal-body">
            <p id="infoText">昵称与留言不能为空</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" id="confirmInfoModal">确定</button>
        </div>
    </div>
</div>
<script src="res/bootstrap/js/jquery.js"></script>
<script src="res/bootstrap/js/bootstrap.min.js"></script>
<script>
    $('#submitBtn').on('click', function() {
        var nickname = $('#nickname').val();
        var message = $('#message').val();

        if (0 == nickname.length || 0 == message.length) {
            $('#infoText').html('昵称与留言不能为空');
            $('#infoModal').modal('show');
        }
        else {
            var send = {
                'nickname':nickname,
                'message':message
            };
            $.post('Aj/Add', send, function(ret) {
                if (0 == ret.code) {
                    $('#infoText').html('留言提交成功，请刷新页面查看');
                    $('#infoModal').modal('show');
                }
                else
                {
                    $('#infoText').html('留言提交失败，错误信息为:' + ret.msg);
                    $('#infoModal').modal('show');
                }
            });
        }
    });
    $('#confirmInfoModal').on('click', function() {
        $('#infoModal').modal('hide');
    });
</script>
</body>
</html>