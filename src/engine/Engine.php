<?php


interface Engine
{
    /**
     * Запускает всё приложение:
     * 1. Запускает контроллеры для выбора аудиофайлов
     * 2. Контроллеры отправляют данные на View, чтобы они показали текст для взаимодействия
     * 3. Контроллеры получают данные для выбора треков из View
     * 4. Обращаются к Engine, чтобы он обратился к FileCommunicator и получил коммуникатор
     *      AudioFileCommunicator для работы с аудиофайлом.
     * 5. AudioFileCommunicator получает данные аудио-файла по кускам и передает их на аудио
     *      утройство через AudioFileCommunicator
     * @return mixed
     */
        public function initialStart();
}