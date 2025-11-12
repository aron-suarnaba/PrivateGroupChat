<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // The table name is 'messages' (default, but explicit for clarity)
    protected $table = 'messages';

    // Define which columns can be mass-assigned
    protected $fillable = [
        'group_id',
        'users_id', // Note the column name matches your migration
        'content',
        'is_read',
        'send_on',
    ];

    // Cast the boolean column
    protected $casts = [
        'is_read' => 'boolean',
        'send_on' => 'datetime',
    ];

    // Relationships

    // A message belongs to one group
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    // A message belongs to one user (sender)
    public function sender()
    {
        // Use the custom foreign key and target key
        return $this->belongsTo(User::class, 'users_id', 'users_id');
    }
}
