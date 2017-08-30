<?php
namespace Plenty\Plugin\Mail\Contracts;


/**
 * Plugin Mailer Service
 */
interface MailerContract 
{

	/**
	 * Send an email containing html
	 */
	public function sendHtml(
		string $html, 
		 $recipients, 
		string $subject = "", 
		array $cc = [], 
		array $bcc = []
	);

	/**
	 * Send an email that will get rendered by twig
	 */
	public function sendFromTwig(
		string $twigPath, 
		array $data, 
		 $recipients, 
		string $subject = "", 
		array $cc = [], 
		array $bcc = []
	);

}