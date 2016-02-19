<?php
    require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_oneLetterSame()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_searched = "a";
            $string_searched = "a";
            //Act
            $result = $test_RepeatCounter->countRepeats($word_searched,$string_searched);
            //Assert
            $this->assertEquals(1, $result);
        }
        function test_oneLetterDifferent()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_searched = "a";
            $string_searched = "b";
            //Act
            $result = $test_RepeatCounter->countRepeats($word_searched,$string_searched);
            //Assert
            $this->assertEquals(0, $result);
        }
        function test_twoLettersSame()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_searched = "a";
            $string_searched = "a a";
            //Act
            $result = $test_RepeatCounter->countRepeats($word_searched,$string_searched);
            //Assert
            $this->assertEquals(2, $result);
        }
        function test_twoLettersDifferent()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_searched = "a";
            $string_searched = "a b";
            //Act
            $result = $test_RepeatCounter->countRepeats($word_searched,$string_searched);
            //Assert
            $this->assertEquals(1, $result);
        }
        function test_oneWordSame()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_searched = "ab";
            $string_searched = "ab";
            //Act
            $result = $test_RepeatCounter->countRepeats($word_searched,$string_searched);
            //Assert
            $this->assertEquals(1, $result);
        }
        function test_oneWordDifferent()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_searched = "ab";
            $string_searched = "ba";
            //Act
            $result = $test_RepeatCounter->countRepeats($word_searched,$string_searched);
            //Assert
            $this->assertEquals(0, $result);
        }
        function test_twoWordsSame()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_searched = "ab";
            $string_searched = "ab ba ab";
            //Act
            $result = $test_RepeatCounter->countRepeats($word_searched,$string_searched);
            //Assert
            $this->assertEquals(0, $result);
        }

    }
    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests
?>
