# Omnipay - Chargebee

A Chargebee driver for [Omnipay](https://omnipay.thephpleague.com/) PHP payment processing library.

## Installation

```
composer require jsdecena/omnipay-chargebee
```

## Usage

To start charging your customer

**1. Make an Omnipay Gateway:**

```php
$gateway = Omnipay::create('Chargebee');
```

**2. Initialize your site settings**
```php
$gateway->authorize(['site_name' => '<YOUR-SITE-NAME>', 'site_api_key' => '<YOUR-API-KEY>']);
```

**3. Make a transaction**

You need to pass in the `subscriber_id` and the `item_price_id` to make a subscription.

```php
$payment = $gateway->purchase([
    'subscriber_id' => '16BR23Sxald0PM3m',
    'subscription_items' => [
        [
            'billing_cycles' => 12,
            'free_quantity' => 0,
            'item_price_id' => 'cbdemo_advanced-USD-monthly',
            'quantity' => 1
        ]
    ]
]);
```

This will return a `Charge` object containing information about your subscription.

# Customers

Retrieve all your customers and get the `id` of your subscriber which will be used in making the transaction

```php
$gateway->authorize(['site_name' => '<YOUR-SITE-NAME>', 'site_api_key' => '<YOUR-API-KEY>']);
$payment = $gateway->getSubscribers();
```

Retrieve your customer with their email and get the `id` of your subscriber which will be used in making the transaction

```php
$gateway->authorize(['site_name' => '<YOUR-SITE-NAME>', 'site_api_key' => '<YOUR-API-KEY>']);
$payment = $gateway->getSubscribers('john@doe.com');
```
