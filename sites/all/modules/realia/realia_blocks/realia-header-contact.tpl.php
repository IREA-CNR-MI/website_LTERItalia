<?php

?>

<div class="info">
    <?php if($mail): ?>
      <div class="site-email">
          <a href="mailto:<?php print $mail; ?>"><?php print $mail; ?></a>
      </div>
    <?php endif;?>
    <!-- /.site-email -->
    <?php if($phone): ?>
      <div class="site-phone">
          <span><?php print $phone; ?></span>
      </div>
    <?php endif; ?>
    <!-- /.site-phone -->
</div>