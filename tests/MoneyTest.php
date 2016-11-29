<?php
/**
 * Created by PhpStorm.
 * User: kim
 * Date: 2016/11/28
 * Time: 下午3:30
 */

use PHPUnit\Framework\TestCase;
use solid\kim\Money;

require __DIR__ . '/../src/solid/kim/Money.php';
class MoneyTest extends TestCase
{

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money();

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(0, $a->getAmount());
    }

}
