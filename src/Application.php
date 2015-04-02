<?php
/**
 * Created by Maxim Omelchenko <omelchenko@samsonos.com>
 * on 31.03.2015 at 19:18
 */

namespace samsoncms\input\number;


/**
 * SamsonCMS number input module
 * @author Maxim Omelchenko <omelchenko@samsonos.com>
 */
class Application extends \samsoncms\input\Application
{
    /** @var int Field type number */
    public static $type = 7;

    /** @var string SamsonCMS field class */
    protected $fieldClass = '\samsoncms\input\number\Number';
}
