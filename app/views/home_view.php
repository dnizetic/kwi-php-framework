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
                    <?php if (is_array($posts)): ?>
                        <?php foreach ($posts as $post): ?>
                            <?php $kiwi->load->view('_post', array('post' => $post)); ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        No posts in selected category.
                    <?php endif; ?>
                </div>
                <div class="cleaner"></div>
            </div> 
            <!-- end of templatemo_main -->
            <?php $kiwi->load->view('partial/footer'); ?>

        </div> <!-- end of wrapper -->
    </body>
</html>