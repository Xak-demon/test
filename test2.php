<?php
class Excavator{
    public $map;
    protected $pos;
    public function __construct($map){
        $this->map = $map;
        $this->pos = 0;
    }

    public function move($stop){
        $this->pos = strpos($this->map, $stop, $this->pos) + strlen($stop);
    }

    public function excavate($stop){
        $start = $this->pos;
        $this->move($stop);

        for($i = $start; $i < $this->pos - strlen($stop); $i++){
            $this->map[$i] = '_';
        }
    }
}

$ex1 = new Excavator('--------e--------------b------');
$ex1->move('e');
$ex1->excavate('b');
echo $ex1->map;