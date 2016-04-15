<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./View/AbstractView.php
 */
namespace JaegerApp\Platforms\View;

use JaegerApp\Traits\View\Helpers As ViewHelpers;

/**
 * Jaeger - View Abstraction
 *
 * Contains the view helpers for ExpressionEngine
 *
 * @package BackupPro\View
 * @author Eric Lamb <eric@mithra62.com>
 */
abstract class AbstractView implements ViewInterface
{
    use ViewHelpers; 
}