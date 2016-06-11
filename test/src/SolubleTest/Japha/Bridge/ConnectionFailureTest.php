<?php

namespace SolubleTest\Japha\Bridge;

use Soluble\Japha\Bridge\Adapter;
use Soluble\Japha\Bridge\Driver\Pjb62\PjbProxyClient;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2014-11-04 at 16:47:42.
 */
class ConnectionFailure extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var string
     */
    protected $servlet_address;

    /**
     *
     * @var Adapter
     */
    protected $adapter;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        \SolubleTestFactories::startJavaBridgeServer();
        $this->servlet_address = \SolubleTestFactories::getJavaBridgeServerAddress();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testServerDownThrowsConnectionException()
    {
        $this->setExpectedException('Soluble\Japha\Bridge\Driver\Pjb62\Exception\ConnectException');
        PjbProxyClient::unregisterInstance();
        $ba = new Adapter([
            'driver' => 'pjb62',
            //'servlet_address' => $this->servlet_address . 'urldoesnotexists'
            'servlet_address' => 'http://127.0.0.1:12345/servlet.phpjavabridge'
        ]);
        //$str = $ba->java('java.lang.String', 'Bouyou');
    }

    public function testServerDownThrowsConnectionException2()
    {
        // URI change not working when using standalone server
        /**
        $this->setExpectedException('Soluble\Japha\Bridge\Driver\Pjb62\Exception\ConnectException');
        PjbProxyClient::unregisterInstance();
        $invalid_address = str_replace('servlet.phpjavabridge', 'invalid/uri', $this->servlet_address);

        $ba = new Adapter([
            'driver' => 'pjb62',
            'servlet_address' => $invalid_address
        ]);
        $str = $ba->java('java.lang.String', 'Bouyou');
         */
    }
}