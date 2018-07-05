<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php hide($content['field_type']); ?>
    <?php hide($content['comments']); ?>
    <?php hide($content['links']); ?>
    <?php hide($content['field_tags']); ?>
    <?php hide($content['field_general_amenities']); ?>

    <div class="pull-left overview">
        <div class="row span8">
            <div class="span3" style="margin-left: 10px;">
                <h2><?php print t('Overview'); ?></h2>

                <div class="table">
                    <!--?php print render($content['field_price']); ?-->
                    <?php print render($content['field_assigned_agents']); ?>
                    <?php print render($content['field_parent_site']); ?>
                    <?php print render($content['field_lter_code']); ?>
                    <?php print render($content['field_type']); ?>
                    <?php print render($content['field_map']); ?>
                    <!--?php print render($content['field_location']); ?-->
                    <!--?php print render($content['field_bathrooms']); ?-->
                    <!--?php print render($content['field_bedrooms']); ?-->
                    <!--?php print render($content['field_area']); ?-->
                </div><!-- /.table -->
            </div><!-- /.span2 -->
            <div class="span4" style="margin-left: 80px;">
                <?php print render($content['field_image']); ?>
                <?php print render($content['body']); ?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.overview -->
    <?php print render($content); ?>

    <!--h2><?php print t('General amenities'); ?></h2-->
    <?php print render($content['field_general_amenities']); ?>
    <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>

    <footer>
        <?php print render($content['field_tags']); ?>
        <?php print render($content['links']); ?>
    </footer>

    <?php endif; ?>

    <?php print render($content['comments']); ?>
</article> <!-- /.node -->
