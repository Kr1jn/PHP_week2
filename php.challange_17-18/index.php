<?php

class person {
    public $name;
    public $name_t;
    public $name_l;
    public function __construct($n, $l, $t = ''){
        $this->name = $n;
        $this->name_t = $t;
        $this->name_l = $l;
    }

    public function get_data(){
        return array($this->name, $this->name_t, $this->name_l);
    }
}
class student extends person {
    private $class;
    function __construct($c, $n, $l, $t = '') {
        $this->class = $c;
        parent::__construct($n, $l, $t);
    }
    public function get_data () {
        $data = parent::get_data ();
        array_push($data, $this->class);
        return $data;
    }
}
$me = new person('1wdv1', 'van den Berg<br>', 'Krijn');
$you = new student ('1wdv2', 'Niels', 'Oostindie');
echo 'i am: '.$me->get_data()[0].' '.$me->get_data()[1].' '.$me->get_data()[2];
echo 'you are: '.$you->get_data()[0].''.$you->get_data()[1].' from '.$you->get_data()[3];