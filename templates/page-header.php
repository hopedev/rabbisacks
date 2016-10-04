<?php // THis is template for all posts and pages (ie. not just Pages)

use Roots\Sage\Titles; 


if (is_post_type_archive('project')){
	echo '<div class="filters uk-container uk-container-center"><h2>Filters</h2>';
?>

		<div class="filter-button-group">
			<button data-filter="*">show all</button>
			<button data-filter=".project_type-residential">Residential</button>
			<button data-filter=".project_type-commercial">Commercial</button>
		</div>
	</div>
<?php
}
?>


<div class="page-header uk-text-center">
  <h1><?= Titles\title(); ?></h1>
</div>
