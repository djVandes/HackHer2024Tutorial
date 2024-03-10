<?php
// Include PHPExcel library
require 'PHPExcel/Classes/PHPExcel.php';
require 'path/to/PHPExcel/Classes/PHPExcel/Autoloader.php';
PHPExcel_Autoloader::register();

// Retrieve form data
$name = $_POST['name'];
$age = $_POST['age'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$skills = $_POST['skills'];
$service = $_POST['service'];

// Create a new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set column headers
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Name')
            ->setCellValue('B1', 'Age')
            ->setCellValue('C1', 'Mobile')
            ->setCellValue('D1', 'Email')
            ->setCellValue('E1', 'Skills')
            ->setCellValue('F1', 'Service');

// Add data from form
$row = 2;
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A' . $row, $name)
            ->setCellValue('B' . $row, $age)
            ->setCellValue('C' . $row, $mobile)
            ->setCellValue('D' . $row, $email)
            ->setCellValue('E' . $row, $skills)
            ->setCellValue('F' . $row, $service);

// Save Excel file
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('volunteer_applications.xlsx');

// Display confirmation message
echo "<h2>Thank you for applying to volunteer with us.</h2>";
echo "<p>We will contact you with further details within the next 2 days.</p>";
?>


