## Ensemble Video Moodle Filter Plugin

### Overview

Along with the [Ensemble Video Moodle Repository Plugin](https://github.com/jmpease/moodle-repository_ensemble), this plugin
makes it easier for Moodle users to add videos and playlists to content without
having to navigate to Ensemble Video and copy/paste complicated embed codes.  This
plugin filters content to render urls added by the repository plugin as Ensemble Video
embed codes.

### Installing from Git

These installation instructions are based off the strategy endorsed by Moodle
for [installing contibuted extensions via Git](http://docs.moodle.org/24/en/Git_for_Administrators#Installing_a_contributed_extension_from_its_Git_repository).

    $ cd /path/to/your/moodle
    $ cd filter
    $ git clone https://github.com/jmpease/moodle-filter_ensemble.git ensemble
    $ cd ensemble
    $ git checkout -b MOODLE_24_STABLE origin/MOODLE_24_STABLE


### Installing from ZIP

    $ wget https://github.com/jmpease/moodle-filter_ensemble/archive/MOODLE_24_STABLE.zip
    $ unzip MOODLE_24_STABLE.zip
    $ mv moodle-filter_ensemble-MOODLE_24_STABLE /path/to/your/moodle/filter/ensemble


**Note:** Regardless of the installation method above, you also need to install the required [repository extension](https://github.com/jmpease/moodle-repository_ensemble).


### Plugin Setup

As a Moodle administrator, navigate to Settings -> Site Administration -> Notifications
and click 'Upgrade Moodle database now' to install the plugin.

Next navigate to Settings -> Site Administration -> Plugins -> Filters -> Manage filters
and change the 'Active?' setting for the Ensemble Video filter from 'Disabled' to 'On'.

#### Configuration Settings

##### Ensemble Urls

Optional.  By default this plugin will use the Ensemble URL configured in the corresponding
[repository plugin](https://github.com/jmpease/moodle-repository_ensemble) so, typically,
nothing needs to be added here.  In order to render embed codes this plugin filters content
that contains this url.  If for some reason, however, the configured Ensemble URL has changed
after content has already been added, you can add entries here to tell the plugin which
additional urls to filter.
