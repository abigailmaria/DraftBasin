<?php
/**
 * Tests for DraftBasin
 */

use PHPUnit\Framework\TestCase;
use Draftbasin\Draftbasin;

class DraftbasinTest extends TestCase {
    private Draftbasin $instance;

    protected function setUp(): void {
        $this->instance = new Draftbasin(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Draftbasin::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
