<?php
ini_set('error_reporting', E_ALL);
class myClass
{
    private $status;

    public function getStatus($status){
        $pinch = 'Ghbdtn';
        return array_map(function($status) use ($pinch){
            return $pinch . "Миру" . $status;
        };
    }
}
$beer = 'tuborg';
switch($beer)
{
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Хороший выбор';
    break;
    default;
        echo 'Пожалуйста, сделайте новый выбор...';
    break;
}
$greet = new myClass;
var_dump($greet->getStatus('VBH'));
?>
