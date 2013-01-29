<?php

namespace Kendo\UI;

class EditorImagebrowserSchemaModelFieldsSize extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The name of the field.
    * @param string $value
    * @returns \Kendo\UI\EditorImagebrowserSchemaModelFieldsSize
    */
    public function field($value) {
        return $this->setProperty('field', $value);
    }

    /**
    * Sets the parse option of the EditorImagebrowserSchemaModelFieldsSize.
    * Specifies the function which will parse the field value. If not set default parsers will be used.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @returns \Kendo\UI\EditorImagebrowserSchemaModelFieldsSize
    */
    public function parse($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('parse', $value);
    }

//<< Properties
}

?>
