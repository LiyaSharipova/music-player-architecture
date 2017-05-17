<?php

require_once __DIR__ . "/DataToViewDto.php";

/**
 * Класс взаимодействия с GUI
 * Получает данные при нажатии на кнопки
 * Отправляет данные для отображения на GUI
 */
interface ViewCommunicator
{
    /**
     * Отправка данных на View
     * @param array $datatoViewDtos массив данных, для отправки на View
     */
    public function sendDataToView(array $datatoViewDtos);
}