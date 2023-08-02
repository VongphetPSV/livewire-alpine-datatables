<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;


class StudentsExport implements FromQuery
{

    use Exportable;
    public $students;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function query()
    {
        return Student::whereKey($this->students);
    }
}
