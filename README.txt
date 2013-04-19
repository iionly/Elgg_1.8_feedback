Feedback plugin for Elgg 1.8
Latest Version: 1.8.0beta1
Released: 2013-04-19
Contact: facyla@gmail.com
URL: http://lereseausocial.fr/
License: GNU General Public License version 2
Copyright: (c) Facyla for 1.8 updated version, (c) iionly (for Elgg 1.8), Simon ST (for Elgg 1.7), Prashant Juvekar


This plugin will display a feedback dialog window on the left hand side of the pages on your Elgg site. Normally, the dialog windows is minimized but can be brought up by a slider button. The feedback button will show up on all pages on your site when a user is logged in. For logged-out site visitors you can configure the feedback button to show or not via a plugin setting.

The feedback sent by users will be listed in the admin section of your site ("Administer" - "Utilities" - "Site feedback") and additionally you can add a feedback widget to the admin dashboard. Also, you have the option to enter up to five users who should receive notifications about new feedback.



Installation:

1. copy the feedback folder into the mod folder of your site.

2. enable the plugin in the admin section of your site.

3. you can enter up to five usernames in the feedback plugin settings of site members who should get notified about new feedback. Also, you can configure if the feedback dialog should be accessible when logged out or not.



Changelog:
1.8.14 : many changes and improvements to let admins use feedbacks as an animation tool
  * french translation
  * setting : allow comments on feedbacks (default false)
  * setting : allow members to view comments (default false)
  * setting : associate feedback to a group / multiple groups (group tool), or none (default)
  * access rights (default private = admin only)
  * added "question" about
  * "about" filtering, 
  * "status" filtering (open/closed), 
  * CSS for rendering and status visual identification
  * icons (@TODO for implementation in CSS or HTML)

1.8.0beta1:
  * Initial release for Elgg 1.8,
  * Captcha check (only used when logged out) currently commented out in code as it does not refresh in the way I would like to.
  * For logged-out visitors it does not yet work with Elgg's walled-garden option enabled or when the Loginrequired plugin is used.

