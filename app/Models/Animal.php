<?php
namespace App\Models;

use Cvsouth\EloquentInheritance\InheritableModel;

class Animal extends InheritableModel
{
    public $table = "animals";

    protected $fillable =
        [
            'name',
            'species',
            'trainer_id'
        ];


    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function speak()
    {
        print($this->name . ' makes a noise');
    }
}
