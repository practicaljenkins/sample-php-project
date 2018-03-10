<?php
require_once('Connect.php');
class RemoteConnectTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }
  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new RemoteConnect();
    $serverName = 'www.linkedin.com';
    $this->assertTrue($connObj->connectToServer($serverName) !== false);
  }
}
?>
