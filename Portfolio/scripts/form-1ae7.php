<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Message maragraphism.fr',
    'email_message' => '',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => 'maragraphism@gmail.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'Nom',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nom\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'E-mail',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'E-mail\' is required.'
    )
    ),
    'name-1' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Objet',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Objet\' is required.'
    )
    ),
    'message' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>