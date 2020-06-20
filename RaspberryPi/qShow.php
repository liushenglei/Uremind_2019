<?php    
    $conn=mysqli_connect("47.101.148.244","root","Imars123","iamsure");
    if (mysqli_connect_errno())
    {echo "link wrong: " . mysqli_connect_error();}
    $sql = "SELECT `img` FROM `imgs` WHERE `class` = 1";
    $result = $conn->query($sql);
    $result = $result->fetch_assoc();
    $imgData = $result["img"];
    //echo "<img src=\"$imgData\"></img>"
?>
<!DOCTYPE html> 
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>收到消息</title>
    <style>
 
        body {
            background-image: url(img/jieshoubeijing.png);
            width: 100%;
            height: 100%;
            background-repeat: no-repeat
        }
        
        .mid{          
           
            margin-left:300px;
           margin-top:800px;
           transform:scale(3.5);
            overflow:hidden;
 position:fixed;
 left:0;
 top:0;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.5/socket.io.min.js"></script>
    </head>
<body>
    <button  id="button"style="display:block;width:1017px;height:192px;background:url() no-repeat;border:0;position:absolute;top:1643px;left:88px;" onclick="next()"></button>
 <div class="mid">
  <?php
  echo  "<img src=\"$imgData\">"
  ?>
 </div>
    
    <script>
        function next(){
    var socket = io.connect('http://10.162.141.66:8080');
   $('#button').click(function(e){
      socket.emit('click');
      e.preventDefault();
    });
    window.location.href="index.html";
        }
      
  </script>
    
</body>
</html>