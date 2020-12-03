<?php
// functions.php
// název funkce - cleanSalary
// datový typ vstupního parametru - int
// název vstupního parametru - hardSalary
// datový typ návratové hodnoty - int
function cleanSalary(int $hardSalary, bool $isStudent = FALSE):int { // začátek těla funkce
    if($isStudent == TRUE) {
        $cleanSalary = $hardSalary;
    } else {
        // 10% daň
        $cleanSalary = $hardSalary * 0.90;
    }
    // klíčové slovo return - návratová hodnota
    return $cleanSalary;
} // konec těla funkce
 
function cleanSalaryComplex(int $hardSalary, string $type = "") {
     
    switch ($type) {
        case 'student':
            $tax = 0;
            break;
        case 'corona':
            $tax = 0.05;
            break;
        default:
            $tax = 0.10;
            break;
    }
    $cleanSalary = $hardSalary * (1 - $tax);
    return $cleanSalary;
}