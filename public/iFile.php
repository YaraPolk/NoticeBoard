<?php

interface iFile
{
    public function __construct($filePath);

    public function getPath(); // путь к файлу
    public function getDir(); // папка файла
    public function getName(); // имя файла
    public function getExt(); // расширение файла
    public function getSize(); // размер файла

    public function getText(); // текст файла
    public function setText($text); // тест для файла
    public function appendText($text); // текст в конец файла

    public function copy($copyPatch); // копирует файл
    public function delete(); // удаляет файл
    public function rename($newName); // переименовать файл
    public function replace($newPatch); //перемещает файл
}