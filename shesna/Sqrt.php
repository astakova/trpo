<?php
namespace shesna;
use core\EquationInterface;
Class Sqrt extends Line implements EquationInterface
{
    protected function dis($a, $b, $c)
    {
        $x = ($b ** 2) - 4 * $a * $c;
        return $x;
    }

    public function solve($a, $b, $c)
    {
        $d = $this->dis($a, $b, $c);
        if ($a == 0) {
            return [$this->l_solve($b, $c)];
        }
        if ($d > 0) {
            return $this->X = array(
                -($b + sqrt($d) / (2 * $a)),
                -($b - sqrt($d) / (2 * $a))
            );
        }

        if ($d == 0) {
            return $this->X = array(-($b / (2 * $a)));
        }
        return $this->X = NULL;
        throw new ShesnaException("Ошибка:уранение не имеет корней");
    }
}
