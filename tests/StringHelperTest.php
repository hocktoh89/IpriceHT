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

    public function allOddIndexToUpperCaseDataProvider() {
        return [
            ['hello silly', 'hElLo sIlLy'],
            ['heLlo mummy', 'hElLo mUmMy'],
            ['heLlo dAddy', 'hElLo dAdDy'],
            ["hello World", "hElLo wOrLd"],
            ['heLlO babY', 'hElLo bAbY']
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

    /**
     * @dataProvider allOddIndexToUpperCaseDataProvider
     */
    public function testConvertStringOddIndexToUpperCase($exampleStr, $expectedStr ): void
    {
        $stringHelper = new StringHelper();

        $result = $stringHelper->convertUpperCaseOnOddIndex($exampleStr);

        $this->assertEquals(
            $result,
            $expectedStr
        );
    }
}

?>