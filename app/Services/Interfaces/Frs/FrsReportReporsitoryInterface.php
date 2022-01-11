<?php
namespace App\Services\Interfaces\FRS;

interface FrsreportreporsitoryInterface {
    public function saveNewReport($request);
    public function getAllReports();
}

?>