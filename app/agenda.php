<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    //
        protected $table = 'agenda';
        protected $primaryKey = 'idAgenda';
        public $incrementing = false;
        protected $fillable = [ 'idAgenda','namaAgenda','singkatAgenda','total','tanggal','hari','fk_idRuang','WaktuMulai','WaktuSelesai','fk_idPIC','notule','toleransiKeterlambatan'];

        public function ruang()
        {
                return $this->belongsTo('App\ruang', 'fk_idRuang', 'idRuang');
        }


}
