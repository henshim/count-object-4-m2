<?php


class Application
{
    private $name;
    public static $count = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function __toString()
    {
        return 'Application name: ' . $this->name;
    }
}

echo 'total object count: '.Application::$count.'<br>';
$app1=new Application('App 1');
echo 'total object count: ' .Application::$count.'<br>';
$app2=new Application('App 2');
echo 'total object count: ' .Application::$count.'<br>';
echo $app1.'<br>';
echo $app2.'<br>';