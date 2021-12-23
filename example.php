<?php
/**
 * EXAMPLE FILE OF CLASS GoogleTrnsltr
 * 
 * BEWARE: Google Translator API is a PAYMENT Service of Google
 * 
 * Source code donated by bio-farma.es
 * 
 * @author Rafael Martin Soto
 * @author {@link https://www.inatica.com/ Inatica}
 * @link https://bio-farma.es/
 * @link https://rafamartin10.blogspot.com/
 * @since December 2021
 * @version 1.0.0
 * @license GNU General Public License v3.0
 */
   

 include __DIR__ . '/GoogleTrnsltr.class.php';

 // IMPORTANT!!!! Change next string with you GOOGLE TRANSLATOR KEY
 $GoogleTrnsltr = new GoogleTrnsltr( 'IMPORTANT_CHANGE_HERE-YOUR-GOOGLE-TRANSLATOR-API-KEY' ); // See https://cloud.google.com/translate/docs/setup
 echo $GoogleTrnsltr->tnrltSrcTgt( 'Hello World!', 'en', 'es' ); // Echo { "data": { "translations": [ { "translatedText": "Hola Mundo!" } ] } }
?>