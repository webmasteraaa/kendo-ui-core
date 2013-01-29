<?php

namespace Kendo\Dataviz\UI;

class StockChartCategoryAxisItemLabelsBorder extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The color of the border. Any valid CSS color string will work here, including hex and rgb.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\StockChartCategoryAxisItemLabelsBorder
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The dash type of the border.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\StockChartCategoryAxisItemLabelsBorder
    */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
    * The width of the border.
    * @param float $value
    * @returns \Kendo\Dataviz\UI\StockChartCategoryAxisItemLabelsBorder
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
