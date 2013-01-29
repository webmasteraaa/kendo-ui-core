<?php

namespace Kendo\Data;

class DataSourceGroupItemAggregate extends \kendo\SerializableObject {
//>> Properties

    /**
    * Specifies the field on which the aggregate will be calculated.
    * @param string $value
    * @returns \Kendo\Data\DataSourceGroupItemAggregate
    */
    public function field($value) {
        return $this->setProperty('field', $value);
    }

    /**
    * Specifies the aggregate function. Possible values are: "min", "max", "count", "sum", "average"
    * @param string $value
    * @returns \Kendo\Data\DataSourceGroupItemAggregate
    */
    public function aggregate($value) {
        return $this->setProperty('aggregate', $value);
    }

//<< Properties
}

?>
