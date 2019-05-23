<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2019-04-29
 * Time: 09:12
 */

namespace Rxlisbest\PhpDate\Classes;

use Rxlisbest\PhpDate\Interfaces\StandardInterface;
use Rxlisbest\PhpDate\Interfaces\WeekInterface;

class Week extends Base implements StandardInterface, WeekInterface
{
    protected $diff = 0;

    public function __construct($string = 0)
    {
        parent::__construct($string);

    }

    public function today()
    {
        $this->outputTimestamp = $this->timestamp;
        return $this->output();
    }

    public function begin()
    {
        $this->diff = 0;
        return $this->calculate();
    }

    public function end()
    {
        $this->diff = 6;
        return $this->calculate();
    }

    public function sunday()
    {
        $this->diff = 0;
        return $this->begin();
    }

    public function monday()
    {
        $this->diff = 1;
        return $this->calculate();
    }

    public function tuesday()
    {
        $this->diff = 2;
        return $this->calculate();
    }

    public function wednesday()
    {
        $this->diff = 3;
        return $this->calculate();
    }

    public function thursday()
    {
        $this->diff = 4;
        return $this->calculate();
    }

    public function friday()
    {
        $this->diff = 5;
        return $this->calculate();
    }

    public function saturday()
    {
        return $this->end();
    }

    protected function calculate()
    {
        $this->outputTimestamp = $this->timestamp - ((date('w', $this->timestamp)) - $this->diff) * 24 * 3600;
        return $this->output();
    }
}