<?php
/**
 * NEmail is a Email engine adapter.
 * This component can be used for following template routines:
 *   - send email
 * 
 * @access public
 * @name NEmail
 * @package NEmail
 * @version 1.4
 *
 * Example:
 * NComponentManager::load("NEmail");                // Load email component
 * NEmail::send($emailfrom, $emailto, $subj, $body); // Send email
 */
class NEmail {
   /**
    * Constructor
    * @access public
    * @param mixed $property The component property
    * @global object NEmail
    */
    function NEmail($property = null) {
        global $NEmail;
        if (!$NEmail) $NEmail = $this;
    }

   /**
    * Create NEmail instance
    * @access public
    * @return object NEmail
    */
    function create() {
        return new NEmail();
    }

    /**
     * Load Smarty
     * @access private
     * @global object $PHPMailer
     */
    function _init() {
        global $PHPMailer;
        if (!$PHPMailer) {
            require_once dirname(__FILE__) . "/phpmailer/class.phpmailer.php";
        }

		$PHPMailer = new phpmailer();
        $PHPMailer->PluginDir = dirname(__FILE__) . "/phpmailer/";
        $PHPMailer->SetLanguage("en", dirname(__FILE__) . "/phpmailer/language/");
        $PHPMailer->IsSMTP();
        $PHPMailer->Host = NConfig::get("smtphost", "Email");
        $PHPMailer->Mailer = NConfig::get("mailer", "Email");

        $user = NConfig::get("smtpuser", "Email");
        if ($user) {
            $PHPMailer->SMTPAuth = false;
            $PHPMailer->Username = $user;
            $PHPMailer->Password = NConfig::get("smtppassword", "Email");
        }
    }

    /**
     * Send email to user
     * @access public
     * @param string $emailfrom The sender's email
     * @param string $emailto The receiver's email
     * @param string $subj The sabject of the mail
     * @param string $body The body of the mail
     * @global object $PHPMailer
     */
    function send($emailfrom, $emailto, $subj, $body, $is_html=false, $namefrom='', $nameto='', $with_attachment = false, $filename='', $name='')
    {
        global $PHPMailer;
        NEmail::_init();
        
        $PHPMailer->IsHTML($is_html); 
        $PHPMailer->From = $emailfrom;
        $namefrom = ('' == $namefrom) ? $emailfrom : $namefrom;
        $PHPMailer->FromName = $namefrom;
        $nameto = ('' == $nameto) ? $emailto : $nameto;     
        if ($with_attachment) {
        	$PHPMailer->AddAttachment($filename, $name);
        }     
        $PHPMailer->AddAddress($emailto, $nameto);       
        $PHPMailer->Subject = $subj;
        $PHPMailer->Body = $body;
        $PHPMailer->AltBody = strip_tags($body);
        
        $PHPMailer->SMTPAuth = false;

        $res = @$PHPMailer->Send();
        if (!$res) {
            sleep(1);
            $res = @$PHPMailer->Send();
        }

        return $res;
    }
}
?>
