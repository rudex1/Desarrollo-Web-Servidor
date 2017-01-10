<?php

use testnamespace\Author as Author;
//use testnamespace\Author\Author;
//use testnamespace\Book;

$author = new Author();
$author->setFirstName("Koxme");

$book = new Book();
$book->setTitle("PHP book");
$book->setPrice(100);
$book->author($author);
?>
