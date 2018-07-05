Drupal.behaviors.languageSwitch = {
    attach: function (context, settings) {
        var languageSwitch = jQuery('#block-realia-blocks-realia-language', context);
        jQuery('.expand', languageSwitch).hide();

        languageSwitch.hover(
            function () {
                jQuery('.expand', languageSwitch).show();
            },
            function () {
                jQuery('.expand', languageSwitch).hide();
            }
        );

        var min = parseInt(jQuery('#edit-field-price-value-min').val());
        var max = parseInt(jQuery('#edit-field-price-value-max').val());

        jQuery('#edit-field-price-value-wrapper label', context).append('<span class="price"><span class="value"><span class="from">' + min + '</span> - <span class="to">' + max + '</span></span></span>');
        jQuery('#edit-field-price-value-wrapper .price .value .to', context).currency({ region: settings.theme.currency, thousands: ' ', decimal: ',', decimals: 0, prefix: settings.theme.prefix })
        jQuery('#edit-field-price-value-wrapper .price .value .from', context).currency({ region: settings.theme.currency, thousands: ' ', decimal: ',', decimals: 0, prefix: settings.theme.prefix })

        jQuery('#edit-field-price-value-wrapper .views-widget', context).slider({
            range: true,
            min: min,
            max: max,
            values: [ min, max],
            slide: function (event, ui) {
                jQuery('#edit-field-price-value-min').attr('value', ui.values[0]);
                jQuery('#edit-field-price-value-max').attr('value', ui.values[1]);

                jQuery('#edit-field-price-value-wrapper .price .value .from').text(ui.values[0]);
                jQuery('#edit-field-price-value-wrapper .price .value .from').currency({ region: settings.theme.currency, thousands: ' ', decimal: ',', decimals: 0, prefix: settings.theme.prefix_currency });

                jQuery('#edit-field-price-value-wrapper .price .value .to').text(ui.values[1]);
                jQuery('#edit-field-price-value-wrapper .price .value .to').currency({ region: settings.theme.currency, thousands: ' ', decimal: ',', decimals: 0, prefix: settings.theme.prefix_currency });
            }
        });

        jQuery('#btn-nav', context).click(function (e) {
            jQuery('body').toggleClass('nav-open');
            e.preventDefault();
        });

        jQuery('input[type="checkbox"]', context).ezMark();
        jQuery('input[type="radio"]', context).ezMark();
        jQuery('select:visible', context).chosen({disable_search_threshold: 10});

        if (jQuery.cookie !== undefined) {
            if (jQuery.cookie('palette') == 'off') {
                jQuery('#aviators-palette').addClass('closed');
            }

            jQuery('#aviators-palette .toggle', context).live('click', function (e) {
                e.preventDefault();

                if (jQuery.cookie('palette') == 'off') {
                    jQuery.cookie('palette', 'on');
                } else {
                    jQuery.cookie('palette', 'off');
                }

                jQuery(this).parent().toggleClass('closed');
                jQuery('#aviators-palette').css({'margin-left': '0px'});
            });
        }
    }
}

