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
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_10_3; like Mac OS X) AppleWebKit/536.7 (KHTML, like Gecko)  Chrome/49.0.3707.331 Mobile Safari/534.7`
**chrome** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 7_8_2; en-US) AppleWebKit/536.29 (KHTML, like Gecko) Chrome/52.0.2126.189 Safari/603`
**mobile** `Mozilla/5.0 (Linux; Android 5.0.1; HTC [M8|M9|M8 Pro Build/LRX22G) AppleWebKit/600.29 (KHTML, like Gecko)  Chrome/53.0.2685.232 Mobile Safari/533.1`
**chrome** `Mozilla/5.0 (U; Linux i565 x86_64) AppleWebKit/603.9 (KHTML, like Gecko) Chrome/50.0.3532.373 Safari/535`
**chrome** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 9_0_8; en-US) AppleWebKit/600.46 (KHTML, like Gecko) Chrome/51.0.2970.178 Safari/602`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_11_5; like Mac OS X) AppleWebKit/603.17 (KHTML, like Gecko)  Chrome/48.0.3010.164 Mobile Safari/602.0`
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows NT 10.0; Win64; x64 Trident / 4.0)`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_6_0; like Mac OS X) AppleWebKit/533.20 (KHTML, like Gecko)  Chrome/55.0.1503.279 Mobile Safari/535.6`
**mobile** `Mozilla/5.0 (iPhone; CPU iPhone OS 10_6_9; like Mac OS X) AppleWebKit/537.14 (KHTML, like Gecko)  Chrome/51.0.2898.104 Mobile Safari/533.5`
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; Windows NT 10.0; Trident / 4.0)`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_4_5; like Mac OS X) AppleWebKit/537.41 (KHTML, like Gecko)  Chrome/48.0.3328.298 Mobile Safari/600.8`
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; U; Windows NT 10.0;; en-US Trident / 6.0)`
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; U; Windows NT 10.0; x64 Trident / 7.0)`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_5_6; like Mac OS X) AppleWebKit/603.33 (KHTML, like Gecko)  Chrome/50.0.3479.377 Mobile Safari/600.2`
**chrome** `Mozilla/5.0 (Windows; U; Windows NT 6.2; Win64; x64) AppleWebKit/535.15 (KHTML, like Gecko) Chrome/54.0.2642.305 Safari/603`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_2_8; like Mac OS X) AppleWebKit/602.8 (KHTML, like Gecko)  Chrome/49.0.3848.258 Mobile Safari/600.5`
**android** `Mozilla/5.0 (Android; Android 4.3.1; SAMSUNG SM-G340V Build/JLS36C) AppleWebKit/600.20 (KHTML, like Gecko)  Chrome/53.0.2319.227 Mobile Safari/602.2`
**mobile** `Mozilla/5.0 (iPad; CPU iPad OS 9_7_1 like Mac OS X) AppleWebKit/602.36 (KHTML, like Gecko)  Chrome/50.0.3834.175 Mobile Safari/533.6`
**chrome** `Mozilla/5.0 (Windows; U; Windows NT 6.2; Win64; x64) AppleWebKit/536.33 (KHTML, like Gecko) Chrome/49.0.3324.165 Safari/534`
**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; Windows NT 10.0;; en-US Trident / 5.0)`
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; U; Windows NT 6.3; Trident / 6.0)`
**mobile** `Mozilla/5.0 (Android; Android 6.0; Nexus 5P Build/MDB08L) AppleWebKit/601.45 (KHTML, like Gecko)  Chrome/52.0.1051.241 Mobile Safari/603.0`
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; Windows NT 6.0; x64 Trident / 6.0)`
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows NT 10.0; x64 Trident / 6.0)`
**chrome** `Mozilla/5.0 (Macintosh; Intel Mac OS X 7_6_1) AppleWebKit/534.13 (KHTML, like Gecko) Chrome/47.0.2058.193 Safari/602`
**android** `Mozilla/5.0 (Linux; U; Android 5.0.1; SM-A700H Build/LMY47X) AppleWebKit/600.21 (KHTML, like Gecko)  Chrome/49.0.2651.194 Mobile Safari/534.0`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_6_5; like Mac OS X) AppleWebKit/537.16 (KHTML, like Gecko)  Chrome/53.0.1334.132 Mobile Safari/603.3`
**chrome** `Mozilla/5.0 (Linux; U; Linux x86_64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/51.0.1510.287 Safari/534`
**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; U; Windows NT 10.0; Win64; x64; en-US Trident / 5.0)`
**chrome** `Mozilla/5.0 (Linux x86_64) AppleWebKit/600.50 (KHTML, like Gecko) Chrome/49.0.1678.234 Safari/533`
**firefox** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_11_3) Gecko/20130401 Firefox/45.8`
**firefox** `Mozilla/5.0 (Linux; U; Linux i544 ) Gecko/20100101 Firefox/46.3`
**mobile** `Mozilla/5.0 (iPad; CPU iPad OS 7_4_2 like Mac OS X) AppleWebKit/536.41 (KHTML, like Gecko)  Chrome/49.0.2078.219 Mobile Safari/602.4`
**mobile** `Mozilla/5.0 (iPod; CPU iPod OS 8_9_5; like Mac OS X) AppleWebKit/602.23 (KHTML, like Gecko)  Chrome/52.0.3538.143 Mobile Safari/600.4`
**chrome** `Mozilla/5.0 (Linux i653 x86_64; en-US) AppleWebKit/536.40 (KHTML, like Gecko) Chrome/50.0.1444.398 Safari/534`
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; U; Windows NT 10.0; x64 Trident / 4.0)`
**firefox** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 7_5_9; en-US) Gecko/20130401 Firefox/51.0`
**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; U; Windows NT 10.0;; en-US Trident / 5.0)`
**chrome** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_0_1) AppleWebKit/533.11 (KHTML, like Gecko) Chrome/54.0.2286.337 Safari/534`
**android** `Mozilla/5.0 (Linux; U; Android 4.4.4; SAMSUNG SM-E500L Build/KTU84P) AppleWebKit/536.29 (KHTML, like Gecko)  Chrome/50.0.3260.279 Mobile Safari/601.0`
**mobile** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_5_4; like Mac OS X) AppleWebKit/537.32 (KHTML, like Gecko)  Chrome/55.0.3728.194 Mobile Safari/536.0`
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows NT 6.0; x64 Trident / 6.0)`
**firefox** `Mozilla/5.0 (Windows; Windows NT 10.0;) Gecko/20130401 Firefox/46.2`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_10_4; like Mac OS X) AppleWebKit/603.45 (KHTML, like Gecko)  Chrome/51.0.3259.302 Mobile Safari/537.4`
**chrome** `Mozilla/5.0 (Windows; Windows NT 10.0;) AppleWebKit/533.6 (KHTML, like Gecko) Chrome/50.0.2495.328 Safari/533`
**mobile** `Mozilla/5.0 (iPad; CPU iPad OS 9_6_4 like Mac OS X) AppleWebKit/534.24 (KHTML, like Gecko)  Chrome/47.0.1702.155 Mobile Safari/602.7`
**android** `Mozilla/5.0 (Linux; U; Android 5.1.1; MOTO XT1575 Build/LXB22) AppleWebKit/537.12 (KHTML, like Gecko)  Chrome/55.0.1824.279 Mobile Safari/601.5`
**android** `Mozilla/5.0 (Linux; Android 5.1.1; SM-G928M Build/LMY47X) AppleWebKit/533.12 (KHTML, like Gecko)  Chrome/50.0.1896.343 Mobile Safari/535.0`
**firefox** `Mozilla/5.0 (Windows; U; Windows NT 10.0; x64; en-US) Gecko/20100101 Firefox/46.9`
**firefox** `Mozilla/5.0 (Linux; Linux x86_64; en-US) Gecko/20100101 Firefox/47.8`
**chrome** `Mozilla/5.0 (Linux; U; Linux i684 ) AppleWebKit/533.33 (KHTML, like Gecko) Chrome/53.0.1266.245 Safari/534`
**android** `Mozilla/5.0 (Linux; U; Android 6.0; Nexus 5X Build/MDB08I) AppleWebKit/536.27 (KHTML, like Gecko)  Chrome/47.0.3391.341 Mobile Safari/602.5`
**android** `Mozilla/5.0 (Android; Android 7.1.1; Pixel C Build/NME91E) AppleWebKit/601.24 (KHTML, like Gecko)  Chrome/48.0.1822.247 Mobile Safari/602.2`
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows; Windows NT 6.3; Win64; x64 Trident / 7.0)`
**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 9_4_4) Gecko/20100101 Firefox/45.2`
**explorer** `Mozilla / 5.0 (compatible; MSIE 10.0; Windows; U; Windows NT 10.0; Trident / 6.0)`
**chrome** `Mozilla/5.0 (U; Linux x86_64) AppleWebKit/533.40 (KHTML, like Gecko) Chrome/52.0.1442.378 Safari/536`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 8_2_7; like Mac OS X) AppleWebKit/601.4 (KHTML, like Gecko)  Chrome/53.0.3129.141 Mobile Safari/535.0`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 9_8_3; like Mac OS X) AppleWebKit/602.33 (KHTML, like Gecko)  Chrome/52.0.3369.387 Mobile Safari/537.5`
**android** `Mozilla/5.0 (Linux; Android 7.0; GT-I9800 Build/KTU84P) AppleWebKit/601.10 (KHTML, like Gecko)  Chrome/52.0.2735.224 Mobile Safari/535.0`
**mobile** `Mozilla/5.0 (Android; Android 7.0; Pixel XL Build/NME91E) AppleWebKit/537.17 (KHTML, like Gecko)  Chrome/52.0.1724.143 Mobile Safari/601.6`
**chrome** `Mozilla/5.0 (Linux; U; Linux x86_64; en-US) AppleWebKit/601.23 (KHTML, like Gecko) Chrome/48.0.3352.108 Safari/537`
**firefox** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 7_4_3) Gecko/20100101 Firefox/48.9`
**firefox** `Mozilla/5.0 (U; Linux i582 ; en-US) Gecko/20130401 Firefox/47.5`
**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 7_7_4; en-US) Gecko/20100101 Firefox/50.8`
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; Windows NT 10.0; WOW64 Trident / 4.0)`
**chrome** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_5_5) AppleWebKit/537.35 (KHTML, like Gecko) Chrome/47.0.1591.304 Safari/602`
**firefox** `Mozilla/5.0 (Windows; Windows NT 6.2;; en-US) Gecko/20100101 Firefox/49.5`
**android** `Mozilla/5.0 (Android; Android 5.0.1; HTC Butterfly S 901s Build/LRX22G) AppleWebKit/536.2 (KHTML, like Gecko)  Chrome/55.0.2807.178 Mobile Safari/601.5`
**chrome** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_4_2; en-US) AppleWebKit/534.48 (KHTML, like Gecko) Chrome/50.0.2894.228 Safari/600`
**chrome** `Mozilla/5.0 (Windows; Windows NT 6.0; Win64; x64) AppleWebKit/601.30 (KHTML, like Gecko) Chrome/47.0.1565.290 Safari/601`
**firefox** `Mozilla/5.0 (Windows NT 10.0; x64) Gecko/20100101 Firefox/49.6`
**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows NT 10.0; x64 Trident / 5.0)`
**chrome** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/600.35 (KHTML, like Gecko) Chrome/51.0.2629.221 Safari/602`
**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 8_1_4) Gecko/20100101 Firefox/45.1`
**android** `Mozilla/5.0 (Linux; Android 7.1; SAMSUNG GT-I9500 Build/KTU84P) AppleWebKit/534.38 (KHTML, like Gecko)  Chrome/47.0.1370.217 Mobile Safari/534.8`
**firefox** `Mozilla/5.0 (Linux; Linux i671 ; en-US) Gecko/20100101 Firefox/50.4`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 10_9_5; like Mac OS X) AppleWebKit/535.7 (KHTML, like Gecko)  Chrome/52.0.3620.314 Mobile Safari/602.8`
**chrome** `Mozilla/5.0 (U; Linux x86_64; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/50.0.2236.296 Safari/600`
**mobile** `Mozilla/5.0 (Android; Android 5.0.2; SM-G400 Build/LRX22C) AppleWebKit/535.15 (KHTML, like Gecko)  Chrome/53.0.2053.375 Mobile Safari/534.9`
**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_1_8) Gecko/20100101 Firefox/46.8`
**explorer** `Mozilla / 5.0 (compatible; MSIE 11.0; Windows NT 10.0; WOW64 Trident / 7.0)`
**explorer** `Mozilla / 5.0 (compatible; MSIE 8.0; Windows; Windows NT 10.0; x64 Trident / 4.0)`
**chrome** `Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; en-US) AppleWebKit/602.45 (KHTML, like Gecko) Chrome/55.0.2360.293 Safari/533`
**android** `Mozilla/5.0 (Linux; U; Android 5.0; LG-D708 Build/LRX22G) AppleWebKit/603.13 (KHTML, like Gecko)  Chrome/55.0.3913.197 Mobile Safari/535.5`
**firefox** `Mozilla/5.0 (Windows; Windows NT 10.0; WOW64; en-US) Gecko/20100101 Firefox/45.4`
**firefox** `Mozilla/5.0 (Windows; U; Windows NT 6.3; x64) Gecko/20100101 Firefox/45.1`
**explorer** `Mozilla / 5.0 (compatible; MSIE 9.0; Windows; U; Windows NT 6.2; x64 Trident / 5.0)`
**firefox** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4; en-US) Gecko/20100101 Firefox/46.3`
**firefox** `Mozilla/5.0 (Linux; Linux x86_64; en-US) Gecko/20100101 Firefox/47.8`
**android** `Mozilla/5.0 (Linux; U; Android 7.1.1; Xperia Build/NDE63X) AppleWebKit/534.8 (KHTML, like Gecko)  Chrome/49.0.3010.307 Mobile Safari/534.4`
**firefox** `Mozilla/5.0 (Linux x86_64; en-US) Gecko/20100101 Firefox/47.2`
**chrome** `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/55.0.2100.291 Safari/603`
**android** `Mozilla/5.0 (Linux; Android 4.4.1; SM-E500L Build/KTU84P) AppleWebKit/600.5 (KHTML, like Gecko)  Chrome/53.0.1215.210 Mobile Safari/600.2`
**chrome** `Mozilla/5.0 (Windows; U; Windows NT 6.0; x64; en-US) AppleWebKit/535.28 (KHTML, like Gecko) Chrome/49.0.3172.251 Safari/536`
**iphone** `Mozilla/5.0 (iPhone; CPU iPhone OS 7_6_5; like Mac OS X) AppleWebKit/533.14 (KHTML, like Gecko)  Chrome/48.0.1676.154 Mobile Safari/602.9`
**mobile** `Mozilla/5.0 (Android; Android 4.3.1; GT-I9300 Build/JDQ39) AppleWebKit/603.36 (KHTML, like Gecko)  Chrome/49.0.2501.296 Mobile Safari/536.1`
**chrome** `Mozilla/5.0 (Windows NT 10.0; Win64; x64; en-US) AppleWebKit/534.48 (KHTML, like Gecko) Chrome/49.0.3550.372 Safari/600`
**explorer** `Mozilla / 5.0 (compatible; MSIE 7.0; Windows; U; Windows NT 6.2; Win64; x64; en-US Trident / 4.0)`
