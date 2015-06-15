<?php
namespace samsoncms\input\number;

use samsoncms\input\Field;

/**
 * Number SamsonCMS input field
 * @author Vitaly Iegorov <egorov@samsonos.com>
 * @author Maxim Omelchenko <omelchenko@samsonos.com>
 */
class Number extends Field
{
    /** @var string Special CSS classname for nested field objects to bind JS and CSS */
    public $cssClass = '__number';

    /** Database object field name */
    protected $param = 'numeric_value';

    /**
     * Function to convert field value before save
     *
     * @param mixed $value Value to convert
     * @return float|int Converted value
     */
    public function convert($value)
    {
        // Convert to timestamp
        return (double)$value;
    }
}
