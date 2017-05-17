<?php


interface Engine
{
    /**
     * Запускает всё приложение, вся работа происходит здесь
     * Подробности в файле README.md в главе Порядок работы
     * @return mixed
     */
        public function initialStart(string $dirPath);
}