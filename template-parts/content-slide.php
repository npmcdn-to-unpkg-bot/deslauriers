<?php
/**
 * Template part for displaying Aside posts on index pages
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php echo is_subcategory(get_query_var('cat'));
      the_title( '<h1 class="entry-title">', '</h1>' )?>
<?php echo '<img src="'. get_field('main_image'). '" />' ?>

</article><!-- #post-## -->
