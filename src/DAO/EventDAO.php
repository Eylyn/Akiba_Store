<?php

namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Event;

class EventDAO extends DAO
{
    private function buildObject($row)
    {
        $event = new Event();
        $event->setId($row['id']);
        $event->setEventName($row['eventName']);
        $event->setEventDate($row['eventDate']);
        $event->setDescription($row['description']);
        $event->setPrice($row['price']);
        $event->setTags($row['tags']);

        return $event;
    }

    public function getEvents()
    {
        $sql = 'SELECT id, eventName, DATE_FORMAT(eventDate, \'%d/%m/%Y à %Hh%imin\') as eventDate,  description, price, tags FROM event ORDER BY eventDate LIMIT 0, 5';
        $result = $this->createQuery($sql);
        $events = [];
        foreach ($result as $row) {
            $eventId = $row['id'];
            $events[$eventId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $events;
    }
}