<?php

namespace Makarovna\Tests;
use \PHPUnit\Framework\TestCase;
use Makarovna\Task05\Truncater;

class TruncaterTest extends TestCase
{
    
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Макаров Никита Александрович...', $truncater->truncate('Макаров Никита Александрович'));
        $this->assertSame('Макаров Ни...', $truncater->truncate('Макаров Никита Александрович', ['length' => 10]));
        $this->assertSame('Макаров Никита Александрович...', $truncater->truncate('Макаров Никита Александрович', ['length' => 50]));
        $this->assertSame('Макаров Никита Александрович...', $truncater->truncate('Макаров Никита Александрович', ['length' => -10]));
        $this->assertSame('Макаров Ни*', $truncater->truncate('Макаров Никита Александрович', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Макаров Никита Александрович*', $truncater->truncate('Макаров Никита Александрович', ['separator' => '*']));
    }
}
