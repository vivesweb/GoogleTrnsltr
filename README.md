# GoogleTrnsltr. PHP Class to translate texts with Google Translator Api

BEWARE: Google Translator API is a PAYMENT Service of Google

## V.1.0.0

Source donated by https://bio-farma.es

 # REQUERIMENTS:
 
    - A minimum (minimum, minimum, minimum requeriments is needed). Tested on:
 		
    - Simple Raspberry pi (B +	512MB	700 MHz ARM11) with Raspbian Lite PHP7.3 (i love this gadgets)  :heart_eyes:
 		
    - VirtualBox Ubuntu Server 20.04.2 LTS (Focal Fossa) with PHP7.4.3 
    
    - Ubuntu 20.04.3 LTS (Focal Fossa). Laptop Acer Extensa 5630 with PHP 7.4.3 (built: Aug 13 2021 05:39:12) ( NTS )
    
    - Red Hat Enterprise Linux Server release 6.10 (Santiago) PHP Version 7.3.25 (Production Server) 512Mb Memory Limit

    - Red Hat Enterprise Linux release 8.5 (Ootpa) PHP Version 8.0.14 (Production Server)

 
 
  # FILES:
 There are 2 basic files:
 
 *GoogleTrnsltr.class.php* -> **Master class**. This file is the main file that you need to include in your code.
 
 *example.php* -> **example file**
 
 
  # INSTALLATION:
 A lot of easy :smiley:. It is written in PURE PHP. Only need to include the files. Tested on basic PHP installation
 
         require_once( 'GoogleTrnsltr.class.php' );
	 
 
 # BASIC USAGE:
 
          $GoogleTrnsltr = new GoogleTrnsltr( 'IMPORTANT_CHANGE_HERE-YOUR-GOOGLE-TRANSLATOR-API-KEY' ); // See https://cloud.google.com/translate/docs/setup
          echo $GoogleTrnsltr->tnrltSrcTgt( 'Hello World!', 'en', 'es' ); // Echo { "data": { "translations": [ { "translatedText": "Hola Mundo!" } ] } }
 
 


# RESUME OF METHODS:

- **CREATE GoogleTrnsltr:**
 
*$GoogleTrnsltr= new GoogleTrnsltr( 'YOUR-API-KEY' );* // See https://cloud.google.com/translate/docs/setup

Example:

         $GoogleTrnsltr= new GoogleTrnsltr( 'ALN23IJDAS89A61Q34UHASHUDFSHUDFASHUDASHUDA8923834671234' ); // Random key. Do not use it. Change with your API KEY



- **GET TRANSLATED TEXT:**
 
 Give a text, language_from and language_to. It returns JSON format with translated text
 
*tnrltSrcTgt( $q, $source, $target, $utf8Format = true );*

Example:

		echo $GoogleTrnsltr->tnrltSrcTgt( 'Hello World!', 'en', 'es' ); // Echo { "data": { "translations": [ { "translatedText": "Hola Mundo!" } ] } }
       

 **Of course. You can use it freely :vulcan_salute::alien:**
 
 By Rafa.
 
 
 @author Rafael Martin Soto
 
 @author {@link http://www.inatica.com/ Inatica}
 
 @blog {@link https://rafamartin10.blogspot.com/ Rafael Martin's Blog}

 @link https://bio-farma.es
 
 @since DECEMBER 2021
 
 @version 1.0.0
 
 @license GNU General Public License v3.0
 
