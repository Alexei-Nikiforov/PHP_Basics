<?php

require_once "Book.php";

class PaperBook extends Book
{
  //ID шкафа
  private int $shelfId;
  // для подсчета количества прочтений
  private int $countRead = 0;

  public function __construct(string $name, string $genre, int $yearRelease, int $shelfId) {
    parent::__construct($name, $genre, $yearRelease);
    $this->shelfId = $shelfId;
  }

  public function getShelfId() {
    return $this->shelfId;
  }

  public function setShelfId(int $shelfId) {
    $this->shelfId = $shelfId;
  }

  // Метод выдачи книги (взять книгу)
  public function takeBook(string $name): string {
    return 'Книга: ' . $this->getName() . ', жанр: ' . $this->getGenre() . ', год выхода: ' . $this->getYearRelease() . ', получена пользователем ' . $name . ' Количество прочтений: ' . ++$this->countRead;
  }

  // Метод возврата книги
  public function returnBook(string $name): string {
    return 'Книга: ' . $this->getName() . ', жанр: ' . $this->getGenre() . ', год выхода: ' . $this->getYearRelease() . ', возвращена пользователем ' . $name;
  }
}