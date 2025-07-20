<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Enquires ',
    'email_message' => 'You have a new Enquiriy ',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'Enquries',
    'to' => 'info@fleesglobal.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'E-mail',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'E-mail\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'select' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Choose your region',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Choose your region\' is required.'
    )
    ),
    'date' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Date',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Date\' is required.'
    )
    ),
    'phone' => array(
    'order' => 5,
    'type' => 'tel',
    'label' => 'Phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Phone\' is required.'
    )
    ),
    'message' => array(
    'order' => 6,
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