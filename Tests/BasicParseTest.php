<?php
require_once 'PHPUnit/Framework.php';

error_reporting(E_WARNING);
class BasicParseTest extends PHPUnit_Framework_TestCase
{
    /**
     * Silly test to simply confirm that it doesn't have parsing errors
     */
    public function testXmlapiClassCanParse()
    {
        $classfile = '../xmlapi.php';
        $redirection = ' 2>/dev/null';
        $cmd = 'php -l '.$classfile. $redirection;

        $last_line = exec($cmd, $lines);
        $clean = 'No syntax errors detected in '. $classfile;

        $this->assertEquals($clean, $lines[0],'Syntax check found errors');
    }
}
