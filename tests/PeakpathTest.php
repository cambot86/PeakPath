<?php
/**
 * Tests for PeakPath
 */

use PHPUnit\Framework\TestCase;
use Peakpath\Peakpath;

class PeakpathTest extends TestCase {
    private Peakpath $instance;

    protected function setUp(): void {
        $this->instance = new Peakpath(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Peakpath::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
