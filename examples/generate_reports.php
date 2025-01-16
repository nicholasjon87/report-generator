<?php

require_once __DIR__ . '/../vendor/autoload.php';

use ReportingPackage\ReportGenerator;

$data = [
    ['Name', 'Age', 'Email'],
    ['John Doe', 30, 'john@example.com'],
    ['Jane Doe', 25, 'jane@example.com'],
];

$generator = new ReportGenerator();

// Generate Excel Report
$generator->generateReport('excel', $data, __DIR__ . '/../reports/report.xlsx');

// Generate PDF Report
$generator->generateReport('pdf', $data, __DIR__ . '/../reports/report.pdf');

// Generate HTML Report
$generator->generateReport('html', $data, __DIR__ . '/../reports/report.html');

echo "All reports generated successfully!";
