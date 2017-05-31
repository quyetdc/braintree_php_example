# Braintree PHP Example

An example Braintree integration for PHP.
In this project I added a new simple page to get `payment-method-nonce` key, which is just generated, not used, for API testing purpose

## Demo link
https://colin-braintree-php-nonce.herokuapp.com/

## Create your own Braintree App
<p><a href="https://heroku.com/deploy?template=https://github.com/quyetdc/braintree_php_example&amp;env%5BBT_ENVIRONMENT%5D=sandbox"><img src="https://camo.githubusercontent.com/83b0e95b38892b49184e07ad572c94c8038323fb/68747470733a2f2f7777772e6865726f6b7563646e2e636f6d2f6465706c6f792f627574746f6e2e737667" alt="Deploy" data-canonical-src="https://www.herokucdn.com/deploy/button.svg" style="max-width:100%;"></a></p>

## Setup Instructions

1. Install composer within the example directory. You can find instructions on how to install composer [on composer's site](https://getcomposer.org/download/).

2. Run composer:

  ```sh
  composer install
  ```

3. Copy the contents of `example.env` into a new file named `.env` and fill in your Braintree API credentials. Credentials can be found by navigating to Account > My User > View Authorizations in the Braintree Control Panel. Full instructions can be [found on our support site](https://articles.braintreepayments.com/control-panel/important-gateway-credentials#api-credentials).

4. Start the internal PHP server on port 3000:

  ```sh
  php -S localhost:8888 -t public_html
  ```
  
 Then on your `localhost:8888` you will have this
 <p align="center">
  <img src="https://github.com/quyetdc/braintree_php_example/blob/master/images/braintree-enter-card.png" width="80%" style="margin: auto" />
</p>

5. Enter a sandbox braintree creditcard, ex: `4111 1111 1111 1111` and expired date in future, ex: `02/20`, the page will redirect you to a new page to have Braintree `payment_method_nonce`. Please note that the `nonce` can be used only once.

Like in this image
<p align="center">
  <img src="https://github.com/quyetdc/braintree_php_example/blob/master/images/get-nonce.png" width="80%" style="margin: auto" />
</p>

6. In case you want to demonstrate how transaction success, not to get payment method nonce, please look at the file `public_html/index.php` and change this line
```
<form method="post" id="payment-form" action="/get_nonce.php">
```

to this
```
<form method="post" id="payment-form" action="/checkout.php">
```

Then after entering card detail, you will see the transaction detail, like in this image

<p align="center">
  <img src="https://github.com/quyetdc/braintree_php_example/blob/master/images/braintree-transaction.png" width="80%" style="margin: auto" />
</p>


## Braintree

1. First, you need to understand how Braintree works, what is `client token`, what is `payment method nonce`, and how it works on this url
`https://developers.braintreepayments.com/start/overview`

2. You will need to register a Braintree sandbox account via `https://www.braintreepayments.com/sandbox`

3. You will need to gain your Braintree API credentials, including `public_key`, `private_key`, `merchant_id`. These credentials are needed for your `.env` file, or somewhere in your `config/env/configs.php` in a my current Laravel project

4. (optional) If your API configure different Merchant Account ID for different Currency, you will need access to your Braintree sandbox `Settings` (most top left navigation option) and then `Processing`. In this page you will see a place to setup new Merchant Account ID. Please make sure that the Merchant Account Id is correct to what you have on sandbox if you set it to `Braintree\Transaction::sale`

*Good luck*


