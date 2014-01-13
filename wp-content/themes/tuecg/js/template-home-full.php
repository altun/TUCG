<?php
/*
Template Name: Home Template
*/
?>

<?php get_header(); ?>
			
            <?php
            global $slider;            
			?>
            
           
            <?php $sliderEnabled = get_option('ls_enable_slider'); ?>
            <?php if($sliderEnabled == 'true') : ?>
             
             
             <!--BEGIN #rev-slider -->
                          
             <?php if($slider == 'Revolution Slider'): ?>
             <?php if(function_exists('putRevSlider')) { 
                echo '<div id="megaslider" class="currentslider rev">';
                putRevSlider("Home"); 
                echo '</div>';
                } ?>
             
             
             <?php endif; ?>
           
            
            <?php endif; ?>

        <div class="content-wrapper">
            <div class="wrapper"><div id="home">
            
            <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            </div></div>
        </div>   
                      
<?php get_footer(); ?>