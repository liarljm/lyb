<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户界面</title>
    <link rel="stylesheet" href="./css/send.css">
</head>

<body>
    <header id="top">
        <div id="header">
            <ul id="nav">
                <li id="right"><a href="./manage.php">首页</a></li>
                <li id="left"><a href="./send.php">发表言论</a></li>
                <li id="left"><a href="#">注销</a></li>
            </ul>
        </div>
    </header>
    <article id="act">
        <div id="content">
        <form  name="leavemessage" action="leave_message.php" method="post">
		作者：
		<input type="text" name="author" />
		<select name="face" id="face">
		<?php for($i=1;$i<=11;$i++){?>
		<option value="<?php echo $i.".jpg"?>"><?php echo $i.".jpg"?></option>
		<?php } ?>
		</select>
		<img id="img1" src="images/face/1.jpg" width="50"><br>
		标题：
		<input type="text" name="title" /><br>
		内容：
		<textarea name="content" cols="40" rows="10" /></textarea>
		<br>
		<input type="submit" name="submit" value="发布留言">
		</form>
        </div>
    </article>
    <footer id="bottom">
        <p>NightStart&copy;2021 Starts Fover</p>
        <p>ICP证：署ICP备18632625422号</p>
    </footer>
</body>

</html>