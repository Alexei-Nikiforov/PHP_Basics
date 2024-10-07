<?php

require_once "Book.php";

class DigitalBook extends Book
{
  //Адрес ссылки для скачивания электронной книги
  private string $url;
  // Для расчета количества скачиваний
  private int $countDownload = 0;

  public function __construct(string $name, string $genre, int $yearRelease, string $url) {
    parent::__construct($name, $genre, $yearRelease);
    $this->url = $url;
  }

  // Метод скачивания книги (взять книгу)
  public function takeBook(string $name): string {
    return 'Книга ' . $this->getName() . ', жанр: ' . $this->getGenre() . ', год выхода: ' . $this->getYearRelease() . ', (' . $this->url . '), скачана пользователем ' . $name . ' Количество скачиваний книги: ' . ++$this->countDownload;
  }
}