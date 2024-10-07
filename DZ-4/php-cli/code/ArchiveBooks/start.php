<?php

require_once 'DigitalBook.php';
require_once 'PaperBook.php';
require_once 'Shelf.php';
require_once 'Room.php';

//Сделали книги
$pBook1 = new PaperBook('Сказки', 'Сказки', 2000, 1);
$pBook2 = new PaperBook('Басни', 'Басни', 2001, 1);
$pBook3 = new PaperBook('Поговорки', 'Поговорки', 2002, 1);
$dBook1 = new DigitalBook('Комиксы', 'Комиксы', 2003, 'http://comics.con');
$dBook2 = new DigitalBook('Хорор', 'Комиксы', 2003, 'http://comoic/horor.con');

//Сделали помещение №1, в котором есть шкаф №1 с объемом 2 книги
$room1 = new Room(1, new Shelf(1, 1, 2, []));
//Сделали помещение №2, в котором есть шкаф №1 с объемом 2 книги
$room2 = new Room(2, new Shelf(1, 2, 2, []));

// Помещаем книгу $pBook1 в помещение №1 и шкаф №1
$room1->getBookShelf()->placeBookInShelf($pBook1);
// Помещаем книгу $pBook2 в помещение №1 и шкаф №1
$room1->getBookShelf()->placeBookInShelf($pBook2);
// Помещаем книгу $pBook3 в помещение №2 и шкаф №1
$room2->getBookShelf()->placeBookInShelf($pBook3);

// Проверяем количество книг в помещение №1 и шкафу №1
echo 'Количество книг в шкафу №' . $room1->getBookShelf()->getShelfId() . ': ' . $room1->getBookShelf()->getCountBooks() . PHP_EOL;

// Проверяем количество книг в помещение №2 и шкафу №1
echo 'Количество книг в шкафу №' . $room2->getBookShelf()->getShelfId() . ': ' . $room2->getBookShelf()->getCountBooks() . PHP_EOL;

// Выдаем книгу №2 на руки
echo $pBook2->takeBook('Иванов И.И.') . PHP_EOL;

// Удаляем книгу $pBook2 из помещения №1 и шкафа №1
$room1->getBookShelf()->takeBook($pBook2);

// Проверяем количество книг в помещение №1 и шкафу №1
echo 'Количество книг в шкафу №' . $room1->getBookShelf()->getShelfId() . ': ' . $room1->getBookShelf()->getCountBooks() . PHP_EOL;

// Проверяем количество книг в помещение №2 и шкафу №1
echo 'Количество книг в шкафу №' . $room2->getBookShelf()->getShelfId() . ': ' . $room2->getBookShelf()->getCountBooks() . PHP_EOL;

// Возврат книги от читателя
echo $pBook2->returnBook('Иванов И.И') . PHP_EOL;

// Помещаем книгу $pBook2 в помещение №2 и шкаф №1
$room2->getBookShelf()->placeBookInShelf($pBook2);

// Проверяем количество книг в помещение №1 и шкафу №1
echo 'Количество книг в шкафу №' . $room1->getBookShelf()->getShelfId() . ': ' . $room1->getBookShelf()->getCountBooks() . PHP_EOL;

// Проверяем количество книг в помещение №2 и шкафу №1
echo 'Количество книг в шкафу №' . $room2->getBookShelf()->getShelfId() . ': ' . $room2->getBookShelf()->getCountBooks() . PHP_EOL;
