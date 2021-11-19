<p align="center"><img src="logo.svg" width="300"></p>

## Bitcdash

Bitcdash is a web application to view bitcoin-related information such as:

- Current price & High/Low 24h.
- Percentage price change over time.
- Market sentiment (Crypto Fear & Greed Index).
- Market Cap & Total volume. 
- Fees prediction.


<img src="screenshot.png">

Supported currencies:

EUR, USD, JPY, GBP, AUD, CAD, CHF, CNY, HKD.

### Development

1. Clone the repository.
2. Install dependencies with composer (in docker): 
`docker run --rm -v $(pwd):/opt -w /opt laravelsail/php80-composer:latest composer install`.
3. rename `.env.example` into `.env` and configure it.
4. configure currencies into `config/currencies.php`.
5. start docker containers: 
`./vendor/bin/sail up -d`.
6. launch migrations:
`./vendor/bin/sail artisan migrate`.
7. start queue worker:
`./vendor/bin/sail artisan queue:work`.
8. Launch job:
`./vendor/bin/sail artisan fetch:all`.
9. start scheduler:
`./vendor/bin/sail artisan schedule:work`.


### Data
- Price data from coingecko.com (with [coingecko-api](https://github.com/codenix-sv/coingecko-api))
- Sentiment data from alternative.me (with [crypto-fear-greed-index-php](https://github.com/franjsco/crypto-fear-greed-index-php)).
- Fees data from bitcoinfees.earn.com (with [bitcoinfees-php](https://github.com/franjsco/bitcoinfees-php)).



