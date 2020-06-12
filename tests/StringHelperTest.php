<?php

use PHPUnit\Framework\TestCase;
use IpriceHT\StringHelper;

final class StringHelperTest extends TestCase
{
    public function allUpperCaseDataProvider() {
        return [
            'my ht' => ['my ht', 'MY HT'],
            'heLlo World' => ['heLlo World', 'HELLO WORLD'],
            'hello World' => ['hello World', 'HELLO WORLD'],
            'heLlO babY' => ['heLlO babY', 'HELLO BABY']
        ];
    }

    public function allOddIndexToUpperCaseDataProvider() {
        return [
            'hello silly' => ['hello silly', 'hElLo sIlLy'],
            'heLlo mummy' => ['heLlo mummy', 'hElLo mUmMy'],
            'heLlo dAddy' => ['heLlo dAddy', 'hElLo dAdDy'],
            'hello World' => ["hello World", "hElLo wOrLd"],
            'heLlO babY' => ['heLlO babY', 'hElLo bAbY']
        ];
    }

    /**
     * @dataProvider allUpperCaseDataProvider
     */
    public function testConvertStringAllUpperCase($exampleStr, $expectedStr ): void
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