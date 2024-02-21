<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Database\Seeder;

use Core\Account\Infrastructure\Model\AccountLogo;
use Illuminate\Database\Seeder;

class AccountLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccountLogo::insert([
            [
                'logo' => 'https://assets.organizze.com.br/institutions/logos/itau.png',
            ],
            [
                'logo' => 'https://assets.organizze.com.br/institutions/logos/nubank.png',
            ],
            [
                'logo' => 'https://assets.organizze.com.br/institutions/logos/will-bank.png',
            ],
            [
                'logo' => 'https://assets.organizze.com.br/institutions/logos/caju.png',
            ],
        ]);
    }
}
