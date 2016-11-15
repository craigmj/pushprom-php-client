<?php

namespace pushprom;

class Summary extends Metric
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
