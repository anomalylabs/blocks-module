<?php namespace Anomaly\BlocksModule\Block\Style;

use Anomaly\BlocksModule\Block\Traits\ProvidesStyle;
use Anomaly\TextFieldType\TextFieldType;

/**
 * Class BorderWidthFieldType
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class BorderWidthFieldType extends TextFieldType
{

    use ProvidesStyle;

    /**
     * The field type label.
     *
     * @var string
     */
    protected $label = 'anomaly.module.blocks::style.border_width.label';

    /**
     * The input view.
     *
     * @var string
     */
    protected $inputView = 'anomaly.module.blocks::style/border_width';

    /**
     * Return the sub-fields.
     *
     * @param string $prefix
     * @return array
     */
    public static function fields($prefix = '')
    {
        return [
            $prefix . 'border_width'                => BorderWidthFieldType::class,

            /**
             * Desktop Field Set
             */
            $prefix . 'desktop_border_width_top'    => [
                'type'  => TextFieldType::class,
                'label' => 'anomaly.module.blocks::style.top.label',
            ],
            $prefix . 'desktop_border_width_left'   => [
                'type'  => TextFieldType::class,
                'label' => 'anomaly.module.blocks::style.left.label',
            ],
            $prefix . 'desktop_border_width_right'  => [
                'type'  => TextFieldType::class,
                'label' => 'anomaly.module.blocks::style.right.label',
            ],
            $prefix . 'desktop_border_width_bottom' => [
                'type'  => TextFieldType::class,
                'label' => 'anomaly.module.blocks::style.bottom.label',
            ],

            /**
             * Tablet Field Set
             */
            $prefix . 'tablet_border_width_top'     => [
                'type'  => TextFieldType::class,
                'label' => 'anomaly.module.blocks::style.top.label',
            ],
            $prefix . 'tablet_border_width_left'    => [
                'type'  => TextFieldType::class,
                'label' => 'anomaly.module.blocks::style.left.label',
            ],
            $prefix . 'tablet_border_width_right'   => [
                'type'  => TextFieldType::class,
                'label' => 'anomaly.module.blocks::style.right.label',
            ],
            $prefix . 'tablet_border_width_bottom'  => [
                'type'  => TextFieldType::class,
                'label' => 'anomaly.module.blocks::style.bottom.label',
            ],

            /**
             * Phone Field Set
             */
            $prefix . 'phone_border_width_top'      => [
                'type'  => TextFieldType::class,
                'label' => 'anomaly.module.blocks::style.top.label',
            ],
            $prefix . 'phone_border_width_left'     => [
                'type'  => TextFieldType::class,
                'label' => 'anomaly.module.blocks::style.left.label',
            ],
            $prefix . 'phone_border_width_right'    => [
                'type'  => TextFieldType::class,
                'label' => 'anomaly.module.blocks::style.right.label',
            ],
            $prefix . 'phone_border_width_bottom'   => [
                'type'  => TextFieldType::class,
                'label' => 'anomaly.module.blocks::style.bottom.label',
            ],
        ];
    }

}
