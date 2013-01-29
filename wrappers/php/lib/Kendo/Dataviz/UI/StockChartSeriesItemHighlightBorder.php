<?php

namespace Kendo\Dataviz\UI;

class StockChartSeriesItemHighlightBorder extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The width of the border.
    * @param float $value
    * @returns \Kendo\Dataviz\UI\StockChartSeriesItemHighlightBorder
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
    * The border color.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\StockChartSeriesItemHighlightBorder
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The border opacity.
    * @param float $value
    * @returns \Kendo\Dataviz\UI\StockChartSeriesItemHighlightBorder
    */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

//<< Properties
}

?>
