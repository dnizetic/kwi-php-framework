<div id="templatemo_left_column">

    <div id="templatemo_header">

        <div id="site_title">
            <h1><a href="http://www.templatemo.com" target="_parent">Kiwi <strong>Blog</strong><span>IT BLOG</span></a></h1>
        </div><!-- end of site_title -->

    </div> <!-- end of header -->  

    <div id="templatemo_sidebar">

        <div id="templatemo_rss">

            <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>

        </div>

        <h4>Categories</h4>
        <ul class="templatemo_list">
            <?php foreach ($categories as $cat): ?>
                <li><a href="<?php echo $kiwi->router->get_root_url(); ?>/home?cat_id=<?php echo $cat['cat_id']; ?>" target="_parent"><?php echo $cat['cat_name']; ?></a></li>
            <?php endforeach; ?>
        </ul>

        <div class="cleaner_h40"></div>

    </div> <!-- end of templatemo_sidebar --> 

</div> <!-- end of templatemo_left_column -->