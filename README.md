# 加密

[TOC]

## 安装

```
composer require xudongyss/secure
```
## 快速使用

### AES

#### 初始化

```php
require_once 'vendor/autoload.php';

use XuDongYss\Secure\AES;

/* 加密密钥 */
$key = 'a6685c701698f59258d4cd09fd6e6033';
/* 加密方式：CBC/CTR/OFB/CFB/ECB */
$mode = 'ECB';
$cipher = new AES($key, $mode);
```

#### 加密

```php
$ciphertext = $cipher->encrypt('{"PATH":"\/sbin:\/usr\/sbin:\/bin:\/usr\/bin","LD_LIBRARY_PATH":"\/usr\/local\/apache\/lib:\/usr\/local\/openssl\/lib","PHPRC":"\/usr\/local\/php7\/bin\/php","PHP_FCGI_MAX_REQUESTS":"1000","SCRIPT_NAME":"\/index.php","REQUEST_URI":"\/App\/Team\/Index\/team_list?uid=100000014&password=13fd34605d41452112dc6c7fb2cdd381&language_id=1&p=1","QUERY_STRING":"\/App\/Team\/Index\/team_list&uid=100000014&password=13fd34605d41452112dc6c7fb2cdd381&language_id=1&p=1","REQUEST_METHOD":"GET","SERVER_PROTOCOL":"HTTP\/1.1","GATEWAY_INTERFACE":"CGI\/1.1","REDIRECT_QUERY_STRING":"\/App\/Team\/Index\/team_list&uid=100000014&password=13fd34605d41452112dc6c7fb2cdd381&language_id=1&p=1","REDIRECT_URL":"\/App\/Team\/Index\/team_list","REMOTE_PORT":"23168","SCRIPT_FILENAME":"\/home\/wwwroot\/lingrenwu\/index.php","SERVER_ADMIN":"you@example.com","CONTEXT_DOCUMENT_ROOT":"\/home\/wwwroot\/lingrenwu\/","CONTEXT_PREFIX":"","REQUEST_SCHEME":"http","DOCUMENT_ROOT":"\/home\/wwwroot\/lingrenwu\/","REMOTE_ADDR":"106.57.119.173","SERVER_PORT":"80","SERVER_ADDR":"172.16.156.208","SERVER_NAME":"lingrenwu.cnsunrun.com","SERVER_SOFTWARE":"Apache\/2.4.29 (Unix) OpenSSL\/1.0.2n PHP\/5.6.40 mod_fcgid\/2.3.9","SERVER_SIGNATURE":"","HTTP_COOKIE":"PHPSESSID=1ea7e8d084e90ff3be222591bae37fa0","HTTP_ACCEPT_LANGUAGE":"zh-CN,zh;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_ACCEPT_ENCODING":"gzip, deflate","HTTP_X_REQUESTED_WITH":"XMLHttpRequest","HTTP_USER_AGENT":"Mozilla\/5.0 (Linux; Android 10; Redmi K30 5G Build\/QKQ1.191222.002; wv) AppleWebKit\/537.36 (KHTML, like Gecko) Version\/4.0 Chrome\/83.0.4103.101 Mobile Safari\/537.36 Html5Plus\/1.0 (Immersed\/34.545456)","HTTP_ACCEPT":"application\/json","HTTP_CONNECTION":"close","HTTP_HOST":"lingrenwu.cnsunrun.com","REDIRECT_STATUS":"200","FCGI_ROLE":"RESPONDER","PHP_SELF":"\/index.php","REQUEST_TIME_FLOAT":1605970289.714683,"REQUEST_TIME":1605970289,"argv":["\/App\/Team\/Index\/team_list&uid=100000014&password=13fd34605d41452112dc6c7fb2cdd381&language_id=1&p=1"],"argc":1,"PATH_INFO":"Team\/Index\/team_list"}');
echo $ciphertext;//base64后的结果
```

#### 解密

```php
$cipher->decrypt($ciphertext);
```

