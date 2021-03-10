<?php

use Calenv\Support\Env;
use Dotenv\Dotenv;

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
if ( ! function_exists('load_env')) {
	/**
	 * 加载env文件
	 * @param string $path
	 * @param string $filename 默认是.env
	 * 
	 */
	function load_env($path, $filename = NULL) {
		$param = $path;
		if ( ! empty($filename)) {
			$param .= $filename;
		}
		if (is_dir($param) || is_file($param)) {
			$doenv = Dotenv::createImmutable($path, $filename);
			$doenv->load();
		}
	}
}