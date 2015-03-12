<?php
namespace initvector\Tater;

class Sha1Test extends \PHPUnit_Framework_TestCase
{
    protected $totp;
    protected $totpOptions = array(
        'algorithm'   => 'sha1',
        'interval'    => 30,
        'tokenLength' => 8
    );

    public function __construct() {
        $this->totp = new Totp(
            '12345678901234567890',
            $this->totpOptions
        );
    }

    public function test59() {
        $this->assertEquals(
            $this->totp->generate('1970-01-01 00:00:59'),
            '94287082'
        );
    }

    public function test1111111109() {
        $this->assertEquals(
            $this->totp->generate('2005-03-18 01:58:29'),
            '07081804'
        );
    }

    public function test1111111111() {
        $this->assertEquals(
            $this->totp->generate('2005-03-18 01:58:31'),
            '14050471'
        );
    }

    public function test1234567890() {
        $this->assertEquals(
            $this->totp->generate('2009-02-13 23:31:30'),
            '89005924'
        );
    }

    public function test2000000000() {
        $this->assertEquals(
            $this->totp->generate('2033-05-18 03:33:20'),
            '69279037'
        );
    }

    public function test20000000000() {
        $this->assertEquals(
            $this->totp->generate('2603-10-11 11:33:20'),
            '65353130'
        );
    }
}
