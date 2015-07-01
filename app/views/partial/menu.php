<div id="templatemo_menu">
    <ul>
        <?php foreach ($menu_items as $mi): ?>
            <li>
                <a href="<?php echo $mi['href']; ?>" class="current"><?php echo $mi['text']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>