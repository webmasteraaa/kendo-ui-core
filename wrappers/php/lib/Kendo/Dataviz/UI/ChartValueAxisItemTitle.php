<?php

namespace Kendo\Dataviz\UI;

class ChartValueAxisItemTitle extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The background color of the title. Any valid CSS color string will work here, including
hex and rgb.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\ChartValueAxisItemTitle
    */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
    * The border of the title.
    * @param \Kendo\Dataviz\UI\ChartValueAxisItemTitleBorder $value
    * @returns \Kendo\Dataviz\UI\ChartValueAxisItemTitle
    */
    public function border(\Kendo\Dataviz\UI\ChartValueAxisItemTitleBorder $value) {
        return $this->setProperty('border', $value);
    }

    /**
    * The text color of the title. Any valid CSS color string will work here, including hex and rgb.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\ChartValueAxisItemTitle
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The font style of the title.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\ChartValueAxisItemTitle
    */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
    * The margin of the title.
    * @param float|Object $value
    * @returns \Kendo\Dataviz\UI\ChartValueAxisItemTitle
    */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
    * The padding of the title.
    * @param float|Object $value
    * @returns \Kendo\Dataviz\UI\ChartValueAxisItemTitle
    */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
    * The position of the title.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\ChartValueAxisItemTitle
    */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
    * The rotation angle of the title.
    * @param float $value
    * @returns \Kendo\Dataviz\UI\ChartValueAxisItemTitle
    */
    public function rotation($value) {
        return $this->setProperty('rotation', $value);
    }

    /**
    * The text of the title.
    * @param string $value
    * @returns \Kendo\Dataviz\UI\ChartValueAxisItemTitle
    */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
    * The visibility of the title.
    * @param boolean $value
    * @returns \Kendo\Dataviz\UI\ChartValueAxisItemTitle
    */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

//<< Properties
}

?>
