================================================================================
OVERVIEW
================================================================================

The cms_interface module provides an interface between PhpGedView and
various content management systems such as Joomla, Drupal and PostNuke.

Only very weak integration is provided.  The purpose of this module
is simply to provide a common interface (under PGV control).  It is
anticipated that future versions of this module will provide tighter
integration.  Collaboration with developers from other projects will
be required.

The file /modules/cms_interface/cms_login.php is a replacement for 
three existing files.

joomla:   /mosgedview.php  (previously part of the Joomla PhpGedView component)
drupal:   /drupal.php      (previously part of the Drupal PhpGedView interface)
postnuke: /postgedview.php (previously part of PhpGedView)

Once you have installed/configured the latest version of the relevant interface,
(see below) you can delete these files.

================================================================================
CONFIGURATION
================================================================================

This interface module currently provides two services.

1) It passes login credentials from the other application to PhpGedView,
allowing a logged-in session to be created within an IFRAME or a javascript
popup window.  No configuration is required to use this service.

2) It *OPTIONALLY* allows new user accounts from the other application to be
created in PhpGedView.  If you want to allow this feature, you need to
edit cms_login.php and specify the settings for new users.
This is necessary, otherwise PhpGedView is unable to verify the authenticity
of the request to create a new user.

Please be certain you understand the security implications of enabling this
feature before doing so.

================================================================================
HELP WANTED!
================================================================================

The PhpGedView developers know nothing about these applications.  The information
provided here is based largely on guesswork.  If you know anything about these
applications and want to improve support/documentation, please contact the
PhpGedView development team.

================================================================================
JOOMLA
================================================================================

To run PhpGedView from within Joomla, you need the "phpGedView component".
The home page for this is:
http://extensions.joomla.org/component/option,com_mtree/task,viewlink/link_id,517/Itemid,35/
Until this component is updated, you need to apply an update to one of the files.
This is found in /modules/cms_interface/joomla. It should be copied over
the existing file in your joomla/components/com_phpgedview/ folder


================================================================================
DRUPAL
================================================================================

To run PhpGedView from within Drupal, you need the "phpGedView extension".
Karen Stevenson no longer maintains the module at http://drupal.org/project/phpgedview/
These files are now in /modules/cms_interface/drupal.

================================================================================
POSTNUKE/PHPNUKE
================================================================================

To run PhpGedView from within PostNuke, you need the files in
/modules/cms_interface/pgv_nuke.  These need to be installed using the
instructions in postged-readme.txt.


