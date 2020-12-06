<?php

namespace Build\Validation\Mode;

class DataMode
{

    private $datar = [];

    public function __call($name, $arguments)
    {
        $method = substr($name, 0, 3);

        $mode = substr($name, 3, strlen($name));

        switch ($method) {

            case 'get':
                return (isset($this->datar[$mode])) ? $this->datar[$mode] : NULL;
                break;
            case 'set':
                $this->datar[$mode] = $arguments[0];
                break;
        }
    }

    public function setData($data = array())
    {
        foreach ($data as $key => $value) {
            $this->{"set" . $key}($value);
        }
    }

    public function getValue()
    {
        return $this->register;
    }
}
