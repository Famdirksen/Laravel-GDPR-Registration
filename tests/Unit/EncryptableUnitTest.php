<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tests\Framework\ModelEncryptionStub;

class EncryptableUnitTest extends TestCase
{
    /** @test */
    public function it_can_determine_if_a_property_is_encrypted()
    {
        $stub = new ModelEncryptionStub();

        $this->assertTrue($stub->encryptable('secret'));
    }

    /** @test */
    public function it_can_determine_if_a_property_is_not_encrypted()
    {
        $stub = new ModelEncryptionStub();

        $this->assertFalse($stub->encryptable('email'));
    }
}
