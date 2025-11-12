<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\Users;

class GroupMember extends Pivot
{
    // The table name is explicitly set for a custom pivot model
    protected $table = 'group_members';

    // Disable Laravel's default auto-incrementing primary key
    public $incrementing = false;

    // Since you defined a composite primary key in the migration,
    // you must handle key fetching manually or let Laravel manage the composite key
    // by only setting the fillable columns.

    protected $fillable = [
        'group_id',
        'user_id',
        'joined_at',
    ];

    protected $casts = [
        'joined_at' => 'datetime',
    ];

    // Define the relationships on the pivot model itself

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function user()
    {
        // The user_id column on the pivot table references users_id on the users table
        return $this->belongsTo(Users::class, 'user_id', 'users_id');
    }
}
