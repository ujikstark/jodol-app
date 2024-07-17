<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TalkSession extends Model
{
    use HasFactory;
    use HasUuids;

     /** @var array<int, string> */
     protected $fillable = [
        'man_id',
        'woman_id',
        'start_at',
        'link',
        'status'
    ];

    /** @return BelongsTo<User, TalkSession> */
    public function man(): BelongsTo
    {
        return $this->belongsTo(User::class, 'man_id');
    }

    /** @return BelongsTo<User, TalkSession> */
    public function woman(): BelongsTo
    {
        return $this->belongsTo(User::class, 'woman_id');
    }



}
