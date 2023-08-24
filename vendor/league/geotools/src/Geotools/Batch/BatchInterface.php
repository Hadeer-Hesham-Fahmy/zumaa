<?php

/**
 * This file is part of the Geotools library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Geotools\Batch;

/**
 * Batch interface
 *
 * @author Antoine Corcy <contact@sbin.dk>
 */
interface BatchInterface
{
    /**
     * Set an array of closures to geocode.
     * If a provider throws an exception it will return an empty ResultInterface.
     *
     * @param string|array $values A value or an array of values to geocode.
     *
     * @return BatchInterface
     *
     * @throws InvalidArgumentException
     */
    public function geocode($values);

    /**
     * Set an array of closures to reverse geocode.
     * If a provider throws an exception it will return an empty ResultInterface.
     *
     * @param CoordinateInterface|array $coordinates A coordinate or an array of coordinates to reverse.
     *
     * @return BatchInterface
     *
     * @throws InvalidArgumentException
     */
    public function reverse($coordinates);

    /**
     * Returns an array of ResultInterface processed in serie.
     *
     * @return ResultInterface[]
     *
     * @throws \Exception
     */
    public function serie();

    /**
     * Returns an array of ResultInterface processed in parallel.
     *
     * @return ResultInterface[]
     *
     * @throws \Exception
     */
    public function parallel();
}
