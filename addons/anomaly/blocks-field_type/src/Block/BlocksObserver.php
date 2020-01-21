<?php

namespace Anomaly\BlocksFieldType\Block;

use Anomaly\Streams\Platform\Entry\EntryObserver;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Class BlocksObserver
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class BlocksObserver extends EntryObserver
{

    /**
     * Run after a record has been deleted.
     *
     * @param EntryInterface $entry
     */
    public function deleted(EntryInterface $entry)
    {
        
        parent::deleted($entry);
    }
}
