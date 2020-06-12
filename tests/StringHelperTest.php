<?php

use PHPUnit\Framework\TestCase;
use IpriceHT\StringHelper;

final class StringHelperTest extends TestCase
{
    public function testConvertStringUpperCase(): void
    {
        $exampleStr = 'my ht';
        $expectedStr = 'MY HT';

        $stringHelper = new StringHelper();

        $result = $stringHelper->convertUpperCase($exampleStr);

        $this->assertEquals(
            $result,
            $expectedStr
        );
    }
}

?>