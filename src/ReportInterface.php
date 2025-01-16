<?php

namespace ReportingPackage;

interface ReportInterface
{
    public function generate(array $data, string $outputFile): void;
}
