<?php
namespace common\services;

class BaseService
{
	const PREFIX = 'test';

    public function addPrefix($str)
    {
		if (empty($str)) {
			return '';
		}
		
        return self::PREFIX . $str;
    }
}
