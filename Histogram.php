<?php

namespace pushprom;

class Histogram extends Metric
{
    function observe($value)
    {
        return $this->pushDelta(
            array(
                "value"  => $value,
                "method" => "observe",
            )
        );
    }
}
