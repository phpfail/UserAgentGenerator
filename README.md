# PHP Random User Agent Generator
Written in PHP, this script will generate real User Agent strings with optional capabilities to specify OS, Browser, Mobile, ect. simply by passing a parameter to the function called to generate the User Agent string. Created with the intentions of eliminating footprints while scraping the web for content using cURL because a truly solution to generate a truly random User Agent was not availble.

__Other Randomly Generated Segments__
* Version of Android with Device / build number strings, and variations of known UA's for specific devices.
* Version for iphone, ipad, or ipod from iOS 7-10
* Version of Windows from Windows Vista thru Windows 10
* Version of Chrome/Firefox/Safari for major versions that are still commonly used
* Randomly adds en-US; to some the user agents, as well as the U; flag

It's also easy to customize with random syntax parsing and random number generating, see `Customizing User Agent` below
***
# Usage Summary
1. Require `useragent.php` in the file where the User Agent string will be generated.
..*```php require_once __DIR__.'/userAgent.php';```
2. Initialize the `userAgent` class 
..*```php $agent = new userAgent;```
3. Call the `generate` function to generate a random User Agent string as many times as needed. 
..*```php $UAString = $agent->generate();``` 

### Example Usage 
```php 
$agent = new userAgent();
$agent->generate();
```

**Or a one liner for one time use**
```php
$userAgent = (new userAgent) ->generate();
```

### Example Usage when specifying a single OS, Browser, or Mobile
You can specify either `firefox`, `chrome`, `mobile`, `windows`, `mac`, `iphone`, `ipad`, `ipod`, and `android`.
```php
$agent = new userAgent();
$UAFireFox = $agent->generate('firefox'); // generates a firefox user agent on either windows or mac
$UAChrome = $agent->generate('chrome'); // generates a chrome user agent on either windows or mac
$UAMobile = $agent->generate('mobile'); // generates a mobile user agent for either iphone or android
$UAWindows = $agent->generate('windows'); // generates a windows user agent for either firefox or chrome
$UAMac = $agent->generate('mac'); // generates a mac user agent for either firefox or chrome
$UAiPhone = $agent->generate('iphone'); // generates an iphone user agent for iOS 7-10
$UAAndroid = $agent->generate('android'); // generates an android user agent for android versions 4.3-7.1, and includes randomly generated device and build number string that is correct for the version of android being displayed.
```

***
# Customizing User Agent
You can edit the provided variables that the User Agent strings are generated from, using the syntax below to generate random or "spin" content.
**The syntax formatting works as shown below:**
```
$randomExample = 'Android [7.1|6.0|5.1]; Samsung Galaxy[ Note III| S6| S7|]'; // will choose a random android version 7.1, 6.0 or 5.1, and either Note III, S6, S7, or Nothing will be returned in the second option.  
```

__Additional Syntax:__ Random number between specified range is formatted as follows 
```
$randomWindows = 'Windows; Windows 6.:number0-3:'; // :number0-3: will generate a number 0-3
```

### NOTE: Nesting **is** supported in the __random or "spin"__ syntax 
---
```php
$version = 'Android [7.[1|0]|6.0|5.1]';// will work as expected
```

#### but nesting is **NOT** supported within the __random number__ syntax
```php
$version = 'Android :number5-:number6-7::'; // will NOT return any number, and ':number5-:number6-7::' will be returned.
$version = 'Android :number4-7:.:number0-1:'; // will return numbers 4.0, 4.1, 5.0, 5.1, 6.0, 6.1, 7.0, and 7.1
```
***
# 100 Randomly Generated User Agents
- firefox `Mozilla/5.0 (Macintosh; Intel Mac OS X 8_9_0; en-US) Gecko/20100101 Firefox/51.8`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 8_1_8; like Mac OS X) AppleWebKit/603.42 (KHTML, like Gecko)  Chrome/55.0.2274.239 Mobile Safari/602.0`
- chrome `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 9_0_2; en-US) AppleWebKit/536.14 (KHTML, like Gecko) Chrome/54.0.2081.397 Safari/603`
- explorer `Mozilla / 5.0 (compatible; MSIE 8.0; Windows NT 6.1;; en-US Trident / 4.0)`
- chrome `Mozilla/5.0 (Linux; Linux i571 x86_64) AppleWebKit/537.43 (KHTML, like Gecko) Chrome/51.0.3846.388 Safari/603`
- chrome `Mozilla/5.0 (Macintosh; Intel Mac OS X 8_4_3) AppleWebKit/535.21 (KHTML, like Gecko) Chrome/53.0.1704.131 Safari/600`
- chrome `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_4_3) AppleWebKit/534.23 (KHTML, like Gecko) Chrome/55.0.1880.128 Safari/536`
- firefox `Mozilla/5.0 (Windows; Windows NT 10.0; Win64; x64) Gecko/20130401 Firefox/45.8`
- mobile `Mozilla/5.0 (Android; Android 5.0.2; SAMSUNG-SM-N915F Build/LRX22C) AppleWebKit/602.21 (KHTML, like Gecko)  Chrome/54.0.2606.215 Mobile Safari/601.1`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 7_1_3; like Mac OS X) AppleWebKit/535.4 (KHTML, like Gecko)  Chrome/48.0.2930.225 Mobile Safari/601.6`
- android `Mozilla/5.0 (Linux; U; Android 5.0.1; LG-D724 Build/LRX22G) AppleWebKit/535.21 (KHTML, like Gecko)  Chrome/55.0.1941.357 Mobile Safari/603.9`
- explorer `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 6.0; Win64; x64; en-US Trident / 4.0)`
- android `Mozilla/5.0 (Linux; Android 7.0; Pixel XL Build/NME91E) AppleWebKit/535.43 (KHTML, like Gecko)  Chrome/52.0.2076.100 Mobile Safari/534.6`
- firefox `Mozilla/5.0 (Linux; Linux x86_64) Gecko/20100101 Firefox/48.9`
- explorer `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 10.0; Trident / 4.0)`
- explorer `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; U; Windows NT 6.2; WOW64 Trident / 5.0)`
- explorer `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; U; Windows NT 6.1; WOW64 Trident / 4.0)`
- explorer `Mozilla / 5.0 (compatible; MSIE 8.0; Windows NT 6.2;; en-US Trident / 4.0)`
- mobile `Mozilla/5.0 (iPod; CPU iPod OS 7_6_0; like Mac OS X) AppleWebKit/603.8 (KHTML, like Gecko)  Chrome/55.0.3819.161 Mobile Safari/602.8`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 9_11_0; like Mac OS X) AppleWebKit/603.49 (KHTML, like Gecko)  Chrome/55.0.2468.111 Mobile Safari/600.5`
- explorer `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; Windows NT 6.2; WOW64 Trident / 5.0)`
- explorer `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; U; Windows NT 6.3; WOW64 Trident / 4.0)`
- explorer `Mozilla / 5.0 (compatible; MSIE 7.0; Windows NT 6.2; WOW64; en-US Trident / 4.0)`
- firefox `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_3_9; en-US) Gecko/20100101 Firefox/51.1`
- mobile `Mozilla/5.0 (iPhone; CPU iPhone OS 9_6_8; like Mac OS X) AppleWebKit/601.33 (KHTML, like Gecko)  Chrome/48.0.3552.358 Mobile Safari/537.3`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 8_4_7; like Mac OS X) AppleWebKit/534.47 (KHTML, like Gecko)  Chrome/48.0.1969.227 Mobile Safari/601.8`
- android `Mozilla/5.0 (Linux; Android 4.4; SAMSUNG SM-G900FG Build/KOT49H) AppleWebKit/603.42 (KHTML, like Gecko)  Chrome/49.0.3391.330 Mobile Safari/600.8`
- firefox `Mozilla/5.0 (Windows; U; Windows NT 10.0; x64; en-US) Gecko/20130401 Firefox/49.5`
- firefox `Mozilla/5.0 (Windows NT 6.3; Win64; x64) Gecko/20100101 Firefox/47.5`
- chrome `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 7_1_7) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/47.0.3068.323 Safari/601`
- android `Mozilla/5.0 (Android; Android 5.1; Nexus 9 Build/LMY48B) AppleWebKit/537.34 (KHTML, like Gecko)  Chrome/55.0.3033.213 Mobile Safari/536.4`
- firefox `Mozilla/5.0 (Linux; U; Linux i545 x86_64) Gecko/20100101 Firefox/48.0`
- android `Mozilla/5.0 (Linux; U; Android 7.0; LG-H920 Build/NRD90C) AppleWebKit/601.19 (KHTML, like Gecko)  Chrome/55.0.3121.354 Mobile Safari/536.5`
- firefox `Mozilla/5.0 (Windows; U; Windows NT 6.1; x64) Gecko/20130401 Firefox/47.9`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 7_6_6; like Mac OS X) AppleWebKit/603.49 (KHTML, like Gecko)  Chrome/54.0.2200.183 Mobile Safari/533.8`
- chrome `Mozilla/5.0 (Linux i563 x86_64) AppleWebKit/536.18 (KHTML, like Gecko) Chrome/54.0.3121.234 Safari/537`
- chrome `Mozilla/5.0 (Windows; Windows NT 10.0; Win64; x64; en-US) AppleWebKit/533.28 (KHTML, like Gecko) Chrome/55.0.3692.258 Safari/534`
- chrome `Mozilla/5.0 (Windows; Windows NT 6.3; Win64; x64) AppleWebKit/600.2 (KHTML, like Gecko) Chrome/50.0.3394.104 Safari/533`
- explorer `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 10.0; WOW64; en-US Trident / 4.0)`
- explorer `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; Windows NT 10.0;; en-US Trident / 7.0)`
- mobile `Mozilla/5.0 (Linux; Android 5.0.2; HTC 80:number1-2e Build/LRX22G) AppleWebKit/601.45 (KHTML, like Gecko)  Chrome/49.0.2545.245 Mobile Safari/601.7`
- explorer `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; U; Windows NT 6.0; WOW64; en-US Trident / 5.0)`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 8_10_2; like Mac OS X) AppleWebKit/602.18 (KHTML, like Gecko)  Chrome/54.0.3954.220 Mobile Safari/600.1`
- mobile `Mozilla/5.0 (Linux; Android 7.1.1; Pixel C Build/NRD90M) AppleWebKit/533.28 (KHTML, like Gecko)  Chrome/47.0.3338.269 Mobile Safari/537.4`
- firefox `Mozilla/5.0 (Linux x86_64; en-US) Gecko/20100101 Firefox/50.7`
- firefox `Mozilla/5.0 (Linux; U; Linux i580 x86_64; en-US) Gecko/20100101 Firefox/45.8`
- explorer `Mozilla / 5.0 (compatible; MSIE 11.0; Windows NT 10.0; x64; en-US Trident / 7.0)`
- android `Mozilla/5.0 (Linux; Android 5.0.2; LG-D715 Build/LRX22G) AppleWebKit/537.32 (KHTML, like Gecko)  Chrome/53.0.2331.400 Mobile Safari/600.9`
- firefox `Mozilla/5.0 (Windows; U; Windows NT 10.0; x64; en-US) Gecko/20100101 Firefox/51.8`
- firefox `Mozilla/5.0 (U; Linux x86_64) Gecko/20100101 Firefox/48.2`
- firefox `Mozilla/5.0 (Windows NT 10.0; Win64; x64) Gecko/20100101 Firefox/45.4`
- chrome `Mozilla/5.0 (Linux; U; Linux x86_64) AppleWebKit/601.1 (KHTML, like Gecko) Chrome/53.0.1797.164 Safari/600`
- android `Mozilla/5.0 (Linux; U; Android 6.0; HTC OneS dual sim Build/MRA58K) AppleWebKit/600.49 (KHTML, like Gecko)  Chrome/53.0.2252.242 Mobile Safari/603.8`
- chrome `Mozilla/5.0 (Linux; Linux x86_64; en-US) AppleWebKit/535.17 (KHTML, like Gecko) Chrome/53.0.3438.288 Safari/537`
- chrome `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_7; en-US) AppleWebKit/537.39 (KHTML, like Gecko) Chrome/50.0.3521.229 Safari/534`
- android `Mozilla/5.0 (Linux; U; Android 4.3.1; HUAWEI G6-L11 Build/HuaweiG6-L10) AppleWebKit/602.1 (KHTML, like Gecko)  Chrome/50.0.1646.267 Mobile Safari/601.1`
- explorer `Mozilla / 5.0 (compatible; MSIE 10.0; Windows NT 6.3; WOW64; en-US Trident / 6.0)`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 10_5_9; like Mac OS X) AppleWebKit/534.10 (KHTML, like Gecko)  Chrome/49.0.3361.313 Mobile Safari/534.0`
- firefox `Mozilla/5.0 (Linux; Linux i540 x86_64; en-US) Gecko/20100101 Firefox/47.3`
- explorer `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; Windows NT 10.0; x64; en-US Trident / 5.0)`
- firefox `Mozilla/5.0 (Linux x86_64) Gecko/20100101 Firefox/45.2`
- chrome `Mozilla/5.0 (Windows; Windows NT 6.1; WOW64) AppleWebKit/536.40 (KHTML, like Gecko) Chrome/55.0.3945.243 Safari/600`
- chrome `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_10_9) AppleWebKit/600.5 (KHTML, like Gecko) Chrome/48.0.3924.218 Safari/537`
- explorer `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; U; Windows NT 10.0; Win64; x64 Trident / 6.0)`
- mobile `Mozilla/5.0 (iPhone; CPU iPhone OS 7_1_9; like Mac OS X) AppleWebKit/601.30 (KHTML, like Gecko)  Chrome/51.0.3939.118 Mobile Safari/536.9`
- mobile `Mozilla/5.0 (iPod; CPU iPod OS 10_12_8; like Mac OS X) AppleWebKit/603.34 (KHTML, like Gecko)  Chrome/50.0.1976.205 Mobile Safari/602.1`
- explorer `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; U; Windows NT 6.1; WOW64; en-US Trident / 5.0)`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 10_1_8; like Mac OS X) AppleWebKit/537.19 (KHTML, like Gecko)  Chrome/49.0.2403.187 Mobile Safari/601.2`
- explorer `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; Windows NT 6.0;; en-US Trident / 5.0)`
- chrome `Mozilla/5.0 (Linux; Linux i675 ; en-US) AppleWebKit/535.44 (KHTML, like Gecko) Chrome/50.0.2627.301 Safari/537`
- chrome `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 9_4_9) AppleWebKit/536.46 (KHTML, like Gecko) Chrome/48.0.3272.381 Safari/536`
- firefox `Mozilla/5.0 (Linux; U; Linux x86_64; en-US) Gecko/20130401 Firefox/51.0`
- android `Mozilla/5.0 (Linux; Android 5.0.1; HTC 80:number1-2s Build/JSS15J) AppleWebKit/535.12 (KHTML, like Gecko)  Chrome/53.0.1147.217 Mobile Safari/536.5`
- explorer `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; U; Windows NT 10.0; Trident / 5.0)`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 9_6_5; like Mac OS X) AppleWebKit/600.41 (KHTML, like Gecko)  Chrome/50.0.2997.342 Mobile Safari/601.9`
- android `Mozilla/5.0 (Linux; Android 7.1; SAMSUNG GT-I9100 Build/KTU84P) AppleWebKit/537.6 (KHTML, like Gecko)  Chrome/47.0.3009.328 Mobile Safari/603.1`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 7_7_8; like Mac OS X) AppleWebKit/600.41 (KHTML, like Gecko)  Chrome/52.0.2069.137 Mobile Safari/533.1`
- chrome `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_4_7) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/53.0.2095.151 Safari/537`
- explorer `Mozilla / 5.0 (compatible; MSIE 9.0; Windows NT 6.0; Win64; x64; en-US Trident / 5.0)`
- chrome `Mozilla/5.0 (Windows; Windows NT 10.0;) AppleWebKit/602.28 (KHTML, like Gecko) Chrome/52.0.1028.376 Safari/600`
- firefox `Mozilla/5.0 (Windows; Windows NT 10.0;; en-US) Gecko/20130401 Firefox/48.7`
- android `Mozilla/5.0 (Linux; U; Android 5.0; Nokia 1100 LTE Build/GRK39F) AppleWebKit/536.33 (KHTML, like Gecko)  Chrome/55.0.3458.205 Mobile Safari/600.1`
- mobile `Mozilla/5.0 (Linux; U; Android 4.3.1; Nokia 3310 Build/IMM76D) AppleWebKit/602.35 (KHTML, like Gecko)  Chrome/50.0.1607.354 Mobile Safari/603.1`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 8_4_8; like Mac OS X) AppleWebKit/600.34 (KHTML, like Gecko)  Chrome/49.0.1492.113 Mobile Safari/537.4`
- chrome `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_1_8) AppleWebKit/603.24 (KHTML, like Gecko) Chrome/50.0.2685.151 Safari/602`
- firefox `Mozilla/5.0 (Linux; Linux x86_64; en-US) Gecko/20130401 Firefox/45.1`
- explorer `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; U; Windows NT 10.0; Win64; x64 Trident / 4.0)`
- mobile `Mozilla/5.0 (Android; Android 4.4.4; Nexus5 V7.1 Build/KOT49H) AppleWebKit/534.37 (KHTML, like Gecko)  Chrome/54.0.1373.366 Mobile Safari/601.2`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 7_8_2; like Mac OS X) AppleWebKit/602.21 (KHTML, like Gecko)  Chrome/53.0.1237.266 Mobile Safari/603.4`
- explorer `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 10.0; x64 Trident / 4.0)`
- mobile `Mozilla/5.0 (Android; Android 4.4.1; SAMSUNG SM-J110G Build/KTU84P) AppleWebKit/533.43 (KHTML, like Gecko)  Chrome/51.0.3941.361 Mobile Safari/601.0`
- explorer `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 10.0;; en-US Trident / 4.0)`
- chrome `Mozilla/5.0 (Linux; U; Linux x86_64; en-US) AppleWebKit/534.13 (KHTML, like Gecko) Chrome/52.0.1674.317 Safari/536`
- chrome `Mozilla/5.0 (Windows; U; Windows NT 10.0; x64) AppleWebKit/601.6 (KHTML, like Gecko) Chrome/48.0.3704.144 Safari/603`
- explorer `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; Windows NT 10.0; WOW64 Trident / 6.0)`
- mobile `Mozilla/5.0 (iPod; CPU iPod OS 8_5_1; like Mac OS X) AppleWebKit/534.12 (KHTML, like Gecko)  Chrome/47.0.3752.207 Mobile Safari/533.5`
- chrome `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 9_9_3; en-US) AppleWebKit/601.21 (KHTML, like Gecko) Chrome/52.0.1414.116 Safari/535`
- iphone `Mozilla/5.0 (iPhone; CPU iPhone OS 8_7_0; like Mac OS X) AppleWebKit/603.42 (KHTML, like Gecko)  Chrome/53.0.2935.198 Mobile Safari/535.7`
- chrome `Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/601.2 (KHTML, like Gecko) Chrome/48.0.3045.106 Safari/602`

