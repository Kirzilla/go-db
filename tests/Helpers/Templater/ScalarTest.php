<?php
/**
 * @package go\DB
 * @subpackage Tests
 */

namespace go\Tests\DB\Helpers\Templater;

/**
 * coversDefaultClass go\DB\Helpers\Templater
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */
final class ScalarTest extends Base
{
    /**
     * {@inheritdoc}
     */
    public function providerTemplater()
    {
        $data = array('str"ing', 1, null, '3.5');
        return array(
            array(
                'INSERT INTO `table` VALUES (?, ?scalar, ?, ?string)',
                $data,
                'INSERT INTO `table` VALUES ("str\"ing", "1", NULL, "3.5")',
            ),
            array(
                'INSERT INTO `table` VALUES (?null, ?null, ?null, ?null)',
                $data,
                'INSERT INTO `table` VALUES ("str\"ing", "1", NULL, "3.5")',
            ),
            array(
                'INSERT INTO `table` VALUES (?i, ?i, ?i, ?i)',
                $data,
                'INSERT INTO `table` VALUES (0, 1, NULL, 3)',
            ),
            array(
                'INSERT INTO `table` VALUES (?in, ?in, ?in, ?in)',
                $data,
                'INSERT INTO `table` VALUES (0, 1, NULL, 3)',
            ),
            array(
                'INSERT INTO `table` VALUES (?string, ?scalar-int, ?scalar-null, ?scalar-int-null)',
                $data,
                'INSERT INTO `table` VALUES ("str\"ing", 1, NULL, 3)',
            ),
        );
    }
}
