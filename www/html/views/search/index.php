<?php 
    $styleSheetUrl = "/asset/stylesheet/";
    $componentsPath = "/var/www/html/views/components/";
    $imgUrl = "/asset/img/";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ブログサービス(仮)</title>
        <link rel="stylesheet" type="text/css" href=<?php echo $styleSheetUrl. "search/search.css"; ?>>
    </head>
    <body>

    <?php require $componentsPath. 'header.php';?>

        <div id="main">
            
            <div id="main--left">
                <div id="breadcrumb">
                    <p><a href="/index" class="breadcrumb-items">top</a></p>
                </div>
                <div id="main--title">
                    <p id="main-title">&lt;最近の投稿&gt;</p>
                </div>
                <div id="page-switch">
                    <p id="page-switch--previous"><a href="">前の9件</a></p>
                    <p id="page-switch--next"><a href="">次の9件</a></p>
                </div>

                <?php require $componentsPath. 'main--article-box.php'; ?>

            </div>
  

            <?php require $componentsPath. 'main--sidebar.php';?>
            
        </div>
        <div id="footer">
        
        </div>
　  </body>
</html>

