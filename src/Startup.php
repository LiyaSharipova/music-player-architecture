<?php

/**
 * Обеспечивает приложение
 */
interface Startup
{
    /**
     * Запускается приложение
     * Вызывает Engine->initialStart()
     * @return mixed
     */
    public function start();
}