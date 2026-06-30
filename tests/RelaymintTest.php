<?php
/**
 * Tests for RelayMint
 */

use PHPUnit\Framework\TestCase;
use Relaymint\Relaymint;

class RelaymintTest extends TestCase {
    private Relaymint $instance;

    protected function setUp(): void {
        $this->instance = new Relaymint(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Relaymint::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
