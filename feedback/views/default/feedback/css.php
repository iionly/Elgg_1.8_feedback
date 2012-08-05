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
    border: solid #fff 2px;
    color: black;
    background-color: white;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
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
    font-style: bold;
    color: black;
    background-color: #00ff00;
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
