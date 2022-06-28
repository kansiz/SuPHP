<?php
namespace App\Models;
use kans\Model;

class User extends Model
{
    public int $id;
    public string $sss; 

    public function Selam(){
        print "naber<br>";
    }
}
?>