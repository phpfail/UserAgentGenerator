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
**chrome** `Mozilla/5.0 (U; Linux i562 ) AppleWebKit/533.13 (KHTML, like Gecko) Chrome/51.0.1793.335 Safari/602`
**mobile** `Mozilla/5.0 (Linux; Android 6.0.1; Nexus 6 Build/MDB08I) AppleWebKit/601.37 (KHTML, like Gecko)  Chrome/50.0.2009.394 Mobile Safari/603.6`
**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_9) Gecko/20100101 Firefox/46.7`
**firefox** `Mozilla/5.0 (Linux x86_64; en-US) Gecko/20100101 Firefox/48.2`
**firefox** `Mozilla/5.0 (Windows NT 10.0; x64) Gecko/20130401 Firefox/50.8`
**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows NT 6.2; x64 Trident / 5.0)`
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 10.0; WOW64; en-US Trident / 4.0)`
**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; U; Windows NT 10.0; x64 Trident / 5.0)`
**android** `Mozilla/5.0 (Linux; Android 5.0.1; Lenovo A7000-a Build/LRX21M;) AppleWebKit/603.23 (KHTML, like Gecko)  Chrome/50.0.2649.360 Mobile Safari/602.5`
**android** `Mozilla/5.0 (Linux; Android 5.0.2; LG-D713 Build/LRX22G) AppleWebKit/534.9 (KHTML, like Gecko)  Chrome/50.0.1714.365 Mobile Safari/534.3`
**android** `Mozilla/5.0 (Linux; U; Android 6.0; HTC One M8 Build/MRA58K) AppleWebKit/535.37 (KHTML, like Gecko)  Chrome/52.0.3022.120 Mobile Safari/533.8`
**mobile** `Mozilla/5.0 (iPod; CPU iPod OS 10_4_0; like Mac OS X) AppleWebKit/535.30 (KHTML, like Gecko)  Chrome/48.0.2602.226 Mobile Safari/600.1`
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; Windows NT 6.3; Win64; x64 Trident / 4.0)`
**firefox** `Mozilla/5.0 (Linux x86_64; en-US) Gecko/20100101 Firefox/45.5`
**chrome** `Mozilla/5.0 (Linux x86_64; en-US) AppleWebKit/537.3 (KHTML, like Gecko) Chrome/50.0.2636.349 Safari/600`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_9_0; like Mac OS X) AppleWebKit/535.13 (KHTML, like Gecko)  Chrome/55.0.1136.192 Mobile Safari/536.7`
**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3; en-US) Gecko/20100101 Firefox/50.9`
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; U; Windows NT 6.1; WOW64; en-US Trident / 4.0)`
**chrome** `Mozilla/5.0 (Linux; Linux x86_64) AppleWebKit/535.21 (KHTML, like Gecko) Chrome/53.0.3048.284 Safari/601`
**mobile** `Mozilla/5.0 (Linux; U; Android 4.4.4; Nexus5 V7.1 Build/KOT49H) AppleWebKit/603.16 (KHTML, like Gecko)  Chrome/51.0.2243.123 Mobile Safari/600.2`
**firefox** `Mozilla/5.0 (Linux; U; Linux x86_64; en-US) Gecko/20130401 Firefox/51.4`
**firefox** `Mozilla/5.0 (Linux; Linux x86_64) Gecko/20100101 Firefox/50.9`
**firefox** `Mozilla/5.0 (Linux; Linux i673 ; en-US) Gecko/20100101 Firefox/49.7`
**firefox** `Mozilla/5.0 (Linux i641 x86_64; en-US) Gecko/20130401 Firefox/46.1`
**firefox** `Mozilla/5.0 (Windows; U; Windows NT 6.1;) Gecko/20100101 Firefox/48.1`
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; Windows NT 10.0; Trident / 7.0)`
**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 7_2_2; en-US) Gecko/20100101 Firefox/50.7`
**chrome** `Mozilla/5.0 (Macintosh; Intel Mac OS X 8_8_4) AppleWebKit/535.27 (KHTML, like Gecko) Chrome/51.0.3322.104 Safari/601`
**android** `Mozilla/5.0 (Linux; Android 6.0; HTC One_M8 Build/MRA58K) AppleWebKit/603.43 (KHTML, like Gecko)  Chrome/52.0.3347.109 Mobile Safari/536.5`
**firefox** `Mozilla/5.0 (Windows NT 6.3; x64; en-US) Gecko/20100101 Firefox/45.8`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_9_6; like Mac OS X) AppleWebKit/600.34 (KHTML, like Gecko)  Chrome/54.0.2364.218 Mobile Safari/603.6`
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 10.0; Trident / 4.0)`
**chrome** `Mozilla/5.0 (Windows; Windows NT 10.0; Win64; x64; en-US) AppleWebKit/602.19 (KHTML, like Gecko) Chrome/47.0.1952.110 Safari/534`
**chrome** `Mozilla/5.0 (Windows NT 6.3;; en-US) AppleWebKit/535.42 (KHTML, like Gecko) Chrome/55.0.1623.193 Safari/601`
**chrome** `Mozilla/5.0 (Windows; Windows NT 6.3; Win64; x64) AppleWebKit/536.50 (KHTML, like Gecko) Chrome/52.0.2257.353 Safari/600`
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 6.1; Trident / 4.0)`
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows NT 10.0;; en-US Trident / 7.0)`
**firefox** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 8_9_0; en-US) Gecko/20130401 Firefox/47.2`
**android** `Mozilla/5.0 (Linux; Android 4.4.4; LG-E987 Build/KOT49I) AppleWebKit/533.36 (KHTML, like Gecko)  Chrome/51.0.1483.333 Mobile Safari/535.0`
**android** `Mozilla/5.0 (Linux; Android 5.0.2; SM-G440 Build/LRX22C) AppleWebKit/602.48 (KHTML, like Gecko)  Chrome/50.0.3889.164 Mobile Safari/536.4`
**firefox** `Mozilla/5.0 (Linux; U; Linux x86_64; en-US) Gecko/20100101 Firefox/50.8`
**mobile** `Mozilla/5.0 (iPod; CPU iPod OS 8_2_6; like Mac OS X) AppleWebKit/533.19 (KHTML, like Gecko)  Chrome/50.0.2888.389 Mobile Safari/535.3`
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; Windows NT 10.0; x64 Trident / 6.0)`
**mobile** `Mozilla/5.0 (iPhone; CPU iPhone OS 10_1_0; like Mac OS X) AppleWebKit/533.32 (KHTML, like Gecko)  Chrome/51.0.1926.135 Mobile Safari/534.6`
**firefox** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2; en-US) Gecko/20130401 Firefox/47.6`
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; U; Windows NT 6.3; WOW64 Trident / 7.0)`
**chrome** `Mozilla/5.0 (Windows NT 10.0; WOW64; en-US) AppleWebKit/535.7 (KHTML, like Gecko) Chrome/48.0.3045.269 Safari/602`
**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 7_9_8) Gecko/20130401 Firefox/47.2`
**mobile** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_10_8; like Mac OS X) AppleWebKit/533.41 (KHTML, like Gecko)  Chrome/47.0.2429.161 Mobile Safari/534.5`
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; Windows NT 10.0; Trident / 7.0)`
**chrome** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_1_8) AppleWebKit/533.43 (KHTML, like Gecko) Chrome/51.0.1516.149 Safari/603`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_9_1; like Mac OS X) AppleWebKit/534.39 (KHTML, like Gecko)  Chrome/47.0.1153.303 Mobile Safari/601.6`
**firefox** `Mozilla/5.0 (U; Linux i640 x86_64) Gecko/20100101 Firefox/46.6`
**chrome** `Mozilla/5.0 (U; Linux x86_64) AppleWebKit/603.10 (KHTML, like Gecko) Chrome/49.0.3185.159 Safari/533`
**mobile** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_10_7; like Mac OS X) AppleWebKit/536.16 (KHTML, like Gecko)  Chrome/51.0.1036.139 Mobile Safari/534.2`
**firefox** `Mozilla/5.0 (Linux x86_64) Gecko/20100101 Firefox/45.0`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 10_5_1; like Mac OS X) AppleWebKit/534.42 (KHTML, like Gecko)  Chrome/54.0.1241.210 Mobile Safari/602.1`
**chrome** `Mozilla/5.0 (Linux; Linux x86_64) AppleWebKit/534.32 (KHTML, like Gecko) Chrome/52.0.3837.131 Safari/535`
**firefox** `Mozilla/5.0 (Windows NT 6.3;; en-US) Gecko/20100101 Firefox/48.8`
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows NT 10.0; Trident / 4.0)`
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; U; Windows NT 10.0; Win64; x64 Trident / 7.0)`
**mobile** `Mozilla/5.0 (iPod; CPU iPod OS 7_12_8; like Mac OS X) AppleWebKit/601.44 (KHTML, like Gecko)  Chrome/55.0.1519.176 Mobile Safari/534.2`
**chrome** `Mozilla/5.0 (Windows; U; Windows NT 6.2; WOW64; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/49.0.2484.295 Safari/601`
**android** `Mozilla/5.0 (Android; Android 7.0; GT-I9100 Build/KTU84P) AppleWebKit/602.10 (KHTML, like Gecko)  Chrome/49.0.3577.378 Mobile Safari/535.3`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_1_8; like Mac OS X) AppleWebKit/533.16 (KHTML, like Gecko)  Chrome/51.0.1997.364 Mobile Safari/601.5`
**android** `Mozilla/5.0 (Linux; Android 5.0.2; SAMSUNG SM-G410 Build/LRX22C) AppleWebKit/603.35 (KHTML, like Gecko)  Chrome/52.0.3451.335 Mobile Safari/603.7`
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 10.0; Win64; x64; en-US Trident / 4.0)`
**chrome** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 7_3_6) AppleWebKit/602.5 (KHTML, like Gecko) Chrome/55.0.3142.355 Safari/602`
**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; Windows NT 6.0; WOW64; en-US Trident / 5.0)`
**chrome** `Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/600.22 (KHTML, like Gecko) Chrome/54.0.3189.134 Safari/600`
**firefox** `Mozilla/5.0 (Windows; Windows NT 10.0; Win64; x64) Gecko/20100101 Firefox/47.9`
**android** `Mozilla/5.0 (Linux; U; Android 6.0.1; Nexus 7P Build/MMB29K) AppleWebKit/533.7 (KHTML, like Gecko)  Chrome/48.0.2703.254 Mobile Safari/600.2`
**mobile** `Mozilla/5.0 (Android; Android 7.1.1; Pixel XL Build/NME91E) AppleWebKit/601.41 (KHTML, like Gecko)  Chrome/47.0.2859.268 Mobile Safari/536.9`
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; U; Windows NT 10.0; x64 Trident / 7.0)`
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; U; Windows NT 6.2; Win64; x64; en-US Trident / 4.0)`
**chrome** `Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/601.33 (KHTML, like Gecko) Chrome/52.0.2478.275 Safari/602`
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; Windows NT 10.0; WOW64; en-US Trident / 4.0)`
**firefox** `Mozilla/5.0 (Linux; U; Linux x86_64; en-US) Gecko/20100101 Firefox/51.6`
**mobile** `Mozilla/5.0 (Android; Android 5.0.2; Lenovo A7000-a Build/LRX21M;) AppleWebKit/600.35 (KHTML, like Gecko)  Chrome/49.0.1168.251 Mobile Safari/602.0`
**chrome** `Mozilla/5.0 (Linux x86_64; en-US) AppleWebKit/602.6 (KHTML, like Gecko) Chrome/47.0.2485.298 Safari/534`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_12_5; like Mac OS X) AppleWebKit/600.46 (KHTML, like Gecko)  Chrome/52.0.2098.210 Mobile Safari/602.5`
**chrome** `Mozilla/5.0 (Windows; Windows NT 10.0; x64) AppleWebKit/600.20 (KHTML, like Gecko) Chrome/51.0.3432.373 Safari/602`
**firefox** `Mozilla/5.0 (Linux x86_64; en-US) Gecko/20100101 Firefox/49.7`
**mobile** `Mozilla/5.0 (Linux; U; Android 6.0; HTC One M9 Build/MRA58K) AppleWebKit/603.38 (KHTML, like Gecko)  Chrome/47.0.1601.116 Mobile Safari/600.0`
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; Windows NT 6.2; Win64; x64; en-US Trident / 6.0)`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_10_7; like Mac OS X) AppleWebKit/537.3 (KHTML, like Gecko)  Chrome/50.0.3403.116 Mobile Safari/600.2`
**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) Gecko/20100101 Firefox/50.5`
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows NT 10.0; x64 Trident / 6.0)`
**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_5_5; en-US) Gecko/20130401 Firefox/47.8`
**firefox** `Mozilla/5.0 (Windows; U; Windows NT 6.3; x64) Gecko/20100101 Firefox/50.2`
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; U; Windows NT 10.0; x64 Trident / 4.0)`
**chrome** `Mozilla/5.0 (Windows; U; Windows NT 10.0; Win64; x64; en-US) AppleWebKit/600.12 (KHTML, like Gecko) Chrome/48.0.1606.368 Safari/600`
**android** `Mozilla/5.0 (Android; Android 5.1; MOTOROLA MOTO G Build/LXB22) AppleWebKit/536.17 (KHTML, like Gecko)  Chrome/53.0.2960.226 Mobile Safari/537.3`
**mobile** `Mozilla/5.0 (Android; Android 7.0; Nexus 6P Build/NME91E) AppleWebKit/602.13 (KHTML, like Gecko)  Chrome/48.0.3979.190 Mobile Safari/601.1`
**android** `Mozilla/5.0 (Android; Android 5.0.2; SM-N910G Build/LRX22C) AppleWebKit/601.45 (KHTML, like Gecko)  Chrome/50.0.1024.383 Mobile Safari/600.1`
**firefox** `Mozilla/5.0 (U; Linux x86_64; en-US) Gecko/20100101 Firefox/51.4`
**firefox** `Mozilla/5.0 (Linux; U; Linux x86_64; en-US) Gecko/20100101 Firefox/48.0`
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows NT 10.0;; en-US Trident / 7.0)`
**firefox** `Mozilla/5.0 (U; Linux i664 ; en-US) Gecko/20100101 Firefox/50.1`
