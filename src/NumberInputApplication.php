<?php
/**
 * Created by Maxim Omelchenko <omelchenko@samsonos.com>
 * on 31.03.2015 at 19:18
 */

namespace samsoncms\input\number;

class NumberInputApplication extends \samsoncms\input\InputApplication
{
    protected $id = 'samson_cms_input_number';

    /**
     * Create field class instance
     *
     * @param string|\samson\activerecord\dbRecord $entity Class name or object
     * @param string|null $param $entity class field
     * @param int $identifier Identifier to find and create $entity instance
     * @param \samson\activerecord\dbQuery|null $dbQuery Database object
     * @return self
     */
    public function createField($entity, $param = null, $identifier = null, $dbQuery = null)
    {
        $this->field = new Number($entity, $param, $identifier, $dbQuery);
        return $this;
    }
}
