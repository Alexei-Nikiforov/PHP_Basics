<?php

abstract class Book
{
  //Название книги
  private string $name;
  //Жанр книги
  private string $genre;
  //Год выхода
  private int $yearRelease;

  public function __construct(string $name, string $genre, int $yearRelease) {
    $this->name = $name;
    $this->genre = $genre;
    $this->yearRelease = $yearRelease;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getGenre(): string {
    return $this->genre;
  }

  public function getYearRelease(): int {
    return $this->yearRelease;
  }

  //метод взять книгу
  abstract public function takeBook(string $name): string;
}