<?php

namespace OzdemirBurak\Iris\Traits;

trait RgbTrait
{
    /**
     * @var string|int
     */
    protected string|int $red;

    /**
     * @var string|int
     */
    protected string|int $green;

    /**
     * @var string|int
     */
    protected string|int $blue;

    /**
     * @param int|string $red
     *
     * @return int|string|$this
     */
    public function red($red = null): int|string|static
    {
        if ($red !== null) {
            $this->validateAndSet('red', $red);
            return $this;
        }
        return !empty($this->castsInteger) ? (int) $this->red : $this->red;
    }

    /**
     * @param float|int|string $green
     *
     * @return float|int|string|$this
     */
    public function green($green = null): float|int|string|static
    {
        if ($green !== null) {
            $this->validateAndSet('green', $green);
            return $this;
        }
        return !empty($this->castsInteger) ? (int) $this->green : $this->green;
    }

    /**
     * @param float|int|string $blue
     *
     * @return float|int|string|$this
     */
    public function blue($blue = null): float|int|string|static
    {
        if ($blue !== null) {
            $this->validateAndSet('blue', $blue);
            return $this;
        }
        return !empty($this->castsInteger) ? (int) $this->blue : $this->blue;
    }

    /**
     * @return array
     */
    public function values(): array
    {
        return [
            $this->red(),
            $this->green(),
            $this->blue()
        ];
    }

    /**
     * @param string           $property
     * @param float|int|string $value
     */
    protected function validateAndSet(string $property, float|int|string $value): void
    {
        if (!empty($this->castsInteger)) {
            $this->{$property} = $value >= 0 && $value <= 255 ? (int) round($value) : $this->{$property};
        } else {
            $value = strlen($value) === 1 ? $value . $value : $value;
            $this->{$property} = preg_match('/^[a-f0-9]{2}$/i', $value) ? $value : $this->{$property};
        }
    }
}
