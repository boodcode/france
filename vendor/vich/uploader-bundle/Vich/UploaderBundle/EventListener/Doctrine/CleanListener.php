<?php

namespace Vich\UploaderBundle\EventListener\Doctrine;

use Doctrine\Common\EventArgs;

/**
 * CleanListener
 *
 * Listen to the update event to delete old files accordingly.
 *
 * @author Kévin Gomez <contact@kevingomez.fr>
 */
class CleanListener extends BaseListener
{
    /**
     * The events the listener is subscribed to.
     *
     * @return array The array of events.
     */
    public function getSubscribedEvents()
    {
        return array(
            'preUpdate',
        );
    }

    /**
     * @param EventArgs $event The event.
     */
    public function preUpdate(EventArgs $event)
    {
        $object = $this->adapter->getObjectFromArgs($event);

        if ($this->isUploadable($object)) {
            $this->handler->clean($object, $this->mapping);
            $this->adapter->recomputeChangeSet($event);
        }
    }
}
