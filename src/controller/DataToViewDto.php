<?php


class DataToViewDto
{
    private $data;
    private $type;
    private $destindationOnView;

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
        $this->destindationOnView = $destindationOnView;
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
    public function getDestindationOnView()
    {
        return $this->destindationOnView;
    }

    /**
     * @param mixed $destindationOnView
     */
    public function setDestindationOnView($destindationOnView)
    {
        $this->destindationOnView = $destindationOnView;
    }


}