<?php
 /**
  * 
  * CLASS URL TRANSLATE GOOGLE
  *
  * BEWARE: Google Translator API is a PAYMENT Service of Google
  * 
  * Source code donated by bio-farma.es
  *
  * Send $key, $q, $source & $target to google services and return text translated in JSON string
  * 
  * @author Rafael Martin Soto
  * @author {@link https://www.inatica.com/ Inatica}
  * @link https://bio-farma.es/
  * @link https://rafamartin10.blogspot.com/
  * @since December 2021
  * @version 1.0.0
  * @license GNU General Public License v3.0
  *
  */

 
 /** 
  * 
  * CONSTRUCTOR
  * @param string $key
  */

class GoogleTrnsltr {
    private $key;

    function __construct( $key ) {
        $this->key = $key;
    }


    /**
    * Method for connect to Google Translator Service  
    *
    * @param string $q
    * @param string $source
    * @param string $target
    * @return string $JsonGooTrnsltr
    */
    public function tnrltSrcTgt( $q, $source, $target, $utf8Format = true ) {
        $qPlain = trim( $q );
        $qPlain = $this->clean_html( $qPlain );

        if( empty($qPlain) ){
            return '{ "data": { "translations": [ { "translatedText": "" } ] } }'; // Is empty. Not need to do translation
        } else {
            // Connect to Google Translator Services
            $url =  'https://www.googleapis.com/language/translate/v2';
            $url .= '?key='.$this->key;
            $url .= '&source='.$source;
            $url .= '&target='.$target;
            $url .= '&q='.urlencode($qPlain);
            
            // Create a new cURL resource
            $ch = curl_init($url);
            
            // Setup request to send json via POST if needed in future
            $data = array();
            $payload = json_encode(array("user" => $data));
            
            // Attach encoded JSON string to the POST fields
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            
            // Set the content type to application/json
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            
            // Return response instead of outputting
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            // Execute the POST request
            $JsonGooTrnsltr = curl_exec($ch);
            
            // Close cURL resource
            curl_close($ch);

            if( $utf8Format ){
                $JsonGooTrnsltr = utf8_decode($JsonGooTrnsltr);
            }
            
            return $JsonGooTrnsltr;
        }

    }


    /**
     * Method for clean html code
     * 
     * @param string $HTMLText
     * @return string $PlainText
     */

    private function clean_html( $HTMLText ){
        return preg_replace( "/\n\s+/", "\n", rtrim(html_entity_decode(strip_tags($HTMLText))) );
    }
 }
?>