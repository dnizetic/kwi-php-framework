<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include 'partial/header.php'; ?>
    </head>
    <body>
        <div id="templatemo_wrapper">
            <?php $kiwi->load->view('partial/menu', array('menu_items' => $menu_items)); ?>
            <?php $kiwi->load->view('partial/left_col', array('categories' => $categories)); ?>
            <div id="templatemo_right_column">
                <div id="templatemo_main">
                    <h2>About Us</h2>
                    Validate XHTML & CSS. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent aliquam velit a magna sodales quis elementum ipsum auctor. Ut at metus leo, et dictum sem
                    <ol>
                        <li>Fusce fringilla, dui sed blandit luctus, arcu augue pellentesque</li>
                        <li>Sed fermentum arcu in enim euismod quis lobortis </li>
                        <li>Class aptent taciti sociosqu ad litora torquent </li>
                        <li>Praesent libero nisi, pellentesque in sagittis ac</li>
                        <li>Nunc eget erat urna. <a href="#">Sed ac ante lacus</a>, eu scelerisque urna</li>
                    </ol>
                </div> <!-- end of main -->
                <div class="cleaner"></div>
            </div>
            <!-- end of templatemo_main -->
            <?php $kiwi->load->view('partial/footer'); ?>
        </div> <!-- end of wrapper -->

    </body>
</html>