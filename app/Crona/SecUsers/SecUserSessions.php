<?php namespace App\Crona\SecUsers;

use Illuminate\Database\Eloquent\Model;

class SecUserSessions extends Model
{
    protected $table = 'SecUserSessions';
    public $primaryKey = 'userSessionId';
    protected $fillable = ['userId', 'sessionCode', 'status', 'datetimeIns'];
}