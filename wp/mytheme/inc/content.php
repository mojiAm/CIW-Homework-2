<div class="content">
    <?php 
        if (have_posts()){
            the_post();
    ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    <?php 
        }
        else{
    ?>
        <h1>404</h1>
        <p>The page not found!!</p>
    <?php 
       }
    ?>  
</div>