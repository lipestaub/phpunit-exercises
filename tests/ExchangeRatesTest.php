<?php
    use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

    require_once './src/ExchangeRates.php';

    class ExchangeRatesTest extends TestCase {
        public function testAddMethods() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->addMethods([
                                        'getGPBRateForBRL',
                                    ])
                                    ->getMock();
            
            $this->assertTrue(method_exists($mockClassObject, 'getGPBRateForBRL'));
        }

        public function testSetConstructorArgs() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->setConstructorArgs([
                                        1
                                    ])
                                    ->getMock();

            $this->assertEquals(1, $mockClassObject->userId);
        }

        public function testSetMockClassName() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->disableOriginalConstructor()
                                    ->getMock();
            
            $this->assertObjectNotHasProperty('userId', $mockClassObject);
        }

        public function testDisableOriginalConstructor() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->getMock();
            
            $this->assertInstanceOf('ExchangeRates', $mockClassObject);
        }

        public function testMethodWillReturn() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->getMock();

            $mockClassObject->expects($this->any())
                            ->method('getUSDRateForBRL')
                            ->willReturn(3);

            $this->assertEquals(3, $mockClassObject->getUSDRateForBRL());
        }

        public function testMethodReturnSelf() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->addMethods([
                                        'returnSelf',
                                    ])
                                    ->getMock();

            $mockClassObject->expects($this->any())
                ->method('returnSelf')
                ->willReturnSelf();

            $this->assertInstanceOf('ExchangeRates', $mockClassObject->returnSelf());
        }
    }
?>