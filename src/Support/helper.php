<?php

use Calenv\Support\Env;

/**
 * helpers 
 */

if ( ! function_exists('value')) {
	/**
	 * Return the default value of the given value.
	 *
	 * @param  mixed  $value
	 * @return mixed
	 */
    function value($value)
    {
		return $value instanceof Closure ? $value() : $value;
    }
}
if ( ! function_exists('env')) {
	/**
	 * Return the value of the .env config.
	 *
	 * @param  mixed  $key
	 * @param  mixed  $defalut
	 * @return mixed
	 */
	function env($key, $default = NULL)
	{
		return Env::get($key, $default);
	}
}