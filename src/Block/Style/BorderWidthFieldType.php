<?php namespace Anomaly\BlocksModule\Block\Style;

use Anomaly\BlocksModule\Block\Traits\ProvidesStyle;
use Anomaly\SliderFieldType\SliderFieldType;

/**
 * Class BorderWidthFieldType
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class BorderWidthFieldType extends SliderFieldType
{

    use ProvidesStyle;

    /**
     * The field config.
     *
     * @var array
     */
    protected $config = [
        'max'           => 50,
        'min'           => 0,
        'step'          => 1,
        'default_value' => 0,
    ];

    /**
     * The required flag.
     *
     * @var bool
     */
    protected $required = true;

    /**
     * The field type label.
     *
     * @var string
     */
    protected $label = 'anomaly.module.blocks::style.border_width.label';

}
