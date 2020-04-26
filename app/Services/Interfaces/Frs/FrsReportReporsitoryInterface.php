<?php
namespace App\Services\Interfaces\Frs;

interface FrsReportRepositoryInterface {
    public function saveNewReport($request);
    public function getAllReports();
}

?>