<?php

/** **********************************************************************************
 * Generates a completely random user agent based upon operating system/version and browser/version.
 *    Supported OS Parameters:       windows, linux, mac, iphone, ipad, ipod and android // TODO: Add Windows Phone
 *    Supported Browser Parameters:  firefox, chrome, explorer (internet explorer)
 */
class userAgent {
   /**
    * Windows Operating System list with dynamic versioning
    */
   public $windows_os = [
     '[Windows; |Windows; U; |]Windows NT 6.:number0-3:;[ Win64; x64| WOW64| x64|]',
     '[Windows; |Windows; U; |]Windows NT 10.0;[ Win64; x64| WOW64| x64|]',
   ];
   /**
    * Linux Operating Systems [limited]
    */
   public $linux_os = [
     '[Linux; |][U; |]Linux x86_64',
     '[Linux; |][U; |]Linux i:number5-6::number4-8::number0-6: [x86_64|]'
   ];
   /**
    * Mac Operating System (OS X) with dynamic versioning
    */
   public $mac_os = [
     'Macintosh; [U; |]Intel Mac OS X :number7-9:_:number0-9:_:number0-9:',
     'Macintosh; [U; |]Intel Mac OS X 10_:number0-12:_:number0-9:'
   ];//<<start_formatting
   public $androidVersions = ['4.3.1', '4.4', '4.4.1', '4.4.4', '5.0', '5.0.1', '5.0.2', '5.1', '5.1.1', '6.0', '6.0.1', '7.0', '7.1','7.1.1'];//<<end_formatting
   public $androidVersion;
   public $androidDevices = [
     '4.3' => [
       'GT-I9:number2-5:00 Build/JDQ39',
       'Nokia 3:number1-3:[10|15] Build/IMM76D',
       '[SAMSUNG |]SM-G3:number1-5:0[R5|I|V|A|T|S] Build/JLS36C',
       'Ascend G3:number0-3:0 Build/JLS36I',
       '[SAMSUNG |]SM-G3:number3-6::number1-8::number0-9:[V|A|T|S|I|R5] Build/JLS36C',
       'HUAWEI G6-L:number10-11: Build/HuaweiG6-L:number10-11:',
       '[SAMSUNG |]SM-[G|N]:number7-9:1:number0-8:[S|A|V|T] Build/[JLS36C|JSS15J]',
       '[SAMSUNG |]SGH-N0:number6-9:5[T|V|A|S] Build/JSS15J',
       'Samsung Galaxy S[4|IV] Mega GT-I:number89-95:00 Build/JDQ39',
       'SAMSUNG SM-T:number24-28:5[s|a|t|v] Build/[JLS36C|JSS15J]',
       'HP :number63-73:5 Notebook PC Build/[JLS36C|JSS15J]',
       'HP Compaq 2:number1-3:10b Build/[JLS36C|JSS15J]',
       'HTC One 801[s|e] Build/[JLS36C|JSS15J]',
       'HTC One max Build/[JLS36C|JSS15J]',
       'HTC Xplorer A:number28-34:0[e|s] Build/GRJ90',
     ],
     '4.4' => [
       'XT10:number5-8:0 Build/SU6-7.3',
       'XT10:number12-52: Build/[KXB20.9|KXC21.5]',
       'Nokia :number30-34:10 Build/IMM76D',
       'E:number:20-23::number0-3::number0-4: Build/24.0.[A|B].1.34',
       '[SAMSUNG |]SM-E500[F|L] Build/KTU84P',
       'LG Optimus G Build/KRT16M',
       'LG-E98:number7-9: Build/KOT49I',
       'Elephone P:number2-6:000 Build/KTU84P',
       'IQ450:number0-4: Quad Build/KOT49H',
       'LG-F:number2-5:00[K|S|L] Build/KOT49[I|H]',
       'LG-V:number3-7::number0-1:0 Build/KOT49I',
       '[SAMSUNG |]SM-J:number1-2::number0-1:0[G|F] Build/KTU84P',
       '[SAMSUNG |]SM-N80:number0-1:0 Build/[KVT49L|JZO54K]',
       '[SAMSUNG |]SM-N900:number5-8: Build/KOT49H',
       '[SAMSUNG-|]SGH-I337[|M] Build/[JSS15J|KOT49H]',
       '[SAMSUNG |]SM-G900[W8|9D|FD|H|V|FG|A|T] Build/KOT49H',
       '[SAMSUNG |]SM-T5:number30-35: Build/[KOT49H|KTU84P]',
       '[Google |]Nexus :number5-7: Build/KOT49H',
       'LG-H2:number0-2:0 Build/KOT49[I|H]',
       'HTC One[_M8|_M9|0P6B|801e|809d|0P8B2|mini 2|S][ dual sim|] Build/[KOT49H|KTU84L]',
       '[SAMSUNG |]GT-I9:number3-5:0:number0-6:[V|I|T|N] Build/KOT49H',
       'Lenovo P7:number7-8::number1-6: Build/[Lenovo|JRO03C]',
       'LG-D95:number1-8: Build/KOT49[I|H]',
       'LG-D:number1-8::number0-8:0 Build/KOT49[I|H]',
       'Nexus5 V:number6-7:.1 Build/KOT49H',
       'Nexus[_|] :number4-10: Build/[KOT49H|KTU84P]',
       'Nexus[_S_| S ][4G |]Build/GRJ22',
       '[HM NOTE|NOTE-III|NOTE2 1LTE[TD|W|T]',
       'ALCATEL ONE[| ]TOUCH 70:number2-4::number0-9:[X|D|E|A] Build/KOT49H',
       'MOTOROLA [MOTOG|MSM8960|RAZR] Build/KVT49L'
     ],
     '5.0' => [
       'Nokia :number10-11:00 [wifi|4G|LTE] Build/GRK39F',
       'HTC 80:number1-2[s|w|e|t] Build/[LRX22G|JSS15J]',
       'Lenovo A7000-a Build/LRX21M;',
       'HTC Butterfly S [901|919][s|d|] Build/LRX22G',
       'HTC [M8|M9|M8 Pro Build/LRX22G',
       'LG-D3:number25-37: Build/LRX22G',
       'LG-D72:number0-9: Build/LRX22G',
       '[SAMSUNG |]SM-G4:number0-9:0 Build/LRX22[G|C]',
       '[|SAMSUNG ]SM-G9[00|25|20][FD|8|F|F-ORANGE|FG|FQ|H|I|L|M|S|T] Build/[LRX21T|KTU84F|KOT49H]',
       '[SAMSUNG |]SM-A:number7-8:00[F|I|T|H|] Build/[LRX22G|LMY47X]',
       '[SAMSUNG-|]SM-N91[0|5][A|V|F|G|FY] Build/LRX22C',
       '[SAMSUNG |]SM-[T|P][350|550|555|355|805|800|710|810|815] Build/LRX22G',
       'LG-D7:number0-2::number0-9: Build/LRX22G',
       '[LG|SM]-[D|G]:number8-9::number0-5::number0-9:[|P|K|T|I|F|T1] Build/[LRX22G|KOT49I|KVT49L|LMY47X]'
     ],
     '5.1' => [
       'Nexus :number5-9: Build/[LMY48B|LRX22C]',
       '[|SAMSUNG ]SM-G9[28|25|20][X|FD|8|F|F-ORANGE|FG|FQ|H|I|L|M|S|T] Build/[LRX22G|LMY47X]',
       '[|SAMSUNG ]SM-G9[35|350][X|FD|8|F|F-ORANGE|FG|FQ|H|I|L|M|S|T] Build/[MMB29M|LMY47X]',
       '[MOTOROLA |][MOTO G|MOTO G XT1068|XT1021|MOTO E XT1021|MOTO XT1580|MOTO X FORCE XT1580|MOTO X PLAY XT1562|MOTO XT1562|MOTO XT1575|MOTO X PURE XT1575|MOTO XT1570 MOTO X STYLE] Build/[LXB22|LMY47Z|LPC23|LPK23|LPD23|LPH223]'
     ],
     '6.0' => [
       '[SAMSUNG |]SM-[G|D][920|925|928|9350][V|F|I|L|M|S|8|I] Build/[MMB29K|MMB29V|MDB08I|MDB08L]',
       'Nexus :number5-7:[P|X|] Build/[MMB29K|MMB29V|MDB08I|MDB08L]',
       'HTC One[_| ][M9|M8|M8 Pro] Build/MRA58K',
       'HTC One[_M8|_M9|0P6B|801e|809d|0P8B2|mini 2|S][ dual sim|] Build/MRA58K'
     ],
     '7.0' => [
       'Pixel [XL|C] Build/[NRD90M|NME91E]',
       'Nexus :number5-9:[X|P|] Build/[NPD90G|NME91E]',
       '[SAMSUNG |]GT-I:number91-98:00 Build/KTU84P',
       'Xperia [V |]Build/NDE63X',
       'LG-H:number90-93:0 Build/NRD90[C|M]'
     ],
     '7.1' => [
       'Pixel [XL|C] Build/[NRD90M|NME91E]',
       'Nexus :number5-9:[X|P|] Build/[NPD90G|NME91E]',
       '[SAMSUNG |]GT-I:number91-98:00 Build/KTU84P',
       'Xperia [V |]Build/NDE63X',
       'LG-H:number90-93:0 Build/NRD90[C|M]'
     ]
   ];
   /**
    * List of mobile UA Formats
    */
   
   public $android_os = [
     'Linux; Android :androidVersion:; :androidDevice:',
     //TODO: Add a $windowsDevices variable that does the same as androidDevice
     //'Windows Phone 10.0; Android :androidVersion:; :windowsDevice:',
     'Linux; U; Android :androidVersion:; :androidDevice:',
     'Android; Android :androidVersion:; :androidDevice:',
     ];
   public $mobile_ios = [
     'iPhone; CPU iPhone OS :number7-10:_:number0-12:_:number0-9:; like Mac OS X;',
     'iPad; CPU iPad OS :number7-10:_:number0-12:_:number0-9: like Mac OS X;',
     'iPod; CPU iPod OS :number7-10:_:number0-12:_:number0-9:; like Mac OS X;',
   ];
   public $os;
   
   public function getOS($os=NULL) {
      if( is_null($os) || in_array($os, ['chrome', 'firefox', 'android', 'iphone', 'ipod','ipad'])) {
         $_os = $this->os ?? array_merge($this->windows_os, $this->linux_os, $this->mac_os);
      } else {
         if(is_array($os)) {
            $_os = [];
            if( in_array('windows', $os) ) $_os += $this->windows_os;
            if( in_array('linux', $os) ) $_os += $this->linux_os;
            if( in_array('mac', $os) ) $_os += $this->mac_os;
            
         } else {
            $_os = [];
            if( $os === 'windows' ) $_os += $this->windows_os;
            if( $os === 'linux' ) $_os += $this->linux_os;
            if( $os === 'mac' ) $_os += $this->mac_os;
         }
      }
      $selected_os = rtrim($_os[random_int(0, count($_os) - 1)], ';');
   
      if( strpos($selected_os, '[') !== FALSE ) {
         $selected_os = self::processSpinSyntax($selected_os);
      }
      if( strpos($selected_os, ':number') !== FALSE ) {
         $selected_os = self::processRandomNumbers($selected_os);
      }
      return $selected_os;
   }
   
   public function getMobileOS($os = NULL) {
      if( is_null($os) ) {
         $_os = $this->os ?? array_merge($this->android_os, $this->mobile_ios);
      } else {
         $_os = [];
         if(is_array($os)) {
            if( in_array('android', $os) ) $_os += $this->android_os;
            if( in_array('iphone', $os) ) $_os[] = $this->mobile_ios[0];
            if( in_array('ipad', $os) ) $_os[] = $this->mobile_ios[1];
            if( in_array('ipod', $os) ) $_os[] = $this->mobile_ios[2];
         } else {
            if( $os === 'android' ) $_os += $this->android_os;
            if( $os === 'iphone' ) $_os[] = $this->mobile_ios[0];
            if( $os === 'ipad' ) $_os[] = $this->mobile_ios[1];
            if( $os === 'ipod' ) $_os[] = $this->mobile_ios[2];
         }
      }
      $selected_os = rtrim($_os[random_int(0, count($_os) - 1)], ';');
      if( strpos($selected_os, ':androidVersion:') !== FALSE ) {
         $selected_os = $this->processAndroidVersion($selected_os);
      }
      if( strpos($selected_os, ':androidDevice:') !== FALSE ) {
         $selected_os = $this->addAndroidDevice($selected_os);
      }
      if( strpos($selected_os, ':number') !== FALSE ) {
         $selected_os = self::processRandomNumbers($selected_os);
      }
      return $selected_os;
   }
   
   public function setOS( $os ) {
      $this->os = $os;
      return $this;
   }
   
   public static function processRandomNumbers( $selected_os ) {
      return preg_replace_callback('/:number(\d+)-(\d+):/i', function( $matches ) { return random_int($matches[1], $matches[2]); }, $selected_os);
   }
   
   public static function processSpinSyntax( $selected_os ) {
      return preg_replace_callback('/\[([\w\-\s|;]*?)\]/i', function( $matches ) {
         $shuffle = explode('|', $matches[1]);
         return $shuffle[array_rand($shuffle)];
      }, $selected_os);
   }
   
   public function processAndroidVersion( $selected_os ) {
      $this->androidVersion = $version = $this->androidVersions[array_rand($this->androidVersions)];
      return preg_replace_callback('/:androidVersion:/i', function( $matches ) use ( $version ) { return $version; }, $selected_os);
   }
   
   public function addAndroidDevice( $selected_os ) {
      $devices = $this->androidDevices[substr($this->androidVersion, 0, 3)];
      $device  = $devices[array_rand($devices)];
      
      $device = self::processSpinSyntax($device);
      return preg_replace_callback('/:androidDevice:/i', function( $matches ) use ( $device ) { return $device; }, $selected_os);
   }
   
   public static function chromeVersion( $version ) {
      return random_int($version['min'], $version['max']) . '.0.' . random_int(1000, 4000) . '.' . random_int(100, 400);
   }
   
   public static function firefoxVersion( $version ) {
      return random_int($version['min'], $version['max']) . '.' . random_int(0, 9);
   }
   
   public static function windows( $version ) {
      return random_int($version['min'], $version['max']) . '.' . random_int(0, 9);
   }
   
   /**
    * Call (new userAgent)->generate('chrome/firefox/mobile') to have a UA returned.
    *    Supported Variables for call: firefox, chrome, mobile, and null is equal to all
    */
   public function generate( $userAgent = NULL ) {
      if( is_null($userAgent) ) $userAgent = array_rand([
        'firefox' => 1,
        'chrome' => 1,
        'explorer' => 1,
        'iphone'=>1,
        'android'=>1,
        'ipad'=>1,
        'ipod'=>1,
        'mobile' => 1
      ]);
      $chrome_version  = [
        'min' => 47,
        'max' => 55
      ];
      $firefox_version = [
        'min' => 45,
        'max' => 51
      ];
      //random version from $var['min'] to $var['max']
      
      $chrome_agent  = 'Mozilla/5.0 (:os) AppleWebKit/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(1, 50) . ' (KHTML, like Gecko) Chrome/:version Safari/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603));
      $firefox_agent = 'Mozilla/5.0 (:os) Gecko/' . (random_int(1, 100) > 30 ? '20100101' : '20130401') . ' Firefox/:version';
      $mobile_agent  = 'Mozilla/5.0 (:os) AppleWebKit/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(1, 50) . ' (KHTML, like Gecko)  Chrome/:version Mobile Safari/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(0, 9);
      // TODO: Make correct trident more elegant
      // IE 7/8 uses Trident 4.0, IE 9 use 5.0, IE 10 use 6.0, IE 11 use 7.0
      $ie_agent      = 'Mozilla / 5.0 (compatible; MSIE ' . ($int = random_int(7, 11)) . '.0; :os Trident / '.($int==7||$int==8 ? '4' : ($int==9 ? '5':($int==10?'6':'7'))).'.0)';
      $os            = $this->getOS();
      
      if( random_int(1, 100) > 50 ) $os .= '; en-US';
      if( $userAgent == 'chrome' ) {
         return strtr($chrome_agent, [
           ':os' => $this->getOS($userAgent),
           ':version' => self::chromeVersion($chrome_version)
         ]);
      } elseif( $userAgent == 'firefox' ) {
         return strtr($firefox_agent, [
           ':os' => $this->getOS($userAgent),
           ':version' => self::firefoxVersion($firefox_version)
         ]);
      } elseif( $userAgent == 'explorer' ) {
         return strtr($ie_agent, [
           ':os' => $this->getOS('windows'),
           ':version' => self::firefoxVersion($firefox_version)
         ]);
      } elseif( $userAgent == 'mobile' ) {
         return strtr($mobile_agent, [
           ':os' => $this->getMobileOS(),
           ':version' => self::chromeVersion($chrome_version)
         ]);
      } elseif( $userAgent == 'android' ) {
         return strtr($mobile_agent, [
           ':os' => $this->getMobileOS($userAgent),
           ':version' => self::chromeVersion($chrome_version)
         ]);
      } elseif( $userAgent == 'iphone'||$userAgent== 'ipad' || $userAgent=='ipod' ) {
         return strtr($mobile_agent, [
           ':os' => $this->getMobileOS($userAgent),
           ':version' => self::chromeVersion($chrome_version)
         ]);
      } else {
         new Exception('Unable to determine user agent to generate');
      }
   }
}
