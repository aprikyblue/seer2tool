<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title><?php echo ($title); ?></title>
   <style type="text/css">
   * { padding: 0; margin: 0; }
   div{ padding: 4px 48px;} 
   body{ background: #fff; font-family: "微软雅黑"; color: #333;} 
   h1 { font-size: 100px; font-weight: normal; margin-bottom: 12px; }
   p{ line-height: 1.8em; font-size: 36px }
   </style>
 </head>
 <body>
    <div style="padding: 24px 48px;">
    <h1><a href="<?php echo ($url); ?>">:)</h1>
    <p>欢迎使用 <b><?php echo ($title); ?></b>！</p>
    <p>很抱歉，该功能当前未开发完成，请先去别处逛逛吧！</p>
    </div>
 </body>
</html>