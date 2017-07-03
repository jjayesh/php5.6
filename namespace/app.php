<?php
namespace App;
include 'project.php';
include '../data.php';
use Project\Table as ProjectTable;
use Data\Table as DataTable;
use DataCsv\Table as CsvTable;
class Table {
    public static function get() {
        echo "Project.App.get \n";
    }
}
ProjectTable::get();
Table::get();
DataTable::get();
CsvTable::get();


