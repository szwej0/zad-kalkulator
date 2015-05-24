<?php

namespace kustra88\Tools\Strings;

class Convert
{
   private $text;
   
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }
    public function getText()
    {
        return $this->text;
    }
    public function toLower()
    {
        return strtolower($this->text);
    }
    public function toUpper()
    {
        return strtoupper($this->text);
    }
    public function ucfirst()
    {
        return ucfirst($this->text);
    }
}
