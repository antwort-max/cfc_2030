<?php

namespace App\Models\Provider;

use App\Models\Provider\Provider;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderMeeting extends Model
{
    use HasFactory;

    protected $fillable = [ 'provider_id', 'user_id', 'name', 'comment', 'date_next', 'Comment_next', ];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
