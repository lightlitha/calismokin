<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Video extends Model
{
    protected $fillable = [
        'channel_id',
        'name',
        'description',
        'visibility',
        'filepath',
        'allow_votes',
        'allow_comments',
        'status',
        'processed'
    ];

    public function channels() {
        return $this->belongsTo(Channel::class);
    }

    public function getThumbnail() {
        if(!$this->isProcessed()) {
            return config('calismokinbodies.buckets.images') . 'default.jpg';
        }

        return config('calismokinbodies.buckets.images') . 'thumbs-' . $this->uid . '-00001.png';
    }

    public function scopeLatestFirst($query) {
        return $query->orderBy('created_at', 'desc');
    }
}
