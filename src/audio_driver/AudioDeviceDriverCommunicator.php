<?php

/**
 * Коммуникатор для общения с драйвером,
 * обеспечивающий передачу сигналов аудио-устройствам
 */
interface AudioDeviceDriverCommunicator
{

    /**
     * Отправить аудио-сигналы для воспроизведения на устройстве
     * @param array $signals
     * @return bool
     */
    public function sendAudioSignal(array $signals): bool;

    /**
     * Зарегистрировать устройство, передав ему массив различных данных типа String
     * @param array $data
     * @return array возвращает данные об устройстве
     */
    public function initialize(array $data): array;

    /**
     * Получить различные мета-данные, чтобы узнать статус устройства
     * @return array возвращает данные об устройстве
     */
    public function receiveDeviceInfo(): array ;

}