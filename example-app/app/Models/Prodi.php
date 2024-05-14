<?php

namespace App\Models;


use App\Http\Controllers\FakultasController;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Command\ListCommand\FunctionEnumerator;

class Prodi extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['nama', 'fakultas_id'];

    public Function fakultas(){
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }
}
