<?php

namespace ReportingPackage;

class HTMLReport implements ReportInterface
{
    public function generate(array $data, string $outputFile): void
    {
        $html = '<table border="1" cellpadding="5" cellspacing="0">';
        foreach ($data as $row) {
            $html .= '<tr>';
            foreach ($row as $value) {
                $html .= '<td>' . htmlspecialchars($value) . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';

        file_put_contents($outputFile, $html);
    }
}
