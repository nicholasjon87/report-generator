<?php

namespace ReportingPackage;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

class ExcelReport implements ReportInterface
{
    public function generate(array $data, string $outputFile): void
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($data as $rowIndex => $row) {
            foreach ($row as $colIndex => $value) {
                $cell = Coordinate::stringFromColumnIndex($colIndex + 1) . ($rowIndex + 1);
                $sheet->setCellValue($cell, $value);

                // $sheet->setCellValue([$colIndex + 1, $rowIndex + 1], $value);
            }
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save($outputFile);
    }
}
