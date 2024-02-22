<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;

    protected $table = 'credit_cards';

    protected $fillable = ['name', 'limit', 'closing_day', 'due_day', 'logo', 'default_account_id'];
}
