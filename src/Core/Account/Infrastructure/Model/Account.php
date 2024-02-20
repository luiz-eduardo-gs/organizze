<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $fillable = ['name', 'visible'];
}
