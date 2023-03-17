<?php
$str = "saikia@tsk.admin";
$hash=sha1($str);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Generate Hash</title>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
                background: #000;
                color: #0ff74d;
                padding: 20px 5px;
                margin: 0;
            }
            .str, .pwd {
                margin-top: 80px;
                font-size: 20px;
                font-weight: bold;
                text-align: center;
            }
            .str span, .pwd span {
                font-size: 16px;
                font-weight: normal;
                border: 1px solid #4a4949;
                border-radius: 8px;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h1 style="text-align: center;font-size:40px;">GENERATE HASH SHA-1</h1>
            <div class="pwd-box">
                <p class="str">String:&nbsp;&nbsp;&nbsp;<span><?php echo $str; ?></span></p>
                <p class="pwd">Password:&nbsp;&nbsp;&nbsp;<span><?php echo $hash; ?></span></p>
            </div>
        </div>
    </body>
</html>