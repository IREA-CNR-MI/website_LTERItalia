Drupal.behaviors.pikachoose = {
    attach:function (context, settings) {
        pikaOptions = settings.pikachoose;
        jQuery('#' + settings.pikachoose.id, context).PikaChoose(pikaOptions);
    }
}
