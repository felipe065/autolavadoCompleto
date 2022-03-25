<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculos extends Model
{
    public function vehiculo(){
        return $this->hashOne("App/Model/vehiculo");
    }
    Protected $fillable=[
        "placa",
        "matricula", 
        "tipo", 
        "marca", 
        "modelo",
        "color",
        "puertas", 
        "status", 
        "id_cliente",
        "fechareg"];
    use HasFactory;
}
