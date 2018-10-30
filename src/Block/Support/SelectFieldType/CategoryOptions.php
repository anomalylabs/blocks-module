<?php namespace Anomaly\BlocksModule\Block\Support\SelectFieldType;

use Anomaly\SelectFieldType\SelectFieldType;

/**
 * Class CategoryOptions
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class CategoryOptions
{

    /**
     * Handle the category options.
     *
     * @param SelectFieldType $fieldType
     */
    public function handle(SelectFieldType $fieldType)
    {
        $fieldType->setOptions(
            [
                'content'    => 'Content',
                'media'      => 'Media',
                'structural' => 'Structural',
                'other'      => 'Other',
            ]
        );
    }
}
