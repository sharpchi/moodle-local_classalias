# Class Aliases

This is intended for development purposes only.

Moodle has started namespacing lots of old classes using the class_alias function.

Trouble is VSCode doesn't recognise these class aliases as they are only parsed at runtime (apparently this isn't a problem in PHPStorm).

To work-around this, this plugin uses "extends" to link the old class name with the new one. It isn't intended for the code to see these extends, so they are simply listed in a file that is not read. VScode will read them though.

Eventually, these class_alias mappings will be dropped, so do migrate any instances you find in your code, rather than relying on this mapping.