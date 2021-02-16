<?php

class TableUtils {

    private static int $minLeftOperand = 1;

    private static int $maxRightOperand = 10;

    private static string $lineBreak = "<br/>";

    private static string $separatorCell = "</td><td>";

    private static function getColumn(int $number) : string {
        $numbers = [];

        for ($i = self::$minLeftOperand; $i <= self::$maxRightOperand; $i++) {
            $numbers[] = "$number x $i = " . $number * $i;
        }
        return implode(self::$lineBreak, $numbers);
    }

    public static function getCells(int $start, int $end) : string {
        $cells = [];

        for ($i = $start; $i <= $end; $i++) {
            $cells [] = self::getColumn($i);
        }
        return implode(self::$separatorCell, $cells);
    }
}