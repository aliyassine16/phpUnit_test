<?php
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    // ...

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());


    }

    public function testcanassertarray(){
      $this->assertArrayHasKey('foo', ['bar' => 'baz','foo'=>'has key']);

    }

    public function test_assertClassHasAttribute(){
      $this->assertClassHasAttribute('amount', 'Money');
    }

    public function test_assertArraySubset(){
      $this->assertArraySubset(['config' => ['key-a']], ['config' => ['key-a']]);
    }

    public function test_ClassHasStaticAttributeTest(){
      //$this->assertClassHasStaticAttribute('currencies','Money');
    }
    public function test_assertContains(){
      $a = new Money(1);
       $this->assertContains('USD', $a->get_currencies(),'we should find the currency in the list but its not');
    }
    public function test_assertContainsOnly(){
      $classname = 'Money';
      //$this->assertContainsOnly('string', $classname::$currencies);
    }

    public function test_assertCount(){
        $a=new Money(1);
        $this->assertCount(3, $a->get_currencies());
    }

    public function test_assertEmpty(){
      $b=new Money(2);
      $this->assertEmpty(array());

    }

    public function test_assertFalse(){
      $this->assertFalse(false);
    }

    // ...
}
