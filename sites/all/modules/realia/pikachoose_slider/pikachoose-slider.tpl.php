
<ul <?php print drupal_attributes($pikachoose_attributes); ?>>
  <?php foreach ($rows as $delta => $row): ?>
    <li><?php print $row; ?></li>
  <?php endforeach; ?>
</ul>
