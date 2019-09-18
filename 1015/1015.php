<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
  $less->compileFile('less//1015.less', 'css/1015.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>module 1015</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/1015.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/js/bootstrap.min.js"/>
</head>
<body>
     <?php include $dir_block.'/1015-content.php'; ?>
</body>
</html>