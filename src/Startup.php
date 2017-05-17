<?php

/**
 * Запуск приложения
 */
interface Startup
{
    /**
     * Запускается приложение
     * @param $dirPath string папка с треками, которые будут воспроизведены
     * Вызывает Engine->initialStart()
     * @return mixed
     */
    public function start(string $dirPath);
}