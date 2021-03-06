<?php


class DataDto
{
    /**
     * @var mixed Данные для отображения
     */
    private $data;

    /**
     * @var string Тип данных для отображения.
     * В зависимости от него данные будут отображаться по разному
     */
    private $type;

    /**
     * @var string Где должны отображаться данные.
     * Определяет порядок и место в строке, которая выводится на консоли
     */
    private $destinationOnView;

    /**
     * DataToViewDto constructor.
     * @param $data
     * @param $type
     * @param $destindationOnView
     */
    public function __construct($data, $type, $destindationOnView)
    {
        $this->data = $data;
        $this->type = $type;
        $this->destinationOnView = $destindationOnView;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getDestinationOnView()
    {
        return $this->destinationOnView;
    }

    /**
     * @param mixed $destinationOnView
     */
    public function setDestinationOnView($destinationOnView)
    {
        $this->destinationOnView = $destinationOnView;
    }


}