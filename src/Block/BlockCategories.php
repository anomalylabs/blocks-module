<?php namespace Anomaly\BlocksModule\Block;

/**
 * Class BlockCategories
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class BlockCategories
{

    /**
     * Available categories.
     *
     * @var array
     */
    protected $categories = [
        'all'        => [
            'name'        => 'anomaly.module.blocks::category.all.name',
            'description' => 'anomaly.module.blocks::category.all.description',
        ],
        'content'    => [
            'name'        => 'anomaly.module.blocks::category.content.name',
            'description' => 'anomaly.module.blocks::category.content.description',
        ],
        'component'  => [
            'name'        => 'anomaly.module.blocks::category.component.name',
            'description' => 'anomaly.module.blocks::category.component.description',
        ],
        'media'      => [
            'name'        => 'anomaly.module.blocks::category.media.name',
            'description' => 'anomaly.module.blocks::category.media.description',
        ],
        'module'     => [
            'name'        => 'anomaly.module.blocks::category.module.name',
            'description' => 'anomaly.module.blocks::category.module.description',
        ],
        'social'     => [
            'name'        => 'anomaly.module.blocks::category.social.name',
            'description' => 'anomaly.module.blocks::category.social.description',
        ],
        'structural' => [
            'name'        => 'anomaly.module.blocks::category.structural.name',
            'description' => 'anomaly.module.blocks::category.structural.description',
        ],
        'other'      => [
            'name'        => 'anomaly.module.blocks::category.other.name',
            'description' => 'anomaly.module.blocks::category.other.description',
        ],
    ];

    /**
     * Register a category.
     *
     * @param $category
     * @param $name
     * @return $this
     */
    public function register($category, $name)
    {
        array_set($this->categories, $category, $name);

        return $this;
    }

    /**
     * Get the categories.
     *
     * @return array
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set the categories.
     *
     * @param array $categories
     * @return $this
     */
    public function setCategories(array $categories)
    {
        $this->categories = $categories;

        return $this;
    }

}
