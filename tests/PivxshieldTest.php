<?php
/**
 * Tests for PIVXShield
 */

use PHPUnit\Framework\TestCase;
use Pivxshield\Pivxshield;

class PivxshieldTest extends TestCase {
    private Pivxshield $instance;

    protected function setUp(): void {
        $this->instance = new Pivxshield(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pivxshield::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
