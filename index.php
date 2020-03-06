<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
</head>
 
<body <?php body_class(); ?>>

<h1>Inedo Custom Theme Example</h1>

<?php
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
        <h2><?php the_title() ?></h2>
		<?php the_content() ?>
	
	<?php endwhile;
 
else :
	echo '<p>There are no posts!</p>';
 
endif;
 
?>

</body>