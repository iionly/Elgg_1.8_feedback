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

?>

#feedbackWrapper {
    position: fixed;
    top: 150px;
    left: 0px;
    width: 450px;
    z-index:1;
}

#feedBackToggler {
    float: left;
}

#feedBackContent {
    width: 400px;
    display: none;
    overflow: hidden;
    float: left;
    color: black;
    background-color: white;
    /* Use default elgg module styles instead
    border: solid #fff 2px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    */
    -webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
    box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}

#feedBackContent h1 {
    padding-top:10px;
    padding-left:10px;
    padding-bottom:10px;
    color: white;
    background-color: #4690D6;
    font-style: italic;
    font-family: Georgia, times, serif;
    text-shadow: 1px 2px 4px #333;
    text-decoration: none;
}

#feedbackError {
    font-style: bold;
    color: black;
    background-color: #ff0000;
}

#feedbackSuccess {
    color: black;
    background-color: #00ff00;
    font-weight: bold;
    padding: 2px 4px;
}

.feedbackLabel {
}

.feedbackText {
    width:350px;
}

.feedbackTextbox {
    width:350px;
    height:75px;
}

.captcha {
    padding:10px;
}
.captcha-left {
    float:none;
}
.captcha-middle {
    float:none;
}
.captcha-right {
    float:none;
}
.captcha-input-text {
    width:100px;
}


#feedBackFormInputs { padding:10px; }

.submitted-feedback { padding:2px; margin-bottom:4px; }

/* Feedbacks mood */
.feedback-mood-angry { border:2px solid #A00; }
.feedback-mood-neutral { border:2px solid #666; }
.feedback-mood-happy { border:2px solid #070; }
.angry { color:#A00; }
.neutral { color:#666; }
.happy { color:#070; }

/* Feedbacks about */
.feedback-about-content { border-left:12px solid #A00; }
.feedback-about-bug_report { border-left:12px solid #930; }
.feedback-about-suggestions { border-left:12px solid #066; }
.feedback-about-compliment { border-left:12px solid #070; }
.feedback-about-question { border-left:12px solid #00F; }
.feedback-about-other { border-left:12px solid #666; }
.content { color:#A00; }
.bug_report { color:#930; }
.suggestions { color:#066; }
.compliment { color:#070; }
.question { color:#00F; }
.other { color:#666; }

/* Feedbacks status */
.feedback-status-open { margin-right:20px; }
.feedback-status-closed { border:1px solid green; border-left:3px solid green; margin-left:20px; opacity:0.6; }

.closed_button { float:right; width: auto; padding: 4px; margin:15px 0 0 10px; -webkit-border-radius: 4px; -moz-border-radius: 4px; background:#FFFFFF; border: 1px solid #999999; font: 12px/100% Arial, Helvetica, sans-serif; font-weight: bold; color: #000000; }


.elgg-module-group-feedback{ margin-top: 10px; }
.elgg-module-group-feedback .elgg-body { margin: 0; padding: 0; }
.elgg-module-group-feedback .elgg-list { border-top:0;}
.elgg-module-group-feedback .elgg-list li { border-bottom: 0; }



