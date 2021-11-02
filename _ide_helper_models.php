<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\BitcoinPrice
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $currency
 * @property string $price
 * @property string $market_cap
 * @property string $total_volume
 * @property string $high_24h
 * @property string $low_24h
 * @property string $price_change_percentage_24h
 * @property string $price_change_percentage_7d
 * @property string $price_change_percentage_14d
 * @property string $price_change_percentage_30d
 * @property string $price_change_percentage_60d
 * @property string $price_change_percentage_200d
 * @property string $price_change_percentage_1y
 * @property string $market_cap_change_percentage_24h
 * @property string|null $last_upd_from_api
 * @property string|null $extraction_id
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice whereExtractionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice whereHigh24h($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice whereLastUpdFromApi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice whereLow24h($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice whereMarketCap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice whereMarketCapChangePercentage24h($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice wherePriceChangePercentage14d($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice wherePriceChangePercentage1y($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice wherePriceChangePercentage200d($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice wherePriceChangePercentage24h($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice wherePriceChangePercentage30d($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice wherePriceChangePercentage60d($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice wherePriceChangePercentage7d($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice whereTotalVolume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BitcoinPrice whereUpdatedAt($value)
 */
	class BitcoinPrice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Extraction
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $extraction_id
 * @method static \Illuminate\Database\Eloquent\Builder|Extraction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extraction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extraction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Extraction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extraction whereExtractionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extraction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extraction whereUpdatedAt($value)
 */
	class Extraction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Fee
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $fastest_fee
 * @property int $half_hour_fee
 * @property int $hour_fee
 * @property string|null $extraction_id
 * @method static \Illuminate\Database\Eloquent\Builder|Fee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereExtractionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereFastestFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereHalfHourFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereHourFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereUpdatedAt($value)
 */
	class Fee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sentiment
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $value
 * @property string $value_classification
 * @property string|null $last_upd_api
 * @property string|null $extraction_id
 * @method static \Illuminate\Database\Eloquent\Builder|Sentiment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sentiment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sentiment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sentiment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sentiment whereExtractionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sentiment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sentiment whereLastUpdApi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sentiment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sentiment whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sentiment whereValueClassification($value)
 */
	class Sentiment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
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

