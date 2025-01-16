# **Report Generator Package**

The `ReportGenerator` package is a simple and flexible PHP-based solution for generating reports in **Excel**, **PDF**, and **HTML** formats. This package leverages **PhpSpreadsheet** and **DOMPDF** libraries to create high-quality reports and can be easily integrated into any PHP project.

---

## **Features**

- Generate **Excel**, **PDF**, and **HTML** reports.
- Highly customizable and supports dynamic data.
- Includes a test page to validate functionality.
- Modular design for easy integration into existing projects.

---

## **Requirements**

- PHP 7.4 or later
- Composer (for dependency management)
- PHP Extensions: 
  - `ext-zip`
  - `ext-mbstring`

---

## **Installation**

1. **Clone or Download the Package:**

   ```bash
   git clone https://github.com/nicholasjon87/report-generator.git
   cd report-generator
   ```

2. **Install Dependencies:**

   Use Composer to install the required libraries:

   ```bash
   composer install
   ```

3. **Ensure Required PHP Extensions are Enabled:**

   - `ext-zip`
   - `ext-mbstring`

---

## **Usage**

### **1. Initialize the Report Generator**

Include the `ReportGenerator.php` file in your project:

```php
require_once 'src/ReportGenerator.php';
```

Create an instance of the `ReportGenerator` class:

```php
$reportGenerator = new ReportGenerator();
```

---

### **2. Generating Reports**

#### **Excel Report**

```php
$data = [
    ['Column 1', 'Column 2', 'Column 3'],
    ['Value 1', 'Value 2', 'Value 3'],
    ['Value 4', 'Value 5', 'Value 6'],
];

$reportGenerator->generateExcel($data, 'excel_report.xlsx');
```

This generates an Excel file `excel_report.xlsx` and saves it to the current directory.

---

#### **PDF Report**

```php
$data = [
    ['Header 1', 'Header 2', 'Header 3'],
    ['Row 1 Value 1', 'Row 1 Value 2', 'Row 1 Value 3'],
    ['Row 2 Value 1', 'Row 2 Value 2', 'Row 2 Value 3'],
];

$reportGenerator->generatePDF($data, 'pdf_report.pdf');
```

This creates a PDF file named `pdf_report.pdf`.

---

#### **HTML Report**

```php
$data = [
    ['Name', 'Age', 'Email'],
    ['John Doe', 30, 'john@example.com'],
    ['Jane Smith', 25, 'jane@example.com'],
];

$reportGenerator->generateHTML($data, 'html_report.html');
```

This generates an HTML report `html_report.html`.

---

### **3. Test Page**

The package includes a test page to validate the functionality:

1. Place the package in your server root.
2. Access the test page in your browser:

   ```
   http://your-server/report-generator/examples/generate_reports.php
   ```

3. Use the interactive interface to generate sample reports and validate outputs.

---

## **Directory Structure**

```plaintext
report-generator/
│
├── src/
│   ├── ReportGenerator.php      # Main Report Generator Class
│   ├── ExcelReport.php          # Excel Report Class
│   ├── PDFReport.php            # PDF Report Class
│   ├── HTMLReport.php           # HTML Report Class
│   └── ReportInterface.php      # Report Interface
│
├── vendor/                      # Composer Dependencies
│
├── examples/
│   └── generate_reports.php     # Example Test File
│
├── composer.json                # Composer Configuration
│
└── README.md                    # Documentation
```

---

## **Customizing Report Templates**

You can modify the report template structure by updating the specific report files in the `src/` directory (e.g., `PDFReport.php`, `HTMLReport.php`).

---

## **License**

This package is licensed under the **MIT License**. See the `LICENSE` file for details.

---

## **Support**

For issues or feature requests, please open an issue on [GitHub](https://github.com/nicholasjon87/report-generator/issues).
