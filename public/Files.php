<?php

class Files implements iFile
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = __DIR__ . $filePath;
    }

    public function getPath(): string
    {
        return realpath($this->filePath);
    }

    public function getDir(): string
    {
        return dirname($this->filePath);
    }

    public function getName(): string
    {
        return basename($this->filePath);
    }

    public function getExt(): string
    {
        return pathinfo($this->filePath)['extension'];
    }

    public function getSize(): string
    {
        return filesize($this->filePath) . ' bytes';
    }

    public function getText()
    {
        return file_get_contents($this->filePath);
    }

    public function setText($text): void
    {
        file_put_contents($this->filePath, $text);
    }

    public function appendText($text): void
    {
        file_put_contents($this->filePath, $this->getText() . $text);
    }

    public function copy($copyPatch): void
    {
        copy($this->filePath, $copyPatch);
    }

    public function delete():void
    {
        unlink($this->filePath);
    }

    public function rename($newName): void
    {
        rename($this->filePath, $newName);
    }

    public function replace($newPatch): void
    {
        rename($this->filePath, $newPatch);
    }
}