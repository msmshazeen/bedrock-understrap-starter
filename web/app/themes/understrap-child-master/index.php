<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>
<section class="py-5" id="home-section">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-12">
                <div>
                    <div class="d-flex flex-row text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/images/Logos.png" height="200" alt="" />
                    </div>
                    <div class="mt-5">
                        <ul>
                            <li><a href="https://localwp.com/" target="_blank">LOCAL</a> by Fly-Wheel</li>
                            <li><a href="https://roots.io/bedrock/" target="_blank">Bedrock</a> - WordPress boilerplate with easy config & folder structure</li>
                            <li><a href="https://understrap.com/" target="_blank">Understrap Theme</a> - Theme with Bootstrap 4 & Font-awesome integrated</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
