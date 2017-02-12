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
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_3_5; like Mac OS X) AppleWebKit/600.50 (KHTML, like Gecko)  Chrome/47.0.2772.369 Mobile Safari/535.7`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_5_3; like Mac OS X) AppleWebKit/537.38 (KHTML, like Gecko)  Chrome/48.0.3838.392 Mobile Safari/533.1`

**chrome** `Mozilla/5.0 (Windows; Windows NT 6.1;) AppleWebKit/600.37 (KHTML, like Gecko) Chrome/50.0.1856.245 Safari/602`

**android** `Mozilla/5.0 (Linux; U; Android 6.0; SM-D920I Build/MMB29V) AppleWebKit/600.31 (KHTML, like Gecko)  Chrome/48.0.2194.163 Mobile Safari/536.3`

**chrome** `Mozilla/5.0 (Linux x86_64; en-US) AppleWebKit/602.1 (KHTML, like Gecko) Chrome/49.0.2299.268 Safari/602`

**mobile** `Mozilla/5.0 (iPad; CPU iPad OS 7_12_2 like Mac OS X) AppleWebKit/602.6 (KHTML, like Gecko)  Chrome/48.0.3111.237 Mobile Safari/535.6`

**mobile** `Mozilla/5.0 (iPod; CPU iPod OS 8_2_9; like Mac OS X) AppleWebKit/537.44 (KHTML, like Gecko)  Chrome/51.0.3284.288 Mobile Safari/537.2`

**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows NT 6.0; Win64; x64; en-US Trident / 4.0)`

**mobile** `Mozilla/5.0 (Android; Android 7.1.1; Nexus 7X Build/NME91E) AppleWebKit/535.27 (KHTML, like Gecko)  Chrome/50.0.3382.193 Mobile Safari/533.0`

**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; Windows NT 6.2; Trident / 4.0)`

**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; U; Windows NT 6.0; WOW64 Trident / 5.0)`

**firefox** `Mozilla/5.0 (Windows NT 6.0; WOW64) Gecko/20130401 Firefox/46.1`

**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; Windows NT 10.0; x64; en-US Trident / 5.0)`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_7_4; like Mac OS X) AppleWebKit/600.49 (KHTML, like Gecko)  Chrome/52.0.2408.187 Mobile Safari/534.8`

**chrome** `Mozilla/5.0 (U; Linux i543 ; en-US) AppleWebKit/600.9 (KHTML, like Gecko) Chrome/49.0.2777.202 Safari/536`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_9_1; like Mac OS X) AppleWebKit/535.18 (KHTML, like Gecko)  Chrome/52.0.3146.159 Mobile Safari/536.4`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_8; like Mac OS X) AppleWebKit/603.28 (KHTML, like Gecko)  Chrome/51.0.2018.273 Mobile Safari/602.1`

**firefox** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_3_3; en-US) Gecko/20100101 Firefox/48.4`

**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; Windows NT 6.2; Win64; x64 Trident / 6.0)`

**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; U; Windows NT 10.0; WOW64; en-US Trident / 6.0)`

**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; Windows NT 10.0; Win64; x64 Trident / 6.0)`

**chrome** `Mozilla/5.0 (Linux; U; Linux i563 x86_64; en-US) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/47.0.1910.167 Safari/601`

**chrome** `Mozilla/5.0 (Windows; Windows NT 6.0; Win64; x64; en-US) AppleWebKit/601.44 (KHTML, like Gecko) Chrome/47.0.3938.318 Safari/603`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_4_9; like Mac OS X) AppleWebKit/603.19 (KHTML, like Gecko)  Chrome/53.0.1605.147 Mobile Safari/600.1`

**firefox** `Mozilla/5.0 (Windows; U; Windows NT 6.2; Win64; x64; en-US) Gecko/20100101 Firefox/51.4`

**firefox** `Mozilla/5.0 (Windows; Windows NT 10.0; Win64; x64; en-US) Gecko/20100101 Firefox/45.4`

**android** `Mozilla/5.0 (Linux; U; Android 6.0; Nexus 5X Build/MMB29K) AppleWebKit/536.32 (KHTML, like Gecko)  Chrome/53.0.1771.136 Mobile Safari/537.1`

**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows NT 10.0; WOW64; en-US Trident / 4.0)`

**chrome** `Mozilla/5.0 (Windows NT 6.1; WOW64; en-US) AppleWebKit/603.26 (KHTML, like Gecko) Chrome/50.0.1553.119 Safari/603`

**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0; en-US) Gecko/20100101 Firefox/48.7`

**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows NT 10.0; WOW64; en-US Trident / 5.0)`

**android** `Mozilla/5.0 (Linux; U; Android 4.3.1; HP 655 Notebook PC Build/JSS15J) AppleWebKit/601.47 (KHTML, like Gecko)  Chrome/52.0.2402.118 Mobile Safari/536.5`

**firefox** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 7_1_0) Gecko/20100101 Firefox/47.4`

**mobile** `Mozilla/5.0 (Android; Android 4.3.1; HUAWEI G6-L10 Build/HuaweiG6-L10) AppleWebKit/534.29 (KHTML, like Gecko)  Chrome/51.0.3977.321 Mobile Safari/603.7`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_11_0; like Mac OS X) AppleWebKit/603.9 (KHTML, like Gecko)  Chrome/50.0.1295.124 Mobile Safari/535.7`

**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; Windows NT 10.0; Trident / 4.0)`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_7_2; like Mac OS X) AppleWebKit/535.34 (KHTML, like Gecko)  Chrome/55.0.1471.156 Mobile Safari/600.7`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_6_8; like Mac OS X) AppleWebKit/601.27 (KHTML, like Gecko)  Chrome/55.0.1534.243 Mobile Safari/536.3`

**firefox** `Mozilla/5.0 (Linux; Linux i655 ; en-US) Gecko/20130401 Firefox/47.1`

**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; Windows NT 10.0; x64; en-US Trident / 6.0)`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_4_5; like Mac OS X) AppleWebKit/536.12 (KHTML, like Gecko)  Chrome/49.0.2142.266 Mobile Safari/602.7`

**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; U; Windows NT 6.1; x64 Trident / 4.0)`

**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows NT 6.0; Win64; x64; en-US Trident / 4.0)`

**android** `Mozilla/5.0 (Linux; U; Android 7.1; GT-I9400 Build/KTU84P) AppleWebKit/536.30 (KHTML, like Gecko)  Chrome/50.0.1449.212 Mobile Safari/535.9`

**firefox** `Mozilla/5.0 (Linux; Linux x86_64) Gecko/20100101 Firefox/46.3`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_11_2; like Mac OS X) AppleWebKit/600.28 (KHTML, like Gecko)  Chrome/54.0.2315.234 Mobile Safari/601.5`

**mobile** `Mozilla/5.0 (Linux; U; Android 4.4.4; E:number:20-23:00 Build/24.0.A.1.34) AppleWebKit/600.30 (KHTML, like Gecko)  Chrome/54.0.1916.125 Mobile Safari/537.4`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_6_7; like Mac OS X) AppleWebKit/536.19 (KHTML, like Gecko)  Chrome/52.0.1647.200 Mobile Safari/602.9`

**firefox** `Mozilla/5.0 (Linux i572 ) Gecko/20100101 Firefox/50.9`

**chrome** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/534.31 (KHTML, like Gecko) Chrome/53.0.3653.271 Safari/603`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_12_9; like Mac OS X) AppleWebKit/600.2 (KHTML, like Gecko)  Chrome/53.0.3107.343 Mobile Safari/533.6`

**chrome** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 9_2_6; en-US) AppleWebKit/600.24 (KHTML, like Gecko) Chrome/55.0.1960.286 Safari/537`

**firefox** `Mozilla/5.0 (Windows NT 6.3;) Gecko/20100101 Firefox/48.1`

**firefox** `Mozilla/5.0 (Windows; Windows NT 6.3; x64) Gecko/20100101 Firefox/50.8`

**chrome** `Mozilla/5.0 (Windows; U; Windows NT 10.0; Win64; x64) AppleWebKit/600.8 (KHTML, like Gecko) Chrome/51.0.2295.345 Safari/602`

**firefox** `Mozilla/5.0 (Linux; U; Linux i576 x86_64; en-US) Gecko/20100101 Firefox/47.8`

**chrome** `Mozilla/5.0 (Macintosh; Intel Mac OS X 7_4_5; en-US) AppleWebKit/601.50 (KHTML, like Gecko) Chrome/51.0.1585.355 Safari/534`

**mobile** `Mozilla/5.0 (iPod; CPU iPod OS 7_11_5; like Mac OS X) AppleWebKit/601.49 (KHTML, like Gecko)  Chrome/52.0.2616.276 Mobile Safari/602.7`

**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; U; Windows NT 6.0; Win64; x64 Trident / 4.0)`

**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows NT 6.3; Win64; x64 Trident / 5.0)`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 10_5_0; like Mac OS X) AppleWebKit/535.19 (KHTML, like Gecko)  Chrome/53.0.2887.316 Mobile Safari/600.2`

**chrome** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_0_3) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/50.0.3264.344 Safari/601`

**android** `Mozilla/5.0 (Linux; Android 5.0.1; SAMSUNG-SM-N910G Build/LRX22C) AppleWebKit/603.48 (KHTML, like Gecko)  Chrome/54.0.3938.114 Mobile Safari/601.3`

**chrome** `Mozilla/5.0 (Windows; Windows NT 6.3; WOW64) AppleWebKit/536.46 (KHTML, like Gecko) Chrome/51.0.3428.285 Safari/534`

**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; U; Windows NT 6.1; Trident / 6.0)`

**mobile** `Mozilla/5.0 (iPod; CPU iPod OS 8_7_8; like Mac OS X) AppleWebKit/535.23 (KHTML, like Gecko)  Chrome/52.0.1215.361 Mobile Safari/533.9`

**mobile** `Mozilla/5.0 (iPad; CPU iPad OS 7_4_7 like Mac OS X) AppleWebKit/533.43 (KHTML, like Gecko)  Chrome/55.0.3232.315 Mobile Safari/602.1`

**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows NT 10.0; Trident / 5.0)`

**chrome** `Mozilla/5.0 (Linux x86_64; en-US) AppleWebKit/603.33 (KHTML, like Gecko) Chrome/48.0.3385.324 Safari/537`

**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows NT 10.0;; en-US Trident / 6.0)`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_11_4; like Mac OS X) AppleWebKit/600.41 (KHTML, like Gecko)  Chrome/50.0.3458.379 Mobile Safari/600.0`

**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; Windows NT 10.0; x64 Trident / 5.0)`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_10_6; like Mac OS X) AppleWebKit/534.41 (KHTML, like Gecko)  Chrome/51.0.1620.122 Mobile Safari/603.7`

**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; Windows NT 10.0; WOW64 Trident / 5.0)`

**firefox** `Mozilla/5.0 (Linux x86_64) Gecko/20100101 Firefox/46.0`

**mobile** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_2_2; like Mac OS X) AppleWebKit/603.6 (KHTML, like Gecko)  Chrome/53.0.3142.176 Mobile Safari/603.0`

**android** `Mozilla/5.0 (Android; Android 7.0; SAMSUNG GT-I9200 Build/KTU84P) AppleWebKit/602.36 (KHTML, like Gecko)  Chrome/50.0.2585.245 Mobile Safari/601.1`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_5; like Mac OS X) AppleWebKit/603.4 (KHTML, like Gecko)  Chrome/49.0.2857.221 Mobile Safari/533.1`

**android** `Mozilla/5.0 (Android; Android 5.0.1; HTC Butterfly S 919 Build/LRX22G) AppleWebKit/601.32 (KHTML, like Gecko)  Chrome/49.0.3998.288 Mobile Safari/533.4`

**firefox** `Mozilla/5.0 (U; Linux i572 x86_64; en-US) Gecko/20100101 Firefox/51.8`

**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; Windows NT 10.0; WOW64; en-US Trident / 7.0)`

**chrome** `Mozilla/5.0 (U; Linux x86_64) AppleWebKit/601.14 (KHTML, like Gecko) Chrome/52.0.1538.218 Safari/533`

**firefox** `Mozilla/5.0 (U; Linux x86_64; en-US) Gecko/20130401 Firefox/50.6`

**firefox** `Mozilla/5.0 (Windows; U; Windows NT 10.0; Win64; x64; en-US) Gecko/20130401 Firefox/46.1`

**firefox** `Mozilla/5.0 (Windows; Windows NT 10.0;) Gecko/20100101 Firefox/51.8`

**chrome** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_10_9; en-US) AppleWebKit/603.40 (KHTML, like Gecko) Chrome/50.0.3453.377 Safari/534`

**chrome** `Mozilla/5.0 (Windows; Windows NT 6.2; x64; en-US) AppleWebKit/602.16 (KHTML, like Gecko) Chrome/54.0.1283.388 Safari/535`

**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; Windows NT 10.0; WOW64 Trident / 4.0)`

**chrome** `Mozilla/5.0 (Macintosh; Intel Mac OS X 9_4_0) AppleWebKit/535.31 (KHTML, like Gecko) Chrome/51.0.3449.222 Safari/537`

**chrome** `Mozilla/5.0 (Windows NT 10.0; WOW64; en-US) AppleWebKit/535.39 (KHTML, like Gecko) Chrome/54.0.3144.372 Safari/602`

**android** `Mozilla/5.0 (Linux; U; Android 5.0.2; HTC Butterfly S 919 Build/LRX22G) AppleWebKit/533.40 (KHTML, like Gecko)  Chrome/53.0.3486.257 Mobile Safari/537.2`

**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 6.2; WOW64; en-US Trident / 4.0)`

**firefox** `Mozilla/5.0 (Windows NT 6.2; WOW64; en-US) Gecko/20100101 Firefox/49.7`

**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; Windows NT 10.0; WOW64 Trident / 5.0)`

**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows NT 10.0; WOW64; en-US Trident / 6.0)`

**mobile** `Mozilla/5.0 (Linux; U; Android 4.4.4; LG-D630 Build/KOT49I) AppleWebKit/603.27 (KHTML, like Gecko)  Chrome/48.0.2892.202 Mobile Safari/534.0`

**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_4; like Mac OS X) AppleWebKit/536.20 (KHTML, like Gecko)  Chrome/50.0.3425.279 Mobile Safari/602.4`

**firefox** `Mozilla/5.0 (U; Linux x86_64) Gecko/20100101 Firefox/49.3`

**android** `Mozilla/5.0 (Linux; U; Android 6.0.1; SM-G920M Build/MMB29K) AppleWebKit/533.14 (KHTML, like Gecko)  Chrome/53.0.1630.208 Mobile Safari/600.0`
