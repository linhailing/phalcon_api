<?php
/*
 * Modified: prepend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

require_once APP_PATH."/config/error.php";

return new \Phalcon\Config([
    'database' => [
        'adapter'     => 'Mysql',
        'host'        => '127.0.0.1',
        'username'    => 'root',
        'password'    => 'henry',
        'dbname'      => 'books',
        'charset'     => 'utf8',
    ],
    'application' => [
        'appDir'         => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'migrationsDir'  => APP_PATH . '/migrations/',
        'viewsDir'       => APP_PATH . '/views/',
        'pluginsDir'     => APP_PATH . '/plugins/',
        'libraryDir'     => APP_PATH . '/library/',
        'cacheDir'       => BASE_PATH . '/cache/',
        'repositoriesDir'  => APP_PATH . '/repositories/',

        // This allows the baseUri to be understand project paths that are not in the root directory
        // of the webpspace.  This will break if the public/index.php entry point is moved or
        // possibly if the web server rewrite rules are changed. This can also be set to a static path.
        'baseUri'        => preg_replace('/public([\/\\\\])index.php$/', '', $_SERVER["PHP_SELF"]),
    ],
    'redis' => [
        'host' => '127.0.0.1',
        'prefix' => '',
        'port' => '6379',
        'auth' => 'henry',
        'index' => '0',
        'persistent' => false,
    ],
    'errorList' => $errorList,
    'debug' => true,
    'logging' => true,
    "jwt" => [
        'privateKey' => "-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAqnRGiaDILGPvm83q48og1nN1b/cDzVEqvxGVbS3XqZqMFhRO
zB5w8GDD8v5KSRVHQIs5wGf6vmzCLfIqwQzE3jKPtumqejmKIoo5Gkpk28dT2LX5
A37PoL+tyMOjNabPArseo0gW7dXfbwPGhQrS2b+uyu4Hakxm8r7Mmupv17ITJYkR
NPRw9F5Khneo5K6UH3tUrXf7d7hmrGsfKvUNCRju6ydlkGTG+XJnUAOm4wyuaOBs
jLX6aboRNg+oNwg/ohOonH8IrhCNOMQqTmltawnX/5HC2/8Sk8Yz/XMI1nVhjM5f
bWurDdtwFudbphGvzZMJZyQhNJ1eXDGz3nl1SQIDAQABAoIBAHfL+LdJlOX95qzt
8CPgL2wJAYSLatSmMxDOXuK40VWWFNZ/t1GmI2IN4CmrprHujoFCWHhtm8Cx11dL
V9kODF7N0kuPtgzo27iixLdBidkdIkSwwC5AtdQYYx8ywEY40kztDf9b7yGAquPv
F1rx3HbFTSe6WuPOhpwclNhb4/cHPkI6vc+IRWqilqfnuCJ9NNLSAlPtDRWGI0Rs
WYyHhJJdtV8FH8jHSN8pZ9EXJ5ASWSYh7eqUNtXbr1iV5e2+kFyjtw8zlaqCegrZ
3XY6ETqRnldtDGDW7Uy+eKz6KXCMJ1TY94TokpRGfQOGd/WEZt6pGQ/Ey/UJx0Pz
JAMhfgECgYEA3xd4rxawcAZD3NYBgCJ3ofDdt+0gLOVx18j8/b55CyVR6qeXlTGc
Ow4l773VF2GHzjKxTiOH9TSt+ynYgnDga9BPOFvCWRAf9OaiIPDbCLb0k4rR6Fyw
YPbtBIo1ZnMYC1OVEtXgWqhgtrsG96RmStnsyjArLzXFZDvt/LA00HECgYEAw5kT
B1U2FMoLCW6TSGHgYQIAtzJOmOlcuAwu78ZtunhzlPeU47OPBgZ0EVXC6QQIIEJO
OI1+q3IU+ODEdiqeYNcxBUd1Z+KisQNX/dlNKwfK39+OAr+sKrvXQ/kmWBity2yk
/QOAbFwAr6eUNHPfZH13BynStT9wmN/NCsKL3lkCgYEAnixEEs/hdOvcPb01/yVw
8M6YRQnJIEvltXr5dOcRZ0eklt0QamVsQaq8VwifBx7NbPMgJyimAsLBAC0hJwrk
80wUfv8AAqmeHsNO/FAI3FrreZiZT0g4fedVETz0s5iy2YT/UwV1NpHfUG+2duqG
5Fcyvf/8/lH/jBu5lslQCOECgYBjxS/8nI1ye0C39ewwjqRaNyBQUdvfiaFey/Ah
JDESXaBvSv5qS0vYAfCwavN50jGm6stlc186an2iGVx8/e49bWa2z6VmcScVbaQz
euUu3tGv8iNI6aYTQi9in7LcWvJDgk6CNIgMPb2n263wN26qnojZYY72Hr77a6T2
KRgZOQKBgQDQJP4SRhVze/D+hyxazVsqsG8jFzBhsBut1i/BomnLQyKzrip/mMiR
WKEks4U6jKigQbFQ+y3ofu+EnGjuaYQhq36Vkt+LpylQjiivmcESW6I8d0bHkaTz
Iw4OvyWvoJmf07vGREJLQ9YPOOwv3AmnHuAch3GKR3uLKIk5w25+ow==
-----END RSA PRIVATE KEY-----",
        'publicKey' => "-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqnRGiaDILGPvm83q48og
1nN1b/cDzVEqvxGVbS3XqZqMFhROzB5w8GDD8v5KSRVHQIs5wGf6vmzCLfIqwQzE
3jKPtumqejmKIoo5Gkpk28dT2LX5A37PoL+tyMOjNabPArseo0gW7dXfbwPGhQrS
2b+uyu4Hakxm8r7Mmupv17ITJYkRNPRw9F5Khneo5K6UH3tUrXf7d7hmrGsfKvUN
CRju6ydlkGTG+XJnUAOm4wyuaOBsjLX6aboRNg+oNwg/ohOonH8IrhCNOMQqTmlt
awnX/5HC2/8Sk8Yz/XMI1nVhjM5fbWurDdtwFudbphGvzZMJZyQhNJ1eXDGz3nl1
SQIDAQAB
-----END PUBLIC KEY-----",

    ],
]);
