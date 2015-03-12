Tater
==========

A minimal, configurable library for generating TOTP tokens

Notes
----------
* Tested on PHP 5.6
* Depending on the service, keys may need to be decoded before tokens are generated (Google Authenticator uses keys encoded in base32)
* Due to PHP's limited support of 32-bit integers, step counts that exceed a 32-bit value may lead to an invalid token
