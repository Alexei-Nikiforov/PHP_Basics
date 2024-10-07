<?php

class Room
{
  //ID помешения
  private int $roomId;
  //Шкаф с книгами
  private Shelf $bookShelf;

  public function __construct($roomId, Shelf $bookShelf) {
    $this->roomId = $roomId;
    $this->bookShelf = new Shelf($bookShelf->getShelfId(), $bookShelf->getRoomId(), $bookShelf->getVolume(), $bookShelf->getBooksFromShelf());
  }

  public function getRoomId(): int {
    return $this->roomId;
  }

  public function __toString() {
    return 'Помещение №' . $this->roomId;
  }

  // Метод получения объекта шкафа в помещении
  public function getBookShelf(): Shelf {
    return $this->bookShelf;
  }
}