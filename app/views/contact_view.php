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

                    <div id="contact_form">

                        <h2>Contact Form</h2>

                        <form action="#" name="contact" method="post">

                            <input type="hidden" value="Send" name="post"/>
                            <label for="author">Name:</label> <input type="text" class="required input_field" name="author" id="author"/>
                            <div class="cleaner_h10"></div>

                            <label for="email">Email Address:</label> <input type="text" class="validate-email required input_field" name="email" id="email"/>
                            <div class="cleaner_h10"></div>


                            <label for="text">Message:</label> <textarea class="required" cols="0" rows="0" name="text" id="text"></textarea>
                            <div class="cleaner_h10"></div>

                            <input type="submit" value="Send" id="submit" name="submit" class="submit_btn"/>
                            <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn"/>

                        </form>

                    </div>

                </div>
                <div class="cleaner"></div>

            </div> 

            <!-- end of templatemo_main -->
            <?php $kiwi->load->view('partial/footer'); ?>

        </div> <!-- end of wrapper -->

    </body>
</html>