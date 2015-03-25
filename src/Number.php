<?php
namespace samsoncms\input\number;

use samsoncms\input\Field;

/**
 * Generic SamsonCMS input field
 * @author Vitaly Iegorov<egorov@samsonos.com>
 *
 */
class Number extends Field
{
    /** @var  int Field type identifier */
    protected static $type = 7;

    /** @var string Module identifier */
    protected $id = 'samson_cms_input_number';

    /** @var string Special CSS classname for nested field objects to bind JS and CSS */
    public $cssClass = '__number';

    public function numericValue($input)
    {
        // Convert to timestamp
        return (double)$input;
    }
}
