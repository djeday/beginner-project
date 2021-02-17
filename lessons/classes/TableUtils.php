<?php

class TableUtils {

    private static int $minOperand = 1;

    private static int $maxOperand = 10;

    public static function renderTable() : string {
        $cells = '';

        for ($leftOperand = self::$minOperand; $leftOperand <= self::$maxOperand; $leftOperand++) {
            $cellContent = self::getCell($leftOperand);
            $cellContent = self::addTd($cellContent);
            $cells .= self::addNewRowInTable($leftOperand, $cellContent);
        }
        return $cells;
    }

    private static function getCell(int $leftOperand) : string {
        $content = '';

        for ($rightOperand = self::$minOperand; $rightOperand <= self::$maxOperand; $rightOperand++) {
            $result = $leftOperand * $rightOperand;
            $string = $leftOperand ." x ". $rightOperand ." = ". $result;
            $content .= self::addBr($string);
        }
        return $content;
    }

    private static function addNewRowInTable(int $currentCell, string $content) : string {
        return $currentCell == 5 ? $content . '</tr><tr>' : $content;
    }

    private static function  addBr(string $text) : string {
        return '<div>'. $text .'</div>';
    }

    private static function  addTd(string $text) : string {
        return '<td>'. $text .'</td>';
    }
}