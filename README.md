## api config

## install jwt(composer require firebase/php-jwt)

## phalcon config file

+ public/index.php

```angular2html
require __DIR__.'/../vendor/autoload.php';
```

+ Creating a Public and Private Key Pair

```angular2html
# private key
$ openssl genrsa -out privkey.pem 2048

# public key
$ openssl rsa -in privkey.pem -pubout -out pubkey.pem
```

+ 把秘钥和私钥配置到配置文件中

