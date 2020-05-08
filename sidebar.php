<?php if(has_nav_menu('primary')):?>


<nav class="mynav">
    <div class="mycontainer">
        <div class="alignwide">
            <?php wp_nav_menu(array(
        'theme_location'=>'primary',
));?>
        </div>
    </div>
</nav>
<?php  endif;?>