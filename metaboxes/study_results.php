<?php

$mm->the_field('study_results_participants');
?>
<div class="mm_input_group">
    <label for="<?php $mm->the_name(); ?>">
        Participants:
        <input id="<?php $mm->the_name(); ?>" name="<?php $mm->the_name(); ?>" value="<?php $mm->the_value(); ?>" >
    </label>
</div>

<?php
$mm->the_field('study_results_articles');
?>
<div class="mm_input_group">
    <label for="<?php $mm->the_name(); ?>">
        Articles:
        <input id="<?php $mm->the_name(); ?>" name="<?php $mm->the_name(); ?>" value="<?php $mm->the_value(); ?>" >
    </label>
</div>

<?php
$mm->the_field('study_results_quote');
?>
<div class="mm_input_group">
    <label for="<?php $mm->the_name(); ?>">
        Quote:
        <input id="<?php $mm->the_name(); ?>" name="<?php $mm->the_name(); ?>" value="<?php $mm->the_value(); ?>" >
    </label>
</div>

<?php
$mm->the_field('study_results_quote_attribution');
?>
<div class="mm_input_group">
    <label for="<?php $mm->the_name(); ?>">
        Quote Attribution:
        <input id="<?php $mm->the_name(); ?>" name="<?php $mm->the_name(); ?>" value="<?php $mm->the_value(); ?>" >
    </label>
</div>
<?php

$mm->the_field('study_results_category');
?>
<div class="mm_input_group">
    <label for="<?php $mm->the_name(); ?>">Category:</label>
    <?php
    wp_dropdown_categories(array(
        'show_option_none' =>'All Categories',
        'option_none_value'=>"",
        'orderby'=>'name',
        'value_field'=>'name',
        'name'=>$mm->get_the_name(),
        'id'=>$mm->get_the_name(),
        'selected'=>$mm->get_the_value()
    ));
    ?>

</div>

<?php
$mm->the_field('study_results_posts');
?>
<div class="mm_input_group">
    <label for="<?php $mm->the_name(); ?>">
        Amount of posts:
        <input id="<?php $mm->the_name(); ?>" name="<?php $mm->the_name(); ?>" value="<?php $mm->the_value(); ?>" placeholder="7">
    </label>
</div>