<?php
namespace test\common\services;

use PHPUnit\Framework\TestCase;
use common\services\BaseService;

class BaseServiceTest extends TestCase
{
    public function test_addPrefix_inputEmpty_returnEmpty()
    {
        // arrange
        $service = new BaseService();
		$str = '';

        // act
        $retStr = $service->addPrefix($str);

        // assert
        $this->assertEquals('', $retStr);
    }
	
	public function test_addPrefix_inputNotEmpty_returnCorrectResult()
	{
		// arrange
		$service = new BaseService();
		$str = 'zxd';

		// act
		$retStr = $service->addPrefix($str);

		// assert
		$this->assertEquals('testzxd', $retStr);
	} 
}
