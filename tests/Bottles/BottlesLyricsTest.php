<?php

declare(strict_types=1);

namespace App\Tests\Bottles;

use App\Bottles\BottlesLyrics;
use PHPUnit\Framework\TestCase;

class BottlesLyricsTest extends TestCase
{
    public function testFirstVerse(): void
    {
        $expected =
        "99 bottles of beer on the wall, " .
        "99 bottles of beer.\n" .
        "Take one down and pass it around, " .
        "98 bottles of beer on the wall.\n";

        $this->assertEquals($expected, (new BottlesLyrics())->lyrics(99));
    }

    public function testLastStandardVerse(): void
    {
        $expected =
        "3 bottles of beer on the wall, " .
        "3 bottles of beer.\n" .
        "Take one down and pass it around, " .
        "2 bottles of beer on the wall.\n";

        $this->assertEquals($expected, (new BottlesLyrics())->lyrics(3));
    }

    public function testBeforePack(): void
    {
        $expected = 
        "7 bottles of beer on the wall, " .
        "7 bottles of beer.\n" .
        "Take one down and pass it around, " .
        "1 six-pack of beer on the wall.\n";

        $this->assertEquals($expected, (new BottlesLyrics())->lyrics(7));
    }

    public function testPack(): void
    {
        $expected = 
        "1 six-pack of beer on the wall, " .
        "1 six-pack of beer.\n" .
        "Take one down and pass it around, " .
        "5 bottles of beer on the wall.\n";

        $this->assertEquals($expected, (new BottlesLyrics())->lyrics(6));
    }

    public function testVerse2(): void
    {
        $expected =
        "2 bottles of beer on the wall, " .
        "2 bottles of beer.\n" .
        "Take one down and pass it around, " .
        "1 bottle of beer on the wall.\n";

        $this->assertEquals($expected, (new BottlesLyrics())->lyrics(2));
    }

    public function testVerse1(): void
    {
        $expected =
        "1 bottle of beer on the wall, " .
        "1 bottle of beer.\n" .
        "Take it down and pass it around, " .
        "no more bottles of beer on the wall.\n";

        $this->assertEquals($expected, (new BottlesLyrics())->lyrics(1));
    }

    public function testLastVerse(): void
    {
        $expected =
        "No more bottles of beer on the wall, " .
        "no more bottles of beer.\n" .
        "Go to the store and buy some more, " .
        "99 bottles of beer on the wall.\n";

        $this->assertEquals($expected, (new BottlesLyrics())->lyrics(0));
    }
}
