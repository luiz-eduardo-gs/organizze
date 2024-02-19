<?php

declare(strict_types=1);

namespace Core\Classification\Infrastructure\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $fillable = ['name'];
}
