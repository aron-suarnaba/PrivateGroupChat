<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $fillable = [
        'name',
        'owner_id',
        'is_private',
    ];

    protected $casts = [
        'is_private' => 'boolean',
    ];

    // Relationships

    // A group belongs to one owner (User)
    public function owner()
    {
        // Use the custom foreign key and target key
        return $this->belongsTo(User::class, 'owner_id', 'users_id');
    }

    // A group has many messages
    public function messages()
    {
        return $this->hasMany(Message::class, 'group_id');
    }

    // A group has many members
    public function members()
    {
        // The second argument is the pivot table name
        // The third is the foreign key on the pivot table for this model
        // The fourth is the foreign key on the pivot table for the related model
        return $this->belongsToMany(Users::class, 'group_members', 'group_id', 'user_id');
    }
}
