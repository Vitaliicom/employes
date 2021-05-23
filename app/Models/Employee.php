<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Type;
use App\Models\Position;
use App\Models\Department;
use App\Models\EmployeeTimes;

class Employee extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function employeeTimes()
    {
        return $this->hasMany(EmployeeTimes::class)->whereBetween('dt', [date('Y-m-d 00:00:00',strtotime('first day of this month')), date('Y-m-d 23:59:59',strtotime('last day of this month'))]);
    }
}
