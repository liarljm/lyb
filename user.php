<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户界面</title>
    <link rel="stylesheet" href="./css/manage.css">
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
        <?php
            include("conn.php");
	        $rs=@mysql_query("select * from message where sh=1  order by addTIme desc");
	        while($info=mysql_fetch_assoc($rs)){
        ?>
        <ul class="message">
		    <li class="img">
			 <img src="img/face/<?php echo $info['face']; ?>" width="50" class="img1">
		    </li>
	     	<li id="username"><p>[<?php echo $info['author']; ?>]</p><span><?php echo $info['addTIme']; ?></span></li>
	    	<li id="msg"><p> <?php echo $info['content']; ?></p> </li>
	    	<?php if(!empty($info['reply'])){?>
	    	<li class="reply"><p>管理员回复到：<?php echo $info ['reply']; ?></p></li>
	    	<?php } ?>
    	</ul>
	        <?php }
	        mysql_free_result($rs);
	        mysql_close($conn);
	        ?>
	
	        
          </div>
        <div id="button">
            <input type="button" id="page1" class="finally" value="首页">
            <input type="button" id="page2" class="change" value="上一页">
            <input type="button" id="page3" class="change" value="下一页">
            <input type="button" id="page4" class="finally" value="尾页">
        </div>
    </article>
    <footer id="bottom">
        <p>NightStart&copy;2021 Starts Fover</p>
        <p>ICP证：署ICP备18632625422号</p>
    </footer>
</body>

</html>