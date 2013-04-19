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

$french = array(
  'admin:administer_utilities:feedback' => 'Feedbacks du site',
  'item:object:feedback' => 'Feedback',
  'feedback:label' => 'Feedback',
  'feedback:title' => 'Feedback',

  'feedback:admin:title' => 'Feedbacks du site',
  'feedback:widget:description' => 'Afficher les feedbacks des membres du site.',
  'feedback:numbertodisplay' => 'Nombre de feedbacks à afficher',

  'feedback:message' => "Vous avez une remarque à faire, de nouvelles idées à proposer ou un bug à signaler ? Nous serions ravis d'avoir votre retour.",
  'feedback:message:adminonly' => "<p><strong>Attention, ceci n'est pas un outil de discussion : pour cela utilisez les commentaires !</strong></p>",

  'feedback:default:id' => 'Nom et/ou Email',
  'feedback:default:txt' => 'Dites-nous ce que vous en pensez !',
  'feedback:default:txt:err' => 'Aucun message de feedback.\nNous apprécions vos suggestions et critiques.\nVeuillez saisir votre message et cliquer sur Envoyer.',

  'feedback:captcha:blank' => 'Captcha non renseigné !',

  'feedback:submit_msg' => 'Envoi en cours...',
  'feedback:submit_err' => "Impossible d'envoyer le feedback !",

  'feedback:submit:error' => "Impossible d'envoyer le feedback !",
  'feedback:submit:success' => "Feedback envoyé. Merci !",

  'feedback:delete:success' => 'Feedback supprimé.',

  'feedback:mood:' => 'Aucun',
  'feedback:mood:angry' => ':-(',
  'feedback:mood:neutral' => 'Neutre',
  'feedback:mood:happy' => ':-)',

  'feedback:about:' => 'Aucun',
  'feedback:about:bug_report' => 'Bug',
  'feedback:about:content' => 'Contenu',
  'feedback:about:suggestions' => 'Suggestions',
  'feedback:about:compliment' => 'Compliment',
  'feedback:about:other' => 'Autre',

  'feedback:list:mood' => 'Humeur',
  'feedback:list:about' => 'A propos de',
  'feedback:list:page' => 'URL du feedback',
  'feedback:list:from' => 'De',
  'feedback:list:nofeedback' => 'Aucun feedback à ce jour.',

  'feedback:user_1' => "Identifiant 1 : ",
  'feedback:user_2' => "Identifiant 2 : ",
  'feedback:user_3' => "Identifiant 3 : ",
  'feedback:user_4' => "Identifiant 4 : ",
  'feedback:user_5' => "Identifiant 5 : ",
  'feedback:settings:public' => "Les visiteurs non connectés peuvent-ils publier des feedbacks ? ",
  'feedback:settings:usernames' => "Vous pouvez définir jusqu'à 5 membres qui recevront des notifications à chaque nouveau feedback. Saisissez leurs identifiants ci-dessous : ",

  'feedback:email:subject' => 'Feedback reçu de %s',
  'feedback:email:body' => '%s',
  
  // Added by Facyla - To be translated
  'feedback:close:success' => "Feedback marqué comme fermé.",
  'feedback:close:error' => "Impossible de fermer ce feedback",
  'feedback:settings:memberview' => "Les membres du site peuvent-ils consulter les feedbacks ?",
  'feedback:settings:comment' => "Est-il possible de commenter et de répondre aux feedbacks ?",
  'feedback:settings:feedbackgroup' => "Associer les feedbacks à un ou des groupes ?",
  'feedback:option:grouptool' => "Laisser le choix au responsable de chaque groupe",
  'feedback:enablefeedback' => "Activer le feedback dans ce groupe",
  'feedback:group' => "Feedbacks",
  'feedback:closeconfirm' => "Un feedback fermé est considéré comme traité et le sujet comme clos, confirmer ?",
  'feedback:page:unknown' => "URL inconnue",
  'feedback:list:status:open' => "Ouvert",
  'feedback:list:status:closed' => "Fermé",
  'feedback:status:open' => "Feedbacks ouverts",
  'feedback:status:closed' => "Feedbacks fermés",
  'feedback:about' => "de type",
  'feedback:about:question' => "Question",
  'feedback:access:admin' => "Administrateur seulement",
  'feedback:access:sitemembers' => "Membres du site",
  'feedback:access:group' => "Membres du groupe",
  
  
);

add_translation("fr",$french);

