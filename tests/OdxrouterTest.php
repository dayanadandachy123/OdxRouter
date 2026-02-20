<?php
/**
 * Tests for OdxRouter
 */

use PHPUnit\Framework\TestCase;
use Odxrouter\Odxrouter;

class OdxrouterTest extends TestCase {
    private Odxrouter $instance;

    protected function setUp(): void {
        $this->instance = new Odxrouter(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Odxrouter::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
