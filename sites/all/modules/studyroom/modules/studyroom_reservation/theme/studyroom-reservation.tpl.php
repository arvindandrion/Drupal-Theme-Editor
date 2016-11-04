<?php

/**
 * @file
 * A basic template for studyroom_reservation entities
 *
 * Available variables:
 * - $content: An array of reservation items. Use render($content) to print
 *   them all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The name of the reservation
 * - $url: The standard URL for viewing a reservation entity
 * - $page: TRUE if this is the main view page $url points too.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-profile
 *   - studyroom_reservation-{TYPE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
        <a href="<?php print $url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
    /*
    print "<pre>";
      var_dump($content);
    print "</pre>";
    */

    print render($content['field_reservation_datetime']);
    print render($content['duration']);
    print render($content['field_reservation_occupancy']);
    print render($content['space_id']);

    print render($content['field_reservation_contact_name']);
    print render($content['field_reservation_contact_email']);
    print render($content['field_reservation_contact_phone']);
    print render($content['field_reservation_contact_desc']);
    ?>
  </div>
</div>
