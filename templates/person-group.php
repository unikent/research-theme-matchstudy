<?php
use Unikent\ResearchWP\Utils;

$query_params = array('post_type'=>'person');

// Only filter groups is group is provided
if($group !== null){
	$query_params['tax_query'] = array(array('taxonomy' =>'group', 'field'=>'term_id', 'include_children'=>false, 'terms' => $group->term_id));
}

$people = new WP_Query($query_params);
?>
<div class="card-panel cards-backed cards-backed-tertiary cards-centered">
	<div class="card-panel-header">
		<h2><?php echo $group->name; ?></h2>
	</div>
	<div class="card-panel-body">
		<?php
		while ( $people->have_posts()) {
			$people->the_post();
			get_template_part('templates/content','person');
		}
		wp_reset_postdata();
		?>
	</div>
</div>

<?php
if($children){
	foreach($group->children as $group){
		Utils::get_template_view('templates/person-group', array('group' =>$group, 'children' => $children));
	}
}
