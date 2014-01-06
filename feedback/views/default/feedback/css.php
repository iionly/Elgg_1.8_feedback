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
    top: 136px;
    left: 25px;
    width: 320px;
    z-index:1;
}

#feedBackToggler {
    float: left;
}

#feedBackContent {
    width: 310px;
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

.feedbackButton {
    position: fixed;
    top: 280px;
    left: 0px;
    z-index:1;
    font-size:24px;
    display:inline-block;
    -webkit-border-top-left-radius: 0px;
    -webkit-border-top-right-radius: 0px;
    -moz-border-radius-topleft: 0px;
    -moz-border-radius-topright: 0px;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    -webkit-transform-origin: 0% 0%;
    -moz-transform-origin: 0% 0%;
    -ms-transform-origin: 0% 0%;
    -o-transform-origin: 0% 0%;
    transform-origin: 0% 0%;
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}

.feedbackText {
    width:290px;
}

.feedbackTextbox {
    width:290px;
    height:75px;
}
