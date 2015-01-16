<?php
namespace samson\cms\input;

/**
 * Generic SamsonCMS input field
 * @author Vitaly Iegorov<egorov@samsonos.com>
 *
 */
class Number extends Field
{
    public $cssclass = '__number';

    public function numericValue($input)
    {
        // Convert to timestamp
        return (double)$input;
    }
}
