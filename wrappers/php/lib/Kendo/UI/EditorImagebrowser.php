<?php

namespace Kendo\UI;

class EditorImagebrowser extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the allowed file extensions.
    * @param string $value
    * @returns \Kendo\UI\EditorImagebrowser
    */
    public function fileTypes($value) {
        return $this->setProperty('fileTypes', $value);
    }

    /**
    * Defines the initial folder to display, relative to the root.
    * @param string $value
    * @returns \Kendo\UI\EditorImagebrowser
    */
    public function path($value) {
        return $this->setProperty('path', $value);
    }

    /**
    * Specifies the settings for loading and saving data.
    * @param \Kendo\UI\EditorImagebrowserTransport $value
    * @returns \Kendo\UI\EditorImagebrowser
    */
    public function transport(\Kendo\UI\EditorImagebrowserTransport $value) {
        return $this->setProperty('transport', $value);
    }

    /**
    * Set the object responsible for describing the image raw data format.
    * @param \Kendo\UI\EditorImagebrowserSchema $value
    * @returns \Kendo\UI\EditorImagebrowser
    */
    public function schema(\Kendo\UI\EditorImagebrowserSchema $value) {
        return $this->setProperty('schema', $value);
    }

    /**
    * Defines texts shown within the pager.
    * @param \Kendo\UI\EditorImagebrowserMessages $value
    * @returns \Kendo\UI\EditorImagebrowser
    */
    public function messages(\Kendo\UI\EditorImagebrowserMessages $value) {
        return $this->setProperty('messages', $value);
    }

//<< Properties
}

?>
