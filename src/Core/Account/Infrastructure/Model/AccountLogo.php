<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountLogo extends Model
{
    use HasFactory;

    protected $table = 'account_logos';

    protected $fillable = ['logo'];
}
