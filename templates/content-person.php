<?php

$profile_links = get_option('profile_links','internal');

switch($profile_links){
	case 'internal':
		$link = get_the_permalink();
		break;
	case 'external':
		$link = get_post_meta($post->ID, 'profile_link',true);
		break;
	default:
		$link = false;
}

$class = 'card p-t-1';

if($link){
	$class .=' card-linked';
}

?>
<div <?php post_class($class); ?>>
	<?php if($link){?><a href="<?php echo $link; ?>" class="card-title-link"><?php } ?><h3 class="card-title"><?php the_title(); ?></h3><?php if($link){?></a><?php } ?>
	<p class="card-subtitle"><?php echo get_post_meta($post->ID, 'SubHeading', true); ?></p>
	<div class="card-text"><?php the_content(); ?></div>
	<?php if($link){?>
	<a href="<?php echo $link; ?>" class="faux-link-overlay" aria-hidden="true"><?php the_title(); ?></a>
	<?php } ?>
</div>