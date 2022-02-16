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
```php
$payment = $gateway->purchase(array(
  "planId" => "no_trial",
  "autoCollection" => "off",
  "billingAddress" => array(
    "firstName" => "John",
    "lastName" => "Doe",
    "line1" => "PO Box 9999",
    "city" => "Walnut",
    "state" => "California",
    "zip" => "91789",
    "country" => "US"
    ),
  "customer" => array(
    "firstName" => "John",
    "lastName" => "Doe",
    "email" => "john@user.com"
    )
  ));
```
This will return a `Payment` object containing information about your charge.
