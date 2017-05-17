<?php

/**
 * Обеспечивает ввод и вывод данных через консоль
 */
interface ViewProcessor
{
    /**
     * Вывод даных на консоль
     * @param array $dataDtos массив данных
     */
    public function printDataToConsole(array $dataDtos);

    /**
     * Получение данных с консоли.
     * Метод все время вызывается из контоллера и "слушается" на момент появления данных.
     * Данные обрабатываются в контроллере
     * @return array данные с консоли, массив экземпляров класса DataDto
     */
    public function receiveDataFromConsole(): array;
}