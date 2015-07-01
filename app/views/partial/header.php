<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kiwi Blog</title>
<meta name="keywords" content="clean blog template, html css layout" />
<meta name="description" content="Clean Blog Template is provided by templatemo.com" />
<link href="<?php echo $kiwi->router->get_assets_path(); ?>template/templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="<?php echo $kiwi->router->get_assets_path(); ?>template/s3slider.css" rel="stylesheet" type="text/css" />
<!-- JavaScripts-->
<script type="text/javascript" src="<?php echo $kiwi->router->get_assets_path(); ?>template/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $kiwi->router->get_assets_path(); ?>template/js/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#slider').s3Slider({
            timeOut: 1600
        });
    });
</script>