<?php

use PHPUnit\Framework\TestCase;
use IpriceHT\StringHelper;

final class StringHelperTest extends TestCase
{
    public function allUpperCaseDataProvider() {
        return [
            ['my ht', 'MY HT'],
            ['heLlo World', 'HELLO WORLD'],
            ['hello World', 'HELLO WORLD'],
            ['heLlO babY', 'HELLO BABY']
        ];
    }

    /**
     * @dataProvider allUpperCaseDataProvider
     */
    public function testConvertStringUpperCase($exampleStr, $expectedStr ): void
    {
        $stringHelper = new StringHelper();

        $result = $stringHelper->convertUpperCase($exampleStr);

        $this->assertEquals(
            $result,
            $expectedStr
        );
    }
}

?>