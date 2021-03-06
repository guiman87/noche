<!-- START Category Search -->
<div class="em-search-category em-search-field">
	<label><?php echo esc_html(get_option('dbem_search_form_category_label')); ?></label>
	<?php 
		$selected = !empty($_REQUEST['category']) ? $_REQUEST['category'] : 0;
		EM_Object::ms_global_switch(); //in case in global tables mode of MultiSite, grabs main site categories, if not using MS Global, nothing happens
		wp_dropdown_categories(array( 'hide_empty' => 0, 'orderby' =>'name', 'name' => 'category', 'hierarchical' => true, 'taxonomy' => EM_TAXONOMY_CATEGORY, 'selected' => $selected, 'show_option_none' => get_option('dbem_search_form_categories_label'), 'class'=>'em-events-search-category'));
		EM_Object::ms_global_switch_back(); //if switched above, switch back
	?>
</div>

<!-- END Category Search -->