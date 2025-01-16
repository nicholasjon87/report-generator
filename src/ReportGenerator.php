<?php

namespace ReportingPackage;

class ReportGenerator
{
    public function generateReport(string $format, array $data, string $outputFile): void
    {
        $report = $this->getReportClass($format);

        if (!$report instanceof ReportInterface) {
            throw new \Exception('Invalid report format: ' . $format);
        }

        $report->generate($data, $outputFile);
    }

    private function getReportClass(string $format): ?ReportInterface
    {
        switch (strtolower($format)) {
            case 'excel':
                return new ExcelReport();
            case 'pdf':
                return new PDFReport();
            case 'html':
                return new HTMLReport();
            default:
                return null;
        }
    }
}
