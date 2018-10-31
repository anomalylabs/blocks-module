<?php namespace Anomaly\BlocksModule\Block\Style;

use Anomaly\BlocksModule\Block\Traits\ProvidesStyle;
use Anomaly\CheckboxesFieldType\CheckboxesFieldType;

/**
 * Class ResponsiveVisibilityFieldType
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ResponsiveVisibilityFieldType extends CheckboxesFieldType
{

    use ProvidesStyle;

    /**
     * The field type label.
     *
     * @var string
     */
    protected $label = 'anomaly.module.blocks::style.responsive_visibility.label';

    /**
     * The field type options.
     *
     * @var array
     */
    protected $options = [
        'phone'   => 'anomaly.module.blocks::style.responsive_visibility.option.phone',
        'tablet'  => 'anomaly.module.blocks::style.responsive_visibility.option.tablet',
        'desktop' => 'anomaly.module.blocks::style.responsive_visibility.option.desktop',
    ];

}
