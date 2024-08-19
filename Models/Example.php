<?php


use App\Models\Builder\ExampleBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;

    public function newEloquentBuilder($query): ExampleBuilder
    {
        return new ExampleBuilder($query);
    }
}
