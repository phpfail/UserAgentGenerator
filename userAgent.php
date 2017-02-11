class userAgent {
   /**
    * Windows Operating System list with dynamic versioning
    */
   public $windows_os = [ 'Windows; U; Windows NT 6.:number0-3:;', 'Windows NT 6.:number0-3:; Win64; x64', 'Windows; U; Windows NT 6.:number0-3:;', 'Windows; Windows NT 6.:number0-3:; WOW64', 'Windows; Windows NT 6.:number0-3:; WOW64', 'Windows NT 6.:number0-3:; Win64; WOW64', 'Windows; Windows NT 6.:number0-3:', 'Windows NT 6.:number0-3:;', 'Windows; Windows NT 10.0', 'Windows NT 10.0; x64;', 'Windows NT 10.0; Win64; x64;', 'Windows NT 10.0; WOW64', 'Windows; Windows NT 10.0;', 'Windows; Windows NT 10.0; x64' ];
   /**
    * Linux Operating Systems [limited]
    */
   public $linux_os = [ 'Linux x86_64', 'Linux i686', ];
   /**
    * Mac Operating System (OS X) with dynamic versioning
    */
   public $mac_os = [ 'Macintosh; U; Intel Mac OS X 8_:number0-9:_:number0-9:;', 'Macintosh; Intel Mac OS X 8_:number0-12:_:number0-9:', 'Macintosh; U; Intel Mac OS X 9_:number0-9:_:number0-9:;', 'Macintosh; Intel Mac OS X 9_:number0-12:_:number0-9', 'Macintosh; U; Intel Mac OS X 10_:number0-9:_:number0-9;', 'Macintosh; Intel Mac OS X 10_:number0-12:_:number0-9:' ];
   /**
    * List of popular mobile OS, some with model/build numbers, includes: Android, iPhone, Windows Phone
    */
   public $mobile_os = [ 'Linux; Android 5.1.1; SM-G928X Build/LMY47X', 'Windows Phone 10.0; Android 4.2.1; Microsoft; Lumia 950', 'Linux; Android 6.0.1; SM-G920V Build/MMB29K', 'Linux; Android 6.0.1; Nexus 6P Build/MMB29P', 'Linux; Android 6.0.1; E6653 Build/32.2.A.0.253', 'Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K', 'Linux; Android 7.0; Pixel C Build/NRD90M; wv', 'Linux; Android 6.0.1; SGP771 Build/32.2.A.0.253; wv', 'Linux; Android 5.1.1; SHIELD Tablet Build/LMY48C', 'Linux; Android 4.4.3; KFTHWI Build/KTU84M', 'Linux; Android 5.0.2', 'Linux; Android 5.0.2; LG-V410/V41020c Build/LRX22G', 'Linux; Android 4.3;', 'Linux; Android 4.3.1;', 'Linux; Android 4.4;', 'Linux; Android 4.4.4;', 'Android;', 'Linux; Android 5.0;', 'Linux; Android 5.0.2;', 'Linux; Android 5.1;', 'Linux; Android 5.1.1;', 'Linux; Android 6.0;', 'Linux; Android 6.0.1;', 'Linux; Android 2.3.7;', 'Linux; Android 7.1;', 'Linux; Android 7.1.1;', 'iPhone; U; CPU iPhone OS 7_1_2 like Mac OS X;', 'iPhone; U; CPU iPhone OS 9_3_5 like Mac OS X;', 'iPhone; U; CPU iPhone OS 10_1_1 like Mac OS X;', 'iPhone; U; CPU iPhone OS 10_2_1 like Mac OS X;', 'iPad; CPU OS 7_0 like Mac OSX', 'iPad; U; CPU OS 7_1 like Mac OSX', 'iPad; CPU OS 9_3_2 like Mac OSX', 'iPad; CPU OS 10_1 like Mac OSX', 'iPad; CPU OS 10_2 like Mac OSX', 'iPod; U; CPU OS 7_0 like Mac OSX', 'iPod; U; CPU OS 9_3 like Mac OSX', 'iPod; U; CPU OS 10_2_1 like Mac OSX', ];
   public $os;
   
   public function getOS() {
      $_os         = $this->os ?? array_merge($this->windows_os, $this->linux_os, $this->mac_os);
      $selected_os = rtrim($_os[random_int(0, count($_os) - 1)], ';');
      if( strpos($selected_os, ':number') !== FALSE ) {
         return self::processVersion($selected_os);
      } else {
         return $selected_os;
      }
   }
   
   public function setOS( $os ) {
      $this->os = $os;
      return $this;
   }
   
   public static function processVersion( $selected_os ) {
      return preg_replace_callback('/:number(\d{1})-(\d{1,2}):/i', function( $matches ) { return random_int($matches[1], $matches[2]); }, $selected_os);
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
    * Call userAgent::generate([$userAgent = NULL]) to have a UA returned.
    *    Supported Variables for call: firefox, chrome, mobile, and null is equal to all
    */
   public function generate( $userAgent = NULL ) {
      if( is_null($userAgent) ) $userAgent = array_rand([ 'firefox' => 1, 'chrome' => 1, 'mobile' => 1 ]);
      $chrome_version  = [ 'min' => 47, 'max' => 55 ];
      $firefox_version = [ 'min' => 45, 'max' => 51 ];
      //random version from $var['min'] to $var['max']
      
      $chrome_agent  = 'Mozilla/5.0 (:os) AppleWebKit/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(1, 50) . ' (KHTML, like Gecko) Chrome/:version Safari/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603));
      $firefox_agent = 'Mozilla/5.0 (:os) Gecko/' . (random_int(1, 100) > 30 ? '20100101' : '20130401') . ' Firefox/:version';
      $mobile_agent  = 'Mozilla/5.0 (:os) AppleWebKit/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(1, 50) . ' (KHTML, like Gecko)  Chrome/:version Mobile Safari/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(0, 9);
      $ie_agent      = 'Mozilla / 5.0 (compatible; MSIE ' . random_int(7, 11) . '.0; :os Trident / 6.0)';
      $os            = $this->getOS();
      
      if( random_int(1, 100) > 50 ) $os .= '; en-US';
      if( $userAgent == 'chrome' ) {
         return strtr($chrome_agent, [ ':os' => $os, ':version' => self::chromeVersion($chrome_version) ]);
      } elseif( $userAgent == 'firefox' ) {
         return strtr($firefox_agent, [ ':os' => $os, ':version' => self::firefoxVersion($firefox_version) ]);
      } elseif( $userAgent == 'mobile' ) {
         return strtr($mobile_agent, [ ':os' => $this->mobile_os[random_int(0, count($this->mobile_os) - 1)], ':version' => self::chromeVersion($chrome_version) ]);
      } else {
         new Exception('Unable to determine user agent to generate');
      }
   }
}
