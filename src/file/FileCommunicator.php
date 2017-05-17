<?php

require_once __DIR__ . "/AudioFileCommunicator.php";
/**
 * Класс для обеспечения взайимодействия с музыкой на
 * хранилище данных: диск, флэшка и т.д.
 */
interface FileCommunicator
{
    /**
     * Получить коммуникатор для работы с файлом
     * @param String $filePath путь до аудио-файла
     * @return AudioFileCommunicator коммуникатор аудио-файла
     */
    public function receiveAudioFileCommunicator(String $filePath): AudioFileCommunicator;

    /**
     * Получить массив ссылок на аудиофайлы в указанной директории
     * @param String $directoryPath ссылка  на папку, в которой содержатся файлы
     * @return array массив ссылок до файлов в указанной директории
     */
    public function receiveListOfFiles(String $directoryPath): array ;
}