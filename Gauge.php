<?php

namespace pushprom;

class Gauge extends Metric
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

    function dec()
    {
        return $this->pushDelta(
            array(
                "method" => "dec",
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

    function sub($value)
    {
        return $this->pushDelta(
            array(
                "value"  => $value,
                "method" => "sub",
            )
        );
    }
}
