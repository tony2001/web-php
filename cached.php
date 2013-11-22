<?php
$_SERVER['BASE_PAGE'] = 'cached.php';
include_once 'include/prepend.inc';

if (!isset($_GET["f"])) {
    header("Location: http://php.net/");
    exit;
}
$pwd = realpath($_SERVER["DOCUMENT_ROOT"]);
$abs = $pwd. "/" .(string)$_GET["f"];
$abs = realpath($abs);

if (strncmp($abs, $pwd, strlen($pwd)) != 0) {
    header("Location: http://php.net/$abs");
    exit;
}

if (isset($_GET["t"])) {
    $time = (int)$_GET["t"];
} else {
    $time = filemtime($abs);
}


$tsstring = gmdate("D, d M Y H:i:s ", $time) . "GMT";
if (isset($_SERVER["HTTP_IF_MODIFIED_SINCE"]) &&
    ($_SERVER["HTTP_IF_MODIFIED_SINCE"] == $tsstring)) {
    header("HTTP/1.1 304 Not Modified");
    exit;
}

header("Last-Modified: " . $tsstring);

if (substr($abs, -3) == ".js" || substr($abs, -5) == ".json") {
    header("Content-Type: application/javascript");
} elseif (substr($abs, -4) == ".css") {
    header("Content-Type: text/css");
}

if (function_exists("ob_gzhandler")) {
    ob_start("ob_gzhandler");
    readfile($abs);
    ob_end_flush();
} else {
    readfile($abs);
}

