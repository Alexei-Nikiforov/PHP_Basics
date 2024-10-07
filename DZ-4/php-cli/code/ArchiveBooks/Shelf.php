<?php

class Shelf
{
  //ID шкафа
  private int $shelfId;
  //ID помешения
  private int $roomId;
  //Вместимость шкафа
  private int $volume;
  //Список книг, находящихся в шкафу
  private array $books;

  public function __construct(int $shelfId, int $roomId, int $volume, array $books) {
    $this->shelfId = $shelfId;
    $this->roomId = $roomId;
    $this->volume = $volume;
    $this->books = $books;
  }

  public function getShelfId(): int {
    return $this->shelfId;
  }

  public function getRoomId(): int {
    return $this->roomId;
  }

  public function getVolume(): int {
    return $this->volume;
  }

  public function getBooksFromShelf(): array {
    return $this->books;
  }

  // Возвращает количество книг, находящихся в шкафу
  public function getCountBooks() {
    return count($this->books);
  }

  // Метод размещения книги в шкаф
  public function placeBookInShelf(PaperBook $book) {
    $shelfIdForBook = $book->getShelfId();
    if (($this->getShelfId() === $shelfIdForBook) && ($this->getCountBooks() + 1 <= $this->getVolume())) {
      $this->books[] = $book;
      echo 'Книга ' . $book->getName() . ' размещена в шкафу ' . $this->getShelfId() . PHP_EOL;
    } else {
      echo 'Шкаф № ' . $this->getShelfId() . ' заполнен' . PHP_EOL;
    }
  }

  // Метод удаления книги из шкафа
  public function takeBook(PaperBook $book) {
    if (($this->getShelfId() === $book->getShelfId())) {
      unset($this->books[$this->getShelfId()]);
      echo 'Книга ' . $book->getName() . ' удалена из шкафа ' . $this->getShelfId() . PHP_EOL;
    } else {
      echo 'Книги ' . $book->getName() . ' нет в шкафу' . $this->getShelfId() . PHP_EOL;
    }
  }
}