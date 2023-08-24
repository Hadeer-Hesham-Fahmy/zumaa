<?php

/**
 * This file is part of the Geotools library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Geotools\Tests;

use Geotools\Tests\TestCase;
use Geotools\Convert\Convert;
use Geotools\Coordinate\Coordinate;

/**
* @author Antoine Corcy <contact@sbin.dk>
*/
class ConvertTest extends TestCase
{
    public function testConstructorShouldAcceptCoordinateInterface()
    {
        new TestableConvert($this->getStubCoordinate());
    }

    public function testConstructorShouldSetCoordinateInterface()
    {
        $convert = new TestableConvert($this->getStubCoordinate());
        $coordinates = $convert->getCoordinates();

        $this->assertTrue(is_object($coordinates));
        $this->assertInstanceOf('Geotools\Coordinate\CoordinateInterface', $coordinates);
    }

    /**
     * @dataProvider coordinatesToDMSProvider
     */
    public function testToDegreesMinutesSeconds($coordinates, $format, $expectedResult)
    {
        $convert = new TestableConvert(new Coordinate($coordinates));
        $converted = $convert->toDegreesMinutesSeconds($format);

        $this->assertTrue(is_string($converted));
        $this->assertSame($expectedResult, $converted);
    }

    /**
     * @dataProvider coordinatesToDMSProvider
     */
    public function testToDMS($coordinates, $format, $expectedResult)
    {
        $convert = new TestableConvert(new Coordinate($coordinates));
        $converted = $convert->toDMS($format);

        $this->assertTrue(is_string($converted));
        $this->assertSame($expectedResult, $converted);
    }

    public function coordinatesToDMSProvider()
    {
        return array(
            array(
                '40.446195, -79.948862',
                '%D°%M′%S″%L %d°%m′%s″%l',
                '40°26′46″N 79°56′56″W'
            ),
            array(
                '40.446195N 79.948862W',
                '%D %M %S%L %d %m %s%l',
                '40 26 46N 79 56 56W'
            ),
            array(
                '40° 26.7717, -79° 56.93172',
                '%P%Dd%M\'%S" %p%dd%m\'%s"',
                '40d26\'46" -79d56\'56"'
            ),
            array(
                '40d 26′ 47″ N 079d 58′ 36″ W',
                '%P%D°%M′%S″ %p%d°%m′%s″',
                '40°26′47″ -79°58′36″'
            ),
            array(
                '48.8234055, 2.3072664',
                '%D°%M′%S″%L, %d°%m′%s″%l',
                '48°49′24″N, 2°18′26″E'
            ),
            array(
                '48.8234055, 2.3072664',
                '<p><span>%D°%M′%S″%L</span>, %d°%m′%s″%l</p>',
                '<p><span>48°49′24″N</span>, 2°18′26″E</p>'
            ),
        );
    }

    /**
     * @dataProvider coordinatesToDMProvider
     */
    public function testToDecimalMinutes($coordinates, $format, $expectedResult)
    {
        $convert = new TestableConvert(new Coordinate($coordinates));
        $converted = $convert->toDecimalMinutes($format);

        $this->assertTrue(is_string($converted));
        $this->assertSame($expectedResult, $converted);
    }

    /**
     * @dataProvider coordinatesToDMProvider
     */
    public function testToDM($coordinates, $format, $expectedResult)
    {
        $convert = new TestableConvert(new Coordinate($coordinates));
        $converted = $convert->toDM($format);

        $this->assertTrue(is_string($converted));
        $this->assertSame($expectedResult, $converted);
    }

    public function coordinatesToDMProvider()
    {
        return array(
            array(
                '40.446195, -79.948862',
                '%D°%N″%L %d°%n%l',
                '40°26.7717″N 79°56.93172W'
            ),
            array(
                '40.446388888889, -79.976666666667',
                '%P%D° %N%L %p%d° %n%l',
                '40° 26.78333N -79° 58.6W'
            ),
            array(
                '40.446195S 79.948862E',
                '%P%D %N%L, %p%d %n%l',
                '-40 26.7717S, 79 56.93172E'
            ),
            array(
                '40° 26.7717, -79° 56.93172',
                '%L%Dd %N″,%l%dd %n″',
                'N40d 26.7717″,W79d 56.93172″'
            ),
            array(
                '40d 26′ 47″ N 079d 58′ 36″ W',
                '%P%D %N%L, %p%d %n%l',
                '40 26.78333N, -79 58.6W'
            ),
            array(
                '48°49′24″N, 2°18′26″E',
                '%P%D %N%L, %p%d %n%l',
                '48 49.4N, 2 18.43333E'
            ),
            array(
                '48°49′24″N, 2°18′26″E',
                '<p><strong>%P%D %N%L</strong>, %p%d %n%l</p>',
                '<p><strong>48 49.4N</strong>, 2 18.43333E</p>'
            ),
        );
    }
}

class TestableConvert extends Convert
{
    public function getCoordinates()
    {
        return $this->coordinates;
    }
}
