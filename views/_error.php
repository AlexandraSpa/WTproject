<?php
/** @var $exception \Exception */

/**
 * @var $this \core\View
 */
if($exception->getCode()===404)
    $this->title = 'Page not found';
else
    $this->title = 'No permission';
?>
<style type="text/css">
    <?php include '../public/css/header.css'?>
    <?php include '../public/css/header-profile.css'?>
</style>
<body>
    <br><br><h1><?php echo $exception->getCode() ?> - <?php echo $exception->getMessage()?></h1>
</body>
</html>
