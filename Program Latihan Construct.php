<?php
class komputer
{
    public $prosesor;
    public $memory;

    public function __construct($prosesor,$memory = "12 Gb")
    {
        $this->prosesor = $prosesor;
        $this->memory = $memory;
    }

}

$komputerSaya = new komputer("Core i7","8 GB");
echo $komputerSaya->prosesor;
echo " | ";
echo $komputerSaya->memory;
?>