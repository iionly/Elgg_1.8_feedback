<?php

/**
 * Elgg Feedback plugin
 * Feedback interface for Elgg sites
 *
 * @package Feedback
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Prashant Juvekar
 * @copyright Prashant Juvekar
 * @link http://www.linkedin.com/in/prashantjuvekar
 *
 * for Elgg 1.8 by iionly
 * iionly@gmx.de
 */

$german = array(

'admin:administer_utilities:feedback' => 'Feedback für die Community-Seite',
'item:object:feedback' => 'Feedback',
'feedback:label' => 'Feedback',
'feedback:title' => 'Feedback',

'feedback:admin:title' => 'Feedback für die Community-Seite',
'feedback:widget:description' => 'Zeigt Feedback an, der von Besuchern der Community-Seite gemacht wurde.',
'feedback:numbertodisplay' => 'Anzahl der anzuzeigenden Feedback-Einträge? ',

'feedback:message' => 'Zufrieden? Unzufrieden? Du möchtest neue Features vorschlagen oder einen Bug melden? Wir würden uns freuen, von Dir zu hören.',

'feedback:default:id' => 'Name und/oder Email-Adresse',
'feedback:default:txt' => 'Teile uns mit, was Du denkst!',
'feedback:default:txt:err' => 'Bei Deinem Feedback hat leider die Nachricht gefehlt.\nWir sind auf Deine Vorschläge oder Kritik gespannt.\nBitte gebe Deine Nachricht ein, bevor Du Dein Feedback versendest.',

'feedback:captcha:blank' => 'Das Captcha wurde nicht korrekt eingegeben.',

'feedback:submit_msg' => 'Senden...',
'feedback:submit_err' => 'Beim Versenden des Feedbacks ist ein Problem aufgetreten!',

'feedback:submit:error' => 'Beim Versenden des Feedbacks ist ein Problem aufgetreten!',
'feedback:submit:success' => 'Dein Feedback ist eingegangen. Danke!',

'feedback:delete:success' => 'Der Feedback-Eintrag wurde gelöscht.',

'feedback:mood:' => 'Keine Angabe',
'feedback:mood:angry' => 'Verärgert',
'feedback:mood:neutral' => 'Neutral',
'feedback:mood:happy' => 'Glücklich',

'feedback:about:' => 'Keine Angabe',
'feedback:about:bug_report' => 'Bug-Report',
'feedback:about:content' => 'Seiteninhalt',
'feedback:about:suggestions' => 'Vorschläge',
'feedback:about:compliment' => 'Kompliment',
'feedback:about:other' => 'Anderes',

'feedback:list:mood' => 'Stimmung',
'feedback:list:about' => 'Kategorie',
'feedback:list:page' => 'Versendet von der Seite',
'feedback:list:from' => 'Von',
'feedback:list:nofeedback' => 'Derzeit gibt es kein Feedback, das angezeigt werden könnte.',

'feedback:user_1' => "Benutzername 1: ",
'feedback:user_2' => "Benutzername 2: ",
'feedback:user_3' => "Benutzername 3: ",
'feedback:user_4' => "Benutzername 4: ",
'feedback:user_5' => "Benutzername 5: ",
'feedback:settings:public' => "Sollen nicht angemeldete Besucher der Community-Seite Feedback abgeben können? ",
'feedback:settings:usernames' => "Du kannst bis zu 5 Mitglieder benennen, die benachrichtigt werden sollen, wenn neues Feedback eingereicht wurd. Gebe im folgenden deren Benutzernamen ein: ",

'feedback:email:subject' => 'Feedback von %s',
'feedback:email:body' => '%s',
);

add_translation("de",$german);
