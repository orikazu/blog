<?php
    use myapp\config\ViewsConfig;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title><?php echo ViewsConfig::TITLE; ?></title>
        <link rel="stylesheet" type="text/css" href=<?php echo ViewsConfig::STYLE_SHEET_URL. "article/show.css"; ?>>
    </head>
    <body>
        
        <?php require ViewsConfig::COMPONENTS_PATH. 'header.php';?>

        <div id="main">
            
            <div id="main--left">

                <?php require ViewsConfig::COMPONENTS_PATH. 'breadcrumb.php'; ?>

                <div id="article">
                    <h2 id="article--title"><?php echo $articleContent['title']; ?></h3>  
                    <p id="article--updateDate"><?php echo '最終更新日:'. $articleContent['updateDate']; ?></p>

                    <div id="article--content">
                        <?php echo $articleContent['content']; ?>
                    </div>
                </div>
                
            </div>
  

            <?php require ViewsConfig::COMPONENTS_PATH. 'main--sidebar.php';?>
            
        </div>

    </body>
