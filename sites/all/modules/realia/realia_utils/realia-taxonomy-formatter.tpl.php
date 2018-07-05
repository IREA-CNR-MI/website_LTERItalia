<div <?php print drupal_attributes($formatter_attributes); ?>>
  <?php foreach ($chunks as $terms): ?>
    <ul <?php print drupal_attributes($chunk_attributes); ?>>
      <?php foreach ($terms as $term): ?>
        <li <?php print drupal_attributes($term['attributes']); ?>>
          <?php print $term['value']; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endforeach; ?>
</div>
