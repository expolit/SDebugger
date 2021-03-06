--TEST--
phpunit --process-isolation --coverage-clover php://stdout CoverageNotPublicTest ../_files/CoverageNotPublicTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--process-isolation';
$_SERVER['argv'][3] = '--coverage-clover';
$_SERVER['argv'][4] = 'php://stdout';
$_SERVER['argv'][5] = 'CoverageNotPublicTest';
$_SERVER['argv'][6] = dirname(dirname(__FILE__)) . '/_files/CoverageNotPublicTest.php';

require_once dirname(dirname(dirname(__FILE__))) . '/TextUI/Command.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

.

Time: %i %s

OK (1 test, 0 assertions)

Writing code coverage data to XML file, this may take a moment.<?xml version="1.0" encoding="UTF-8"?>
<coverage generated="%i" phpunit="%s">
  <project name="CoverageTest" timestamp="%i">
    <file name="%sCoveredClass.php">
      <class name="CoveredParentClass" namespace="global">
        <metrics methods="3" coveredmethods="0" statements="5" coveredstatements="0" elements="8" coveredelements="0"/>
      </class>
      <class name="CoveredClass" namespace="global">
        <metrics methods="3" coveredmethods="2" statements="7" coveredstatements="4" elements="10" coveredelements="6"/>
      </class>
      <line num="4" type="method" name="privateMethod" count="0"/>
      <line num="6" type="stmt" count="0"/>
      <line num="8" type="method" name="protectedMethod" count="0"/>
      <line num="10" type="stmt" count="0"/>
      <line num="11" type="stmt" count="0"/>
      <line num="13" type="method" name="publicMethod" count="0"/>
      <line num="15" type="stmt" count="0"/>
      <line num="16" type="stmt" count="0"/>
      <line num="21" type="method" name="privateMethod" count="1"/>
      <line num="23" type="stmt" count="1"/>
      <line num="25" type="method" name="protectedMethod" count="1"/>
      <line num="27" type="stmt" count="1"/>
      <line num="28" type="stmt" count="1"/>
      <line num="29" type="stmt" count="1"/>
      <line num="31" type="method" name="publicMethod" count="0"/>
      <line num="33" type="stmt" count="0"/>
      <line num="34" type="stmt" count="0"/>
      <line num="35" type="stmt" count="0"/>
      <metrics loc="37" ncloc="37" classes="2" methods="6" coveredmethods="2" statements="12" coveredstatements="4" elements="18" coveredelements="6"/>
    </file>
    <metrics files="1" loc="37" ncloc="37" classes="2" methods="6" coveredmethods="2" statements="12" coveredstatements="4" elements="18" coveredelements="6"/>
  </project>
</coverage>
