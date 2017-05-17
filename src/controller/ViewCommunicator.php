<?php

/**
 *
 */
interface ViewCommunicator
{
    /**
     * Отправка данных на View
     * @param array $datatoViewDtos массив данных, для отправки на View
     */
    public function sendDataToView(array $datatoViewDtos);
}