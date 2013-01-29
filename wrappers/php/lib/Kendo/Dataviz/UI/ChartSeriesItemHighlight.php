<?php

namespace Kendo\Dataviz\UI;

class ChartSeriesItemHighlight extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The border of highlighted points. The color is computed automatically from the base point color.
    * @param \Kendo\Dataviz\UI\ChartSeriesItemHighlightBorder $value
    * @returns \Kendo\Dataviz\UI\ChartSeriesItemHighlight
    */
    public function border(\Kendo\Dataviz\UI\ChartSeriesItemHighlightBorder $value) {
        return $this->setProperty('border', $value);
    }

    /**
    * The highlight color.** Available only for pie series **
    * @param string $value
    * @returns \Kendo\Dataviz\UI\ChartSeriesItemHighlight
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * Line options for highlighted points. The color is computed automatically from the base point color.** Available only for candlestick series **
    * @param \Kendo\Dataviz\UI\ChartSeriesItemHighlightLine $value
    * @returns \Kendo\Dataviz\UI\ChartSeriesItemHighlight
    */
    public function line(\Kendo\Dataviz\UI\ChartSeriesItemHighlightLine $value) {
        return $this->setProperty('line', $value);
    }

    /**
    * The opacity of the highlighted points.
    * @param float $value
    * @returns \Kendo\Dataviz\UI\ChartSeriesItemHighlight
    */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

//<< Properties
}

?>
