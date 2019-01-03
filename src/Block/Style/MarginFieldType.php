<?php namespace Anomaly\BlocksModule\Block\Style;

use Anomaly\BlocksModule\Block\Traits\ProvidesStyle;
use Anomaly\IntegerFieldType\IntegerFieldType;

/**
 * Class MarginFieldType
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class MarginFieldType extends IntegerFieldType
{

    use ProvidesStyle;

    /**
     * The field config.
     *
     * @var array
     */
    protected $config = [
        'step'      => 1,
        'separator' => '',
    ];

    /**
     * The field type label.
     *
     * @var string
     */
    protected $label = 'anomaly.module.blocks::style.margin.label';

    /**
     * The input view.
     *
     * @var string
     */
    protected $inputView = 'anomaly.module.blocks::style/margin';

    /**
     * Return the sub-fields.
     *
     * @param string $prefix
     * @return array
     */
    public static function fields($prefix = '')
    {
        return [
            $prefix . 'margin'                => MarginFieldType::class,

            /**
             * Desktop Field Set
             */
            $prefix . 'desktop_margin_top'    => [
                'type'  => MarginTopFieldType::class,
                'label' => 'anomaly.module.blocks::style.top.label',
            ],
            $prefix . 'desktop_margin_left'   => [
                'type'  => MarginLeftFieldType::class,
                'label' => 'anomaly.module.blocks::style.left.label',
            ],
            $prefix . 'desktop_margin_right'  => [
                'type'  => MarginRightFieldType::class,
                'label' => 'anomaly.module.blocks::style.right.label',
            ],
            $prefix . 'desktop_margin_bottom' => [
                'type'  => MarginBottomFieldType::class,
                'label' => 'anomaly.module.blocks::style.bottom.label',
            ],

            /**
             * Tablet Field Set
             */
            $prefix . 'tablet_margin_top'     => [
                'type'  => MarginTopFieldType::class,
                'label' => 'anomaly.module.blocks::style.top.label',
            ],
            $prefix . 'tablet_margin_left'    => [
                'type'  => MarginLeftFieldType::class,
                'label' => 'anomaly.module.blocks::style.left.label',
            ],
            $prefix . 'tablet_margin_right'   => [
                'type'  => MarginRightFieldType::class,
                'label' => 'anomaly.module.blocks::style.right.label',
            ],
            $prefix . 'tablet_margin_bottom'  => [
                'type'  => MarginBottomFieldType::class,
                'label' => 'anomaly.module.blocks::style.bottom.label',
            ],

            /**
             * Phone Field Set
             */
            $prefix . 'phone_margin_top'      => [
                'type'  => MarginTopFieldType::class,
                'label' => 'anomaly.module.blocks::style.top.label',
            ],
            $prefix . 'phone_margin_left'     => [
                'type'  => MarginLeftFieldType::class,
                'label' => 'anomaly.module.blocks::style.left.label',
            ],
            $prefix . 'phone_margin_right'    => [
                'type'  => MarginRightFieldType::class,
                'label' => 'anomaly.module.blocks::style.right.label',
            ],
            $prefix . 'phone_margin_bottom'   => [
                'type'  => MarginBottomFieldType::class,
                'label' => 'anomaly.module.blocks::style.bottom.label',
            ],
        ];
    }

}
