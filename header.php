<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    
    <header class="myhead mycontainer">
      <div class="alignwide">
       <a href="<?php echo esc_url(home_url('/')); ?>" class="top-logo">
           <?php bloginfo('name'); ?>
       </a>
       <p><?php bloginfo('description'); ?></p>
        </div>
    </header>
    
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
   <?php endif?>