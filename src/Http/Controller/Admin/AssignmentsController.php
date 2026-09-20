<?php namespace Anomaly\BlocksModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Support\Authorizer;

/**
 * Class AssignmentsController
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AssignmentsController extends \Anomaly\Streams\Platform\Http\Controller\AssignmentsController
{

    /**
     * The assignments namespace.
     *
     * @var string
     */
    protected $namespace = 'blocks';

    /**
     * Create a new AssignmentsController instance.
     *
     * @param Authorizer $authorizer
     */
    public function __construct(Authorizer $authorizer)
    {
        parent::__construct();

        $this->middleware(
            function ($request, $next) use ($authorizer) {
                if (!$authorizer->authorize('anomaly.module.blocks::types.fields')) {
                    abort(403);
                }

                return $next($request);
            }
        );
    }
}
