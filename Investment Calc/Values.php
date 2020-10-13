<?php

class Values
{
    private int $amount;
    private int $duration;
    private int $percentage;

    public function __construct(int $amount, int $duration, int $percentage)
    {

        $this->amount = $amount;
        $this->duration = $duration;
        $this->percentage = $percentage;
    }


    public function interest():int
    {
            $values = $this->amount;
        for ($i=1; $i<= $this->duration; $i++)
        {
            $values += $values / 100 * $this->percentage;
            echo 'After: ' . $i . 'Years: ' . number_format($values, 2) . '$'. '<br>';
        }
    }

}