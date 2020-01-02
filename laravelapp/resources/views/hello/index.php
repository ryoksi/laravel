<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello/index</title>
    <style>
      body {
        font-size: 16pt;
        color: #999;
      }

      h1 {
        font-size: 100pt;
        text-align: right;
        color: #f6f6f6;
        margin: -50px 0px -100px 0px;
      }
    </style>
  </head>
  <body>
    <h1>index</h1>
    <p><?php echo $msg; ?></p>
    <p>ID=<?php echo $id;?></p>
    <p><?php echo date("Y年n月j日"); ?></p>
  </body>
</html>
