<?php

declare(strict_types=1);

// MailSender-Klasse einbinden
require_once __DIR__ . '/../includes/MailSender.php';

// MailSender functions
require_once __DIR__ . '/../includes/send_email_functions.php';

use App\Service\MailSender;

// E-Mail-Konfiguration
$to = 'info@modified-shop.org';
$subject = '🎉 Grüße aus dem Admin-Bereich!';
$message = createEmailMessage();

// MailSender-Instanz erstellen und E-Mail versenden
$mailSender = new MailSender();

if ($mailSender->send($to, $subject, $message)) {
    displaySuccessMessage($to, $subject, $message);
} else {
    displayErrorMessage();
}
