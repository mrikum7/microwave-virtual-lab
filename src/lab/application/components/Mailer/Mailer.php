<?
/**
 * $Id: Mailer.php,v 1.1 2005/10/24 12:38:16 scratch Exp $
 * Class for mailing
 * @access public
 * @name Mailer
 * @package auction
 * @version 1.0
 */

class Mailer
{
   /**
    * function returns completed mailings list
    * @access public
    * @return void
    */
    function GetMailingsList()
    {
        $query = 'SELECT * FROM mailings ORDER BY creation_date DESC';
        return NDatabase::getAllAssoc($query);
    }
    
   /**
    * function deletes mailing if mailing is not 'in_process' type
    * @access public
    * @return void
    */
    function DeleteMailing($mailingId)
    {
        $query = 'SELECT status FROM mailings WHERE mailing_id=?';
        $status = NDatabase::getOne($query, array($mailingId));
        if ('in_process' != $status)
        {
            $query = 'DELETE FROM mailings WHERE mailing_id=?';
            NDatabase::query($query, array($mailingId));
        }
    }
    
   /**
    * function creates new mailing
    * param string $subject
    * param string $type - ('text' or 'html')
    * param string $recipients - ('all', 'clients', 'advertisers')
    * param string $body
    * @access public
    * @return void
    */
    function CreateMailing($subject, $type, $recipients, $body)
    {
        $query = 'INSERT INTO mailings SET subject=?, type=?, creation_date=NOW(),
                                           body=?, status=?, recipients=?';
        NDatabase::query($query, array($subject, $type, $body, 'new', $recipients));
        
        $uid = NDatabase::getOne("SELECT LAST_INSERT_ID()");
        return $uid;
    }
    

   /**
    * function updates mailing wich already exists
    * param int $mailingId
    * param string $subject
    * param string $type - ('text' or 'html')
    * param string $recipients - ('all', 'clients', 'advertisers')
    * param string $body
    * @access public
    * @return void
    */
    function UpdateMailing($mailingId, $subject, $type, $recipients, $body='')
    {
        if ('' == $body)
        {
            $query = 'UPDATE mailings 
                      SET subject=?, type=?, recipients=?
                      WHERE mailing_id=?';
            NDatabase::query($query, array($subject, $type, $recipients, $mailingId));
        }
        else
        {
            $query = 'UPDATE mailings 
                      SET subject=?, type=?, recipients=?, body=?
                      WHERE mailing_id=?';
            NDatabase::query($query, array($subject, $type, $recipients, $body, $mailingId));
        }
    }
   /**
    * function returns mailing data
    * param int $mailingId
    * @access public
    * @return array
    */
    function GetInfo($mailingId)
    {
        $query = 'SELECT * FROM mailings WHERE mailing_id=?';
        return NDatabase::getARow($query, array($mailingId));
    }
    
   /**
    * function create temp records in the table 'tmp_mailings' and set mailing status='in_process'
    * param in $mailingId
    * @access public
    * @return void
    */
    function RunMailing($mailingId)
    {
/*        $query = 'SELECT recipients FROM mailings WHERE mailing_id=?';
        $mailing_recepients = NDatabase::getOne($query, array($mailingId));
        $query = '';
        */

        $query = 'SELECT login 
                  FROM users
                  WHERE subscribed = 1 AND is_locked = \'N\' AND is_deleted = \'N\'';

        if (strlen($query))
        {
            $records = NDatabase::getAllAssoc($query);
            if (count($records))
            {
                foreach ($records as $r)
                {
                    $query = 'INSERT INTO tmp_mailings SET mailing_id=?, email=?';
                    NDatabase::query($query, array($mailingId, $r['login']));
                }
                $query = 'UPDATE mailings SET status=\'in_process\' WHERE mailing_id=?';
                NDatabase::query($query, array($mailingId));
            }
        }
    }
    
    
   /**
    * function returns quantity of mailings which have status 'in_process'
    * @access public
    * @return array - array of mailings ids, which have status 'in_process'
    */
    function GetInProcessMailings()
    {
        $query = 'SELECT mailing_id FROM mailings WHERE status=\'in_process\'';
        return NDatabase::getAllAssoc($query);
    }
    
   /**
    * function returns quantity of mailing messages of mailing with mailing_id=$mailingId
    * int $mailingId
    * @access public
    * @return int number of messages of mailing with mailing_id=$mailingId
    */
    function GetMailingMessages($mailing_id)
    {
        $query = 'SELECT COUNT(*) FROM tmp_mailings WHERE mailing_id=?';
        return NDatabase::getOne($query, array($mailing_id));
    }
    
   /**
    * function returns quantity of mailing messages of mailing with mailing_id=$mailingId
    * int $mailingId
    * string $status - mailing status
    * @access public
    * @return void
    */
    function UpdateStatus($mailingId, $status)
    {
        if ('sent' == $status) $_status = 'sent';
        $query = 'UPDATE mailings SET status=? WHERE mailing_id=?';
        NDatabase::query($query, array($_status, $mailingId));
    }
    
   /**
    * function returns quantity of mailing messages of mailing with mailing_id=$mailingId
    * int $mailingId
    * int $portion - quantity of mails, which are send
    * @access public
    * @return void
    */
    function Send($mailingId, $portion=0)
    {
        $mailing_data = Mailer::GetInfo($mailingId);
        $query = 'SELECT email FROM tmp_mailings WHERE mailing_id=? LIMIT 0,'.$portion;
        $mails_list = NDatabase::getAllAssoc($query, array($mailingId));
        if (count($mails_list))
        {
            $from = General::GetValue('admin_email');
            $from_name = General::GetValue('admin_name');
            if ('text' == $mailing_data['type'])
            {
                foreach ($mails_list as $data)
                {
                    NEmail::send($from, $data['email'], $mailing_data['subject'], $mailing_data['body'], false, $from_name);
                    $query = 'DELETE FROM tmp_mailings WHERE mailing_id=? AND email=?';
                    NDatabase::query($query, array($mailingId, $data['email']));
                }
            }
            elseif ('html' == $mailing_data['type'])
            {
                foreach ($mails_list as $data)
                {
                    NEmail::send($from, $data['email'], $mailing_data['subject'], $mailing_data['body'], true, $from_name);
                    $query = 'DELETE FROM tmp_mailings WHERE mailing_id=? AND email=?';
                    NDatabase::query($query, array($mailingId, $data['email']));
                }
            }
        }
    }
}
?>