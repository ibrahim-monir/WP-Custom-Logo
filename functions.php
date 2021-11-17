<?php
/**
 * Custom logo
 */
$defaults = array(
    'width'     =>  '150',
    'height'    =>  '50',
    'flex-width'=>  true,
    'flex-height'=> true,
    // 'header-text'=> array( 'site-title', 'site-description')
);
add_theme_support('custom-logo');

// Display custom logo 
add_action( 'genesis_site_title', 'the_custom_logo', 0 );




//* Header logo display or hide
function outreach_pro_logo_show(){
    if(current_theme_supports('custom-header')){
        ?>
        <style>
            .site-title a, .site-title a:hover{
                color: <?php echo get_header_textcolor(); ?>
            }

            header .title-area .site-title{
            <?php 
                if(!display_header_text()){
                    echo "display:none;";
                } 
            ?>  
            }

            header img.custom-logo {
                <?php 
                if(display_header_text()){
                    echo "display:none;";
                    } 
                ?> 
            }
            
            
        </style>
        <?php
    }
}
add_action('wp_head','outreach_pro_logo_show');