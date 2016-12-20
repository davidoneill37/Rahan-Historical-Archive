<?php
    //this config file with this name and location will be used automatically by CI
    $config['useragent'] = 'CodeIgniter';
    $config['protocol'] = 'smtp';                                //smtp imap pop     
    //$config['mailpath'] = '/usr/sbin/sendmail';
    $config['smtp_host'] = 'ssl://smtp.gmail.com';               //smtp.gmail.com imap.gmail.com pop.gmail.com DSA localhost
    $config['smtp_user'] = 'rahanhistoricalarchive@gmail.com';
    $config['smtp_pass'] = 'teamrealta';
    $config['smtp_port'] = 465;                                 //smtp ssl:465 tls:587 imap 993 pop 995 DSA 25
    $config['smtp_timeout'] = 5;
    $config['wordwrap'] = TRUE;
    $config['wrapchars'] = 76;
    $config['mailtype'] = 'html';
    $config['charset'] = 'utf-8';
    $config['validate'] = FALSE;
    $config['priority'] = 3;
    $config['crlf'] = "\r\n";
    $config['newline'] = "\r\n";
    $config['bcc_batch_mode'] = FALSE;
    $config['bcc_batch_size'] = 200;
?>