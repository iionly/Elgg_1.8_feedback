Feedback plugin for Elgg 1.8
Latest Version: 1.8.3
Released: 2014-08-31
Contact: iionly@gmx.de
License: GNU General Public License version 2
Copyright: (c) iionly (for Elgg 1.8), Simon ST (for Elgg 1.7), Prashant Juvekar


This plugin will display a feedback dialog window on the left hand side of the pages on your Elgg site. Normally, the dialog windows is minimized but can be brought up by a slider button. The feedback button will show up on all pages on your site when a user is logged in. For logged-out site visitors you can configure the feedback button to show or not via a plugin setting.

The feedback sent by users will be listed in the admin section of your site ("Administer" - "Utilities" - "Site feedback") and additionally you can add a feedback widget to the admin dashboard. Also, you have the option to enter up to five users who should receive notifications about new feedback.



Installation:

1. copy the feedback folder into the mod folder of your site.

2. enable the plugin in the admin section of your site.

3. you can enter up to five usernames in the feedback plugin settings of site members who should get notified about new feedback. Also, you can configure if the feedback dialog should be accessible when logged out or not.



Changelog:

1.8.3:

* useability improvement for small screens: if screen width is lower than 1030px the feedback button moves from the fixed left border position to above the footer. Feedback form width gets smaller, too. Feedback form layout has been slightly changed (radio buttons now vertically aligned) to take into account this variable form width.

1.8.2:

* fix for submit, cancel and close buttons of feedback submit form supporting multiple languages (if translations provided in a language file).

1.8.1:

* Fixed sending of feedback when logged out (It seems this got broken by some change in an Elgg core version released since I published 1.8.0beta1. Unfortunately, any feedback created since then by a logged out user resulted in an invalid entity being created in the database - and these feedback entities do not show up in the admin section. Using the Database Validator plugin available at http://community.elgg.org/plugins/438616/1.4/database-validator you can clean up your database from these invalid entities easily though),
* Size of Feedback dialog window reduced and layout re-done,
* Feedback button is now built with vertical text instead of an image, so it can be translated to different languages,
* Works now with walled-garden option enabled or Loginrequired plugin installed,
* Removal of any code that is connected with captchas. This code was commented out anyway. Unfortunately, I haven't got it working as I wanted with utilization of a captcha plugin installed and proper refreshing of the captcha image when necessary (after successful posting of feedback or when the captcha text was entered wrong without manual reloading of the page). If anyone manages to implement a fully-working captcha check (I imagine only for logged-out users) I would be most delighted about a PR at the github repo of the Feedback plugin,
* Code cleanup.

1.8.0beta1:

* Initial release for Elgg 1.8,
* Captcha check (only used when logged out) currently commented out in code as it does not refresh in the way I would like to.
* For logged-out visitors it does not yet work with Elgg's walled-garden option enabled or when the Loginrequired plugin is used.
