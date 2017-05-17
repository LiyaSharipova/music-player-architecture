<?php

/**
 * Класс для работы с единчным аудио-файлом
 */
interface AudioFileCommunicator
{

    /**
     * Получает данные аудио-файла с помощью реализации FileStorageDriverCommunicator
     * @param int $offset смещение в потоке байтов относительно начала аудио-файла
     * @return array байты аудио-данных
     */
    public function readData(int $offset): array;

    /**
     * @return array мета-данные аудио-файла
     */
    public function extractMetaInfo(): array;
}