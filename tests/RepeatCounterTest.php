<?php
    require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_oneLetter()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_searched = "a";
            $string_searched = "a";
            //Act: runs the actual method that we are testing.
            $result = $test_RepeatCounter->countRepeats($word_searched,$string_searched);
            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(1, $result);
        }
        function test_setMonthOne()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_searched = "a";
            $string_searched = "b";
            //Act: runs the actual method that we are testing.
            $result = $test_RepeatCounter->countRepeats($word_searched,$string_searched);
            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(0, $result);
        }

    }
    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests
?>
