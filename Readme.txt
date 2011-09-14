=Introduction
This contains examples for basic PHP usage of Raydash
=Getting started
You will need to get a userid and secret from http://www.raydash.com. Next, you will either need to configure them in config.php, or set the PHP environment variables RAYDASH_USERID and RAYDASH_SECRET, respectively.
=Examples
==Example 1
example1.php demonstrates the basic usage of Raydash. There are two embeded flash object: one for playing video streams, and one for recording from your webcam. You start by getting a token from Raydash, and passing it to the Flash elements via flashvars. Next, can use the API to connect different streams.
