<?php

namespace Kendo\Dataviz\UI;

class StockChartPane extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The unique pane name.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\StockChartPane
    */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
    * The margin of the pane.
    * @param float|Object $value
    * @returns \Kendo\Dataviz\UI\StockChartPane
    */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
    * The padding of the pane.
    * @param float|Object $value
    * @returns \Kendo\Dataviz\UI\StockChartPane
    */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
    * The background color of the pane.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\StockChartPane
    */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
    * The border of the pane.
    * @param \Kendo\Dataviz\UI\StockChartPaneBorder $value
    * @returns \Kendo\Dataviz\UI\StockChartPane
    */
    public function border(\Kendo\Dataviz\UI\StockChartPaneBorder $value) {
        return $this->setProperty('border', $value);
    }

    /**
    * The pane height in pixels.
    * @param float $value
    * @returns \Kendo\Dataviz\UI\StockChartPane
    */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
    * The pane title text or configuration.
    * @param string|\Kendo\Dataviz\UI\StockChartPaneTitle $value
    * @returns \Kendo\Dataviz\UI\StockChartPane
    */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

//<< Properties
}

?>
