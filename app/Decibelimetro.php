<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StatusDecibelimetro;
use Illuminate\Database\Eloquent\Builder;
class Decibelimetro extends Model
{
    protected $table = 'decibelimetros';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('operante', function (Builder $builder) {
            $builder->where('status_id', 2)->where('tipo_id',1);
        });
    }

    public function status(){
        return $this->belongsTo(StatusDecibelimetro::class,'status_id','id'); 
    }

    public function getDescricaoAttribute(){
        $regional = $this->regional->lotacao;
        return "$this->marca $this->modelo Serial: $this->numero_serie Regional $regional";
    }

    public function regional(){
        return $this->belongsTo(Regional::class,'lotacao_id','id');
    }
}
