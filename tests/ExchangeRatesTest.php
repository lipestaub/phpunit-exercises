<?php
    use PHPUnit\Framework\TestCase;

    require_once './src/ExchangeRates.php';

    class ExchangeRatesTest extends TestCase {
        /**
         * Test if new methods are being added.
         */
        public function testAddMethods() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->addMethods([
                                        'getGPBRateForBRL',
                                    ])
                                    ->getMock();
            
            $this->assertTrue(method_exists($mockClassObject, 'getGPBRateForBRL'));
        }

        /**
         * Test if constructor args are being setted.
         */
        public function testSetConstructorArgs() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->setConstructorArgs([
                                        1
                                    ])
                                    ->getMock();

            $this->assertEquals(1, $mockClassObject->userId);
        }

        /**
         * Test if the class name is setted as expected.
         */
        public function testSetMockClassName() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->getMock();
            
            $this->assertInstanceOf('ExchangeRates', $mockClassObject);
        }

        /**
         * Test if the class constructor was disabled.
         */
        public function testDisableOriginalConstructor() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->disableOriginalConstructor()
                                    ->getMock();
            
            $this->assertEmpty(get_object_vars($mockClassObject));
        }

        /**
         * Test if the class clone was disabled.
         */
        public function testDisableOriginalClone() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->setConstructorArgs([
                                        10
                                    ])
                                    ->disableOriginalClone()
                                    ->getMock();

            $clonedObject = clone $mockClassObject;

            $this->assertEquals(10, $clonedObject->userId);
        }

        /**
         * Test if the autoloaded was disabled.
         */
        public function testDisableAutoload() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->disableAutoload()
                                    ->getMock();

            // assertion
        }

        /**
         * Test if the new method is returning the expected result.
         */
        public function testMethodWillReturn() {
            $mockClassObject = $this->getMockBuilder(ExchangeRates::class)
                                    ->getMock();

            $mockClassObject->expects($this->any())
                            ->method('getUSDRateForBRL')
                            ->willReturn(3);

            $this->assertEquals(3, $mockClassObject->getUSDRateForBRL());
        }

        /**
         * Test if the returnSelf method is returning a new instance of its class.
         */
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