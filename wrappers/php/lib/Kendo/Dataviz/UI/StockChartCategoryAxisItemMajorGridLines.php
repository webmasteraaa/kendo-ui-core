<?php

namespace Kendo\Dataviz\UI;

class StockChartCategoryAxisItemMajorGridLines extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The color of the lines. Any valid CSS color string will work here, including hex and rgb.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\StockChartCategoryAxisItemMajorGridLines
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The dash type of the grid lines.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\StockChartCategoryAxisItemMajorGridLines
    */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
    * The visibility of the lines.
    * @param boolean $value
    * @returns \Kendo\Dataviz\UI\StockChartCategoryAxisItemMajorGridLines
    */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
    * The width of the lines.
    * @param float $value
    * @returns \Kendo\Dataviz\UI\StockChartCategoryAxisItemMajorGridLines
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
