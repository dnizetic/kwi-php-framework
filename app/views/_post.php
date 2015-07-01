<div class="post_section">
    <h2><a href="blog_post.html"><?php echo $post['post_title']; ?></a></h2>
    Published: <?php echo date('d.m.Y', strtotime($post['post_created_at'])); ?> |  <strong>Category:</strong> <a href="#"> <?php echo $post['cat_name']; ?></a>
    <img src="<?php echo $kiwi->router->get_assets_path(); ?>template/images/templatemo_image_01.jpg" alt="image 1" />

    <?php echo $post['post_content']; ?>

    <br/>
    <a href="blog_post.html">Continue reading...</a>
</div>