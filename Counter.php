<?php

namespace pushprom;

class Counter extends Metric
{
    function set($value)
    {
        return $this->pushDelta(
            array(
                "value"  => $value,
                "method" => "set",
            )
        );
    }

    function inc()
    {
        return $this->pushDelta(
            array(
                "method" => "inc",
            )
        );
    }

    function add($value)
    {
        return $this->pushDelta(
            array(
                "value"  => $value,
                "method" => "add",
            )
        );
    }
}
