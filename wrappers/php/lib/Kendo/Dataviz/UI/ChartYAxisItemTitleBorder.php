<?php

namespace Kendo\Dataviz\UI;

class ChartYAxisItemTitleBorder extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The color of the border.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\ChartYAxisItemTitleBorder
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The dash type of the border.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\ChartYAxisItemTitleBorder
    */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
    * The width of the border.
    * @param float $value
    * @returns \Kendo\Dataviz\UI\ChartYAxisItemTitleBorder
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
