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
        $event->setEventDescription($row['eventDescription']);
        $event->setPrice($row['price']);
        $event->setTags($row['tags']);

        return $event;
    }

    public function getEvents()
    {
        $sql = 'SELECT id, eventName, DATE_FORMAT(eventDate, \'%d/%m/%Y à %Hh%imin\') as eventDate, eventDescription, price, tags FROM event ORDER BY eventDate LIMIT 0, 5';
        $result = $this->createQuery($sql);
        $events = [];
        foreach ($result as $row) {
            $eventId = $row['id'];
            $events[$eventId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $events;
    }

    public function getEvent($eventId)
    {
        $sql = 'SELECT id, eventName, DATE_FORMAT(eventDate, \'%d/%m/%Y à %Hh%imin\') as eventDate, eventDescription, price, tags FROM event WHERE id = ?';
        $result = $this->createQuery($sql, [$eventId]);
        $event = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($event);
    }
}