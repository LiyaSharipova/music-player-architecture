<?php


interface Engine
{
    /**
     * Запускает всё приложение:
     * Подробности в файле README.md в главе Порядок работы
     * @return mixed
     */
        public function initialStart();
}