<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace Core\Classification\Infrastructure\Model{
/**
 * Core\Classification\Infrastructure\Model\CategoryModel
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereUpdatedAt($value)
 */
	class CategoryModel extends \Eloquent {}
}

namespace Core\Classification\Infrastructure\Model{
/**
 * Core\Classification\Infrastructure\Model\TagModel
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagModel whereUpdatedAt($value)
 */
	class TagModel extends \Eloquent {}
}

namespace Core\Account\Infrastructure\Model{
/**
 * Core\Account\Infrastructure\Model\Account
 *
 * @property int $id
 * @property string $name
 * @property string $logo
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereVisible($value)
 */
	class Account extends \Eloquent {}
}

namespace Core\Account\Infrastructure\Model{
/**
 * Core\Account\Infrastructure\Model\AccountLogo
 *
 * @property int $id
 * @property string $logo
 * @method static \Illuminate\Database\Eloquent\Builder|AccountLogo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AccountLogo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AccountLogo query()
 * @method static \Illuminate\Database\Eloquent\Builder|AccountLogo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AccountLogo whereLogo($value)
 */
	class AccountLogo extends \Eloquent {}
}

