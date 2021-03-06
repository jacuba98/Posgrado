<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //protected $table = 'documents';

    protected $fillable = [
        'documento', 'anexos', 'descripcion', 'sender_id', 'recipient_id',
      ];


      public function users()
      {
        return $this->belongsToMany('App\User')->withTimesTamps();
      }

      public function permissions()
      {
        return $this->belongsToMany('App\Permission\Models\Permission')->withTimesTamps();
      }
}
