<?php


/**
 * Класс взаимодействия с GUI
 * Получает данные при нажатии на кнопки
 * Отправляет данные для отображения на GUI
 */
interface ViewController
{
    /**
     * Отправка данных на View
     * @param array $datatoViewDtos массив данных, для отправки на View
     */
    public function sendDataToView(array $datatoViewDtos);

    /**
     * Отправляет начальные данные на View->printDataToConsole(), для дальнейшего вывода на консоль и выбора трека
     * @return mixed
     */
    public function sendInitialInfo();
}