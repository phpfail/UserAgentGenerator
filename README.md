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
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_6_4; like Mac OS X) AppleWebKit/600.38 (KHTML, like Gecko)  Chrome/50.0.1026.156 Mobile Safari/600.2`
***
**mobile** `Mozilla/5.0 (iPod; CPU iPod OS 9_0_3; like Mac OS X) AppleWebKit/536.17 (KHTML, like Gecko)  Chrome/47.0.3380.177 Mobile Safari/535.3`
***
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_3; like Mac OS X) AppleWebKit/602.11 (KHTML, like Gecko)  Chrome/49.0.2492.370 Mobile Safari/603.5`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; U; Windows NT 6.3; Win64; x64; en-US Trident / 7.0)`
***
**chrome** `Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/535.17 (KHTML, like Gecko) Chrome/52.0.1081.243 Safari/533`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; Windows NT 6.2; WOW64; en-US Trident / 4.0)`
***
**firefox** `Mozilla/5.0 (Linux; Linux i656 ) Gecko/20100101 Firefox/49.5`
***
**mobile** `Mozilla/5.0 (Linux; U; Android 5.0.1; HTC Butterfly S 901s Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko)  Chrome/50.0.1275.369 Mobile Safari/603.6`
***
**mobile** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_3_2; like Mac OS X) AppleWebKit/536.3 (KHTML, like Gecko)  Chrome/52.0.3314.176 Mobile Safari/602.8`
***
**mobile** `Mozilla/5.0 (iPad; CPU iPad OS 9_10_9 like Mac OS X) AppleWebKit/603.50 (KHTML, like Gecko)  Chrome/53.0.1136.151 Mobile Safari/536.5`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows NT 10.0; Win64; x64 Trident / 5.0)`
***
**mobile** `Mozilla/5.0 (iPad; CPU iPad OS 10_3_1 like Mac OS X) AppleWebKit/533.3 (KHTML, like Gecko)  Chrome/51.0.1095.134 Mobile Safari/536.4`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; U; Windows NT 6.0; Trident / 7.0)`
***
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 10_12_2; like Mac OS X) AppleWebKit/602.6 (KHTML, like Gecko)  Chrome/49.0.3628.158 Mobile Safari/535.5`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; U; Windows NT 10.0; Win64; x64 Trident / 7.0)`
***
**chrome** `Mozilla/5.0 (Linux; U; Linux i664 ; en-US) AppleWebKit/534.48 (KHTML, like Gecko) Chrome/47.0.2181.177 Safari/601`
***
**mobile** `Mozilla/5.0 (iPod; CPU iPod OS 7_4_0; like Mac OS X) AppleWebKit/602.2 (KHTML, like Gecko)  Chrome/50.0.1489.274 Mobile Safari/603.3`
***
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_5_4; like Mac OS X) AppleWebKit/602.30 (KHTML, like Gecko)  Chrome/47.0.2803.210 Mobile Safari/600.7`
***
**chrome** `Mozilla/5.0 (Linux; U; Linux x86_64; en-US) AppleWebKit/602.12 (KHTML, like Gecko) Chrome/55.0.2499.127 Safari/600`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; U; Windows NT 10.0; Win64; x64; en-US Trident / 5.0)`
***
**firefox** `Mozilla/5.0 (U; Linux x86_64) Gecko/20100101 Firefox/46.7`
***
**chrome** `Mozilla/5.0 (Linux; Linux i660 x86_64) AppleWebKit/601.40 (KHTML, like Gecko) Chrome/53.0.1364.322 Safari/533`
***
**mobile** `Mozilla/5.0 (iPhone; CPU iPhone OS 10_10_9; like Mac OS X) AppleWebKit/603.7 (KHTML, like Gecko)  Chrome/55.0.1673.171 Mobile Safari/533.1`
***
**firefox** `Mozilla/5.0 (U; Linux x86_64) Gecko/20100101 Firefox/45.0`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows NT 10.0; WOW64 Trident / 4.0)`
***
**android** `Mozilla/5.0 (Linux; U; Android 4.4.4; SM-N9005 Build/KOT49H) AppleWebKit/602.22 (KHTML, like Gecko)  Chrome/48.0.3526.290 Mobile Safari/535.2`
***
**mobile** `Mozilla/5.0 (Linux; U; Android 5.0; SM-G430 Build/LRX22C) AppleWebKit/537.13 (KHTML, like Gecko)  Chrome/55.0.2458.314 Mobile Safari/603.9`
***
**chrome** `Mozilla/5.0 (Windows; U; Windows NT 10.0; Win64; x64; en-US) AppleWebKit/603.7 (KHTML, like Gecko) Chrome/53.0.3047.192 Safari/601`
***
**chrome** `Mozilla/5.0 (Windows; U; Windows NT 10.0; Win64; x64) AppleWebKit/533.31 (KHTML, like Gecko) Chrome/52.0.2435.126 Safari/534`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 6.0; WOW64 Trident / 4.0)`
***
**chrome** `Mozilla/5.0 (Windows NT 6.1;) AppleWebKit/535.13 (KHTML, like Gecko) Chrome/50.0.3747.239 Safari/603`
***
**android** `Mozilla/5.0 (Android; Android 5.0; SM-G460 Build/LRX22G) AppleWebKit/600.40 (KHTML, like Gecko)  Chrome/53.0.3349.396 Mobile Safari/603.2`
***
**mobile** `Mozilla/5.0 (Android; Android 6.0.1; HTC One_M8 Pro Build/MRA58K) AppleWebKit/603.38 (KHTML, like Gecko)  Chrome/53.0.3221.154 Mobile Safari/536.8`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows NT 6.0; WOW64 Trident / 4.0)`
***
**firefox** `Mozilla/5.0 (Linux x86_64; en-US) Gecko/20100101 Firefox/45.8`
***
**mobile** `Mozilla/5.0 (Android; Android 6.0.1; HTC One M8 Build/MRA58K) AppleWebKit/535.25 (KHTML, like Gecko)  Chrome/51.0.1818.392 Mobile Safari/603.5`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; Windows NT 10.0; WOW64 Trident / 7.0)`
***
**firefox** `Mozilla/5.0 (Windows; U; Windows NT 6.1;; en-US) Gecko/20100101 Firefox/50.7`
***
**android** `Mozilla/5.0 (Linux; Android 4.4.4; MOTOROLA MOTOG Build/KVT49L) AppleWebKit/600.36 (KHTML, like Gecko)  Chrome/51.0.2120.372 Mobile Safari/537.7`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; U; Windows NT 10.0; x64; en-US Trident / 7.0)`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; U; Windows NT 10.0;; en-US Trident / 4.0)`
***
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_6_7; like Mac OS X) AppleWebKit/603.3 (KHTML, like Gecko)  Chrome/47.0.2913.148 Mobile Safari/533.6`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows NT 6.0;; en-US Trident / 6.0)`
***
**mobile** `Mozilla/5.0 (iPad; CPU iPad OS 7_4_8 like Mac OS X) AppleWebKit/603.44 (KHTML, like Gecko)  Chrome/52.0.3530.267 Mobile Safari/535.4`
***
**chrome** `Mozilla/5.0 (Linux x86_64) AppleWebKit/601.4 (KHTML, like Gecko) Chrome/49.0.3762.344 Safari/603`
***
**mobile** `Mozilla/5.0 (Linux; U; Android 5.1.1; SM-G928F Build/LMY47X) AppleWebKit/536.14 (KHTML, like Gecko)  Chrome/52.0.3033.117 Mobile Safari/533.3`
***
**firefox** `Mozilla/5.0 (U; Linux x86_64; en-US) Gecko/20100101 Firefox/47.7`
***
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_3_9; like Mac OS X) AppleWebKit/534.35 (KHTML, like Gecko)  Chrome/49.0.3241.101 Mobile Safari/603.7`
***
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_2_2; like Mac OS X) AppleWebKit/535.46 (KHTML, like Gecko)  Chrome/47.0.3622.184 Mobile Safari/602.0`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; U; Windows NT 10.0; Trident / 4.0)`
***
**android** `Mozilla/5.0 (Linux; Android 7.1.1; Nexus 8P Build/NPD90G) AppleWebKit/602.31 (KHTML, like Gecko)  Chrome/54.0.1200.312 Mobile Safari/603.7`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 6.2; Trident / 4.0)`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; Windows NT 10.0;; en-US Trident / 6.0)`
***
**android** `Mozilla/5.0 (Linux; Android 7.1; Xperia Build/NDE63X) AppleWebKit/534.27 (KHTML, like Gecko)  Chrome/54.0.2136.348 Mobile Safari/603.0`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; U; Windows NT 6.0; WOW64; en-US Trident / 4.0)`
***
**chrome** `Mozilla/5.0 (Linux; U; Linux x86_64) AppleWebKit/603.27 (KHTML, like Gecko) Chrome/53.0.3874.251 Safari/601`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; Windows NT 10.0; x64 Trident / 5.0)`
***
**android** `Mozilla/5.0 (Linux; U; Android 4.3.1; HTC Xplorer A310s Build/GRJ90) AppleWebKit/533.13 (KHTML, like Gecko)  Chrome/55.0.3271.398 Mobile Safari/601.3`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 6.3; WOW64; en-US Trident / 4.0)`
***
**firefox** `Mozilla/5.0 (Windows; U; Windows NT 10.0; WOW64; en-US) Gecko/20100101 Firefox/51.7`
***
**chrome** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; en-US) AppleWebKit/600.50 (KHTML, like Gecko) Chrome/49.0.2899.386 Safari/601`
***
**firefox** `Mozilla/5.0 (Windows; Windows NT 6.3; Win64; x64) Gecko/20100101 Firefox/48.7`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; U; Windows NT 10.0; Trident / 7.0)`
***
**android** `Mozilla/5.0 (Linux; Android 4.4; SM-T530 Build/KOT49H) AppleWebKit/533.22 (KHTML, like Gecko)  Chrome/50.0.2290.100 Mobile Safari/601.7`
***
**firefox** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 8_7_3; en-US) Gecko/20100101 Firefox/49.0`
***
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 10_6_2; like Mac OS X) AppleWebKit/535.21 (KHTML, like Gecko)  Chrome/52.0.3909.179 Mobile Safari/537.7`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident / 4.0)`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; Windows NT 10.0; x64 Trident / 6.0)`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows NT 10.0;; en-US Trident / 7.0)`
***
**mobile** `Mozilla/5.0 (Linux; U; Android 5.0; SM-G920S Build/LRX21T) AppleWebKit/537.23 (KHTML, like Gecko)  Chrome/55.0.1203.150 Mobile Safari/533.6`
***
**mobile** `Mozilla/5.0 (Linux; U; Android 7.1; GT-I9500 Build/KTU84P) AppleWebKit/536.12 (KHTML, like Gecko)  Chrome/49.0.3525.325 Mobile Safari/537.8`
***
**android** `Mozilla/5.0 (Linux; Android 7.1; Nexus 5X Build/NME91E) AppleWebKit/536.29 (KHTML, like Gecko)  Chrome/52.0.2656.256 Mobile Safari/600.4`
***
**chrome** `Mozilla/5.0 (Windows NT 10.0; WOW64; en-US) AppleWebKit/601.5 (KHTML, like Gecko) Chrome/49.0.1409.145 Safari/602`
***
**firefox** `Mozilla/5.0 (Linux i676 x86_64) Gecko/20100101 Firefox/47.7`
***
**chrome** `Mozilla/5.0 (Linux; U; Linux x86_64) AppleWebKit/535.43 (KHTML, like Gecko) Chrome/52.0.3966.258 Safari/600`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; U; Windows NT 6.3; Win64; x64; en-US Trident / 4.0)`
***
**firefox** `Mozilla/5.0 (Windows NT 10.0; Win64; x64; en-US) Gecko/20130401 Firefox/48.6`
***
**android** `Mozilla/5.0 (Linux; Android 5.1; Nexus 7 Build/LMY48B) AppleWebKit/537.47 (KHTML, like Gecko)  Chrome/52.0.3829.202 Mobile Safari/600.5`
***
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_1_2; like Mac OS X) AppleWebKit/601.1 (KHTML, like Gecko)  Chrome/49.0.3108.114 Mobile Safari/534.8`
***
**firefox** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 7_2_2) Gecko/20100101 Firefox/51.1`
***
**mobile** `Mozilla/5.0 (iPod; CPU iPod OS 10_3_5; like Mac OS X) AppleWebKit/601.24 (KHTML, like Gecko)  Chrome/52.0.3945.299 Mobile Safari/602.8`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows NT 6.0; x64 Trident / 4.0)`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; U; Windows NT 6.0; Trident / 6.0)`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 6.3;; en-US Trident / 4.0)`
***
**mobile** `Mozilla/5.0 (Linux; Android 5.0; SAMSUNG SM-G450 Build/LRX22C) AppleWebKit/601.38 (KHTML, like Gecko)  Chrome/53.0.1176.200 Mobile Safari/602.6`
***
**chrome** `Mozilla/5.0 (U; Linux x86_64; en-US) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/49.0.1842.247 Safari/600`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; Windows NT 10.0; WOW64 Trident / 5.0)`
***
**android** `Mozilla/5.0 (Linux; U; Android 7.0; Nexus 9P Build/NME91E) AppleWebKit/600.21 (KHTML, like Gecko)  Chrome/49.0.2824.363 Mobile Safari/601.5`
***
**android** `Mozilla/5.0 (Linux; Android 5.0.2; LG-D709 Build/LRX22G) AppleWebKit/602.39 (KHTML, like Gecko)  Chrome/51.0.3384.363 Mobile Safari/601.8`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; U; Windows NT 6.3; x64; en-US Trident / 7.0)`
***
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_8_2; like Mac OS X) AppleWebKit/600.8 (KHTML, like Gecko)  Chrome/47.0.1639.275 Mobile Safari/602.4`
***
**chrome** `Mozilla/5.0 (Linux; Linux x86_64; en-US) AppleWebKit/534.41 (KHTML, like Gecko) Chrome/48.0.1451.276 Safari/603`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 6.1; x64 Trident / 4.0)`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; U; Windows NT 6.2; Win64; x64; en-US Trident / 6.0)`
***
**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 8_3_3; en-US) Gecko/20100101 Firefox/50.1`
***
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 6.0; x64 Trident / 4.0)`
***
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 10_1_0; like Mac OS X) AppleWebKit/535.27 (KHTML, like Gecko)  Chrome/50.0.1863.353 Mobile Safari/533.7`
***
**firefox** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_9_3) Gecko/20100101 Firefox/45.0`
***
**android** `Mozilla/5.0 (Linux; U; Android 7.0; SAMSUNG GT-I9100 Build/KTU84P) AppleWebKit/602.36 (KHTML, like Gecko)  Chrome/49.0.3592.108 Mobile Safari/603.4`
***
