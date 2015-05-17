<?php

namespace kamilstrzelecki\Tools\Strings;

class Convert
{

    public $caption;
    
    public function setStr($caption)
    {
        $this->caption = $caption;
        return $this;
    }

    public function getStr()
    {
        return $this->caption;
    }
    
    
    public function toLower()
    {
       return strtolower($this->caption);
    }

    public function toUpper()
    {
        return strtoupper($this->caption);
    }

    public function ucfirst()
    {
        return ucfirst($this->caption);
    }
}
