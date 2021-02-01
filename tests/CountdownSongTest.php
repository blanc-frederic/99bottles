<?php

declare(strict_types=1);

namespace App\Tests;

use App\CountdownSong;
use PHPUnit\Framework\TestCase;

class CountdownSongTest extends TestCase
{
    private function createCountdownSong(): CountdownSong
    {
        return new CountdownSong(new FakeVerse(), 9999);
    }

    public function testVerse(): void
    {
        $expected = "This is verse 500.\n";

        $this->assertEquals(
            $expected,
            $this->createCountdownSong()->verse(500)
        );
    }

    public function testVerses(): void
    {
        $expected =
        "This is verse 137.\n" .
        "\n" .
        "This is verse 136.\n" .
        "\n" .
        "This is verse 135.\n";

        $this->assertEquals(
            $expected,
            $this->createCountdownSong()->verses(137, 135)
        );
    }

    public function testSong(): void
    {
        $expected =
        "This is verse 47.\n" .
        "\n" .
        "This is verse 46.\n" .
        "\n" .
        "This is verse 45.\n" .
        "\n" .
        "This is verse 44.\n" .
        "\n" .
        "This is verse 43.\n";

        $this->assertEquals(
            $expected,
            (new CountdownSong(new FakeVerse(), 47, 43))->song()
        );
    }
}
