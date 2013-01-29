<?php

namespace Kendo\UI;

class ComboBoxAnimation extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Animation to be used for closing of the popup.
    * @param \Kendo\UI\ComboBoxAnimationClose $value
    * @returns \Kendo\UI\ComboBoxAnimation
    */
    public function close(\Kendo\UI\ComboBoxAnimationClose $value) {
        return $this->setProperty('close', $value);
    }

    /**
    * Animation to be used for opening of the popup.
    * @param \Kendo\UI\ComboBoxAnimationOpen $value
    * @returns \Kendo\UI\ComboBoxAnimation
    */
    public function open(\Kendo\UI\ComboBoxAnimationOpen $value) {
        return $this->setProperty('open', $value);
    }

//<< Properties
}

?>
