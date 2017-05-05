<?php

namespace Stolt\ShipIt\Emoji\Tests;

use PHPUnit\Framework\TestCase;
use Stolt\ShipIt\Emoji\Emoji;

class EmojiTest extends TestCase
{
    public function testEmojiSubset()
    {
        $this->assertEquals('🚢 ', Emoji::SHIP);
        $this->assertEquals('🔥 ', Emoji::FIRE);
        $this->assertEquals('🔔 ', Emoji::BELL);
        $this->assertEquals('📦 ', Emoji::PACKAGE);
        $this->assertEquals('🐋 ', Emoji::WHALE);
        $this->assertEquals('🔑 ', Emoji::KEY);
        $this->assertEquals('🌍 ', Emoji::EARTH_GLOBE_EUROPE_AFRICA);
        $this->assertEquals('🦀 ', Emoji::CRAB);
    }
}
