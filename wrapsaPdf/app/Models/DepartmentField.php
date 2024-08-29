<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class DepartmentField extends Model
{
    use HasFactory;

    protected $fillable = ['department_id', 'field_name', 'field_value'];

    /**
     * Get the department that owns the field.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
