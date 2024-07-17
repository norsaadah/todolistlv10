<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'comments';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $guarded = ['id'];

   // protected $fillable = ['fillable'];

   /**
    * Get the user that owns the Comment
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function user()
   {
       return $this->belongsTo(User::class, 'user_id', 'id');
   }

   /**
    * Get the user that owns the Comment
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function task()
   {
       return $this->belongsTo(Task::class, 'task_id', 'id');
   }
}
