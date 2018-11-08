<?php namespace Anomaly\BlocksModule\Block\Traits;

/**
 * Class ProvidesStyle
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

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

    /**
     * Get the presenter.
     *
     * @return FieldTypePresenter
     */
    public function getPresenter()
    {
        if (!$this->presenter) {
            $this->presenter = parent::class . 'Presenter';
        }

        if (!class_exists($this->presenter)) {
            $this->presenter = FieldTypePresenter::class;
        }

        return app()->make($this->presenter, ['object' => $this]);
    }

    /**
     * Return the CSS attribute and value.
     *
     * @return string
     */
    public function css()
    {
        $name = snake_case(str_replace('FieldType', '', (new \ReflectionClass($this))->getShortName()));

        return str_replace('_', '-', $name . ': ' . $this->getValue() . ';');
    }
}
