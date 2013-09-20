<?php

require_once('class/baseariabilling.class.php');

class BaseAriaBillingTest extends PHPUnit_Framework_TestCase
{

    protected $url = "https://secure.future.stage.ariasystems.net/api/ws/api_ws_class_dispatcher.php";
    protected $args = Array(
                'client_no' => "100",
                'call_type' =>  'rest',
                'auth_key' => "stEKy9vvN9mKEPTeAdNkfeuUE5CGHknB"
            );

    public function testNewBillingRestClass()
    {
        $aria = new BaseAriaBilling($this->url, $this->args);

        $expected_result = array('error_code' => 0, 'error_msg' => 'OK');
        $result = $aria->__ws_call('authenticate_caller');

        $this->assertEquals('rest', $aria->getOption('call_type'));
        $this->assertEquals($expected_result, $result);
    }

    public function testNewBillingSoapClass()
    {
        $args = $this->args;
        $args['call_type'] = 'soap';

        $aria = new BaseAriaBilling($this->url, $args);

        $expected_result = array('error_code' => 0, 'error_msg' => 'OK');
        $result = $aria->__ws_call('authenticate_caller');

        $this->assertEquals('soap', $aria->getOption('call_type'));
        $this->assertEquals($expected_result, $result);
    }

    public function testDefaults()
    {
        $aria = new BaseAriaBilling($this->url);

        $this->assertEquals('rest', $aria->getOption('call_type'));
        $this->assertEquals(false, $aria->getOption('debug'));
        $this->assertEquals('json', $aria->getOption('output_format'));
    }

    public function testSetGetOption()
    {
        $aria = new BaseAriaBilling($this->url);

        $aria->setOption('call_type', 'soap');
        $aria->setOption('url', 'http://www.google.com');

        $this->assertEquals('soap', $aria->getOption('call_type'));
        $this->assertEquals('http://www.google.com', $aria->getOption('url'));
    }

}