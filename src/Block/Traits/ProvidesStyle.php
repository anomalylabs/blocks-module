<?php namespace Anomaly\BlocksModule\Block\Traits;

/**
 * Class ProvidesStyle
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
trait ProvidesStyle
{

    /**
     * Get the slug based on the parent.
     *
     * @return string
     */
    public function getSlug()
    {
        $segments = explode('\\', preg_replace("/FieldType$/", '', parent::class));

        return strtolower($segments[2]);
    }

    /**
     * Get the namespace using our slug.
     *
     * @param null $key
     * @return string
     */
    public function getNamespace($key = null)
    {
        return 'anomaly.field_type.' . $this->getSlug() . ($key ? '::' . $key : $key);
    }
}
