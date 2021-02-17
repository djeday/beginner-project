<?php

namespace Utils;

class TableUtils
{

    private static int $minOperand = 1;

    private static int $maxOperand = 10;

    private static array $colors = [
        1 => 'red-text',
        2 => 'green-text',
        3 => 'yellow-text',
        4 => 'blue-text'
    ];

    public static function renderTable(bool $styled = false): string
    {
        $cells = '';

        for ($leftOperand = self::$minOperand; $leftOperand <= self::$maxOperand; $leftOperand++) {
            $cellContent = self::addTd(self::getCell($leftOperand, $styled));
            $cells .= self::addNewRowInTable($leftOperand, $cellContent);
        }
        return $cells;
    }

    private static function getCell(int $leftOperand, bool $styled): string
    {
        $content = '';

        for ($rightOperand = self::$minOperand; $rightOperand <= self::$maxOperand; $rightOperand++) {
            $leftOperandStyled = $styled ? self::getNumbersStyled($leftOperand) : $leftOperand;
            $rightOperandStyled = $styled ? self::getNumbersStyled($rightOperand) : $rightOperand;
            $result = $leftOperand * $rightOperand;
            $resultStyled = $styled ? self::getNumbersStyled($result) : $result;

            $string = $leftOperandStyled . " x " . $rightOperandStyled . " = " . $resultStyled;
            $content .= self::addBr($string);
        }
        return $content;
    }

    private static function addNewRowInTable(int $currentCell, string $content): string
    {
        return $currentCell == 5 ? $content . '</tr><tr>' : $content;
    }

    private static function addBr(string $text): string
    {
        return '<div>' . $text . '</div>';
    }

    private static function addTd(string $text): string
    {
        return '<td>' . $text . '</td>';
    }

    private static function changeColor(int $number): string
    {
        $class = isset(self::$colors[$number]) ? self::$colors[$number] : 'default-color';

        return '<span class="' . $class . '">' . $number . '</span>';
    }

    private static function getNumbersStyled(int $number): string
    {
        $numbersStyled = '';
        $stringWithNumbers = strval($number);

        for ($i = 0; $i < mb_strlen($stringWithNumbers); $i++) {
            $numbersStyled .= self::changeColor($stringWithNumbers[$i]);
        }
        return $numbersStyled;
    }
}