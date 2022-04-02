<?php

namespace Makarovna\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Макаров Никита Александрович') . PHP_EOL;
    echo $truncater->truncate('Макаров Никита Александрович', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Макаров Никита Александрович', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Макаров Никита Александрович', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Макаров Никита Александрович', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Макаров Никита Александрович', ['separator' => '*']) . PHP_EOL;
}
