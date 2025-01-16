<?php

namespace ReportingPackage;

use Dompdf\Dompdf;

class PDFReport implements ReportInterface
{
    public function generate(array $data, string $outputFile): void
    {
        $dompdf = new Dompdf();

        $html = '<table border="1" cellpadding="5" cellspacing="0">';
        foreach ($data as $row) {
            $html .= '<tr>';
            foreach ($row as $value) {
                $html .= '<td>' . htmlspecialchars($value) . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        file_put_contents($outputFile, $dompdf->output());
    }
}
