<div class="row">
    <div <?php print drupal_attributes($view_attributes); ?>>
      <?php foreach ($rows as $delta => $row): ?>
        <div class="row">
          <?php foreach ($row as $record): ?>
            <div <?php print drupal_attributes($record['attributes']); ?>>
              <?php print $record['record']; ?>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
</div>