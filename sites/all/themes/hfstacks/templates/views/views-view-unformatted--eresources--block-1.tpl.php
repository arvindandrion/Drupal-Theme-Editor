<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="eresources-group">
	<?php if (!empty($title)): ?>
	  <h3 class="eresource-title"><?php print $title; ?></h3>
	<?php endif; ?>
	<div class="eresources-items">
	<?php foreach ($rows as $id => $row): ?>
	  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
	    <?php print $row; ?>
	  </div>
	<?php endforeach; ?>
	</div>
</div>
