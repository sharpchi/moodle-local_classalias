# Class Aliases

This is intended for development purposes only. Do not use on Production sites; it's not needed.

Moodle has started namespacing lots of old classes using the class_alias function.

Trouble is VSCode doesn't recognise these class aliases as they are only parsed at runtime (apparently this isn't a problem in PHPStorm), this will mean that VSCode will red-underline these classes.

To work-around this, this plugin uses "extends" to map the old class name with the new one. It isn't intended for the code to see these extends, so they are simply listed in a file that is not read. VScode will pick up on the extends and won't show the red underline anymore.

Eventually, these class_alias mappings will be dropped, so do migrate any instances you find in your code, rather than relying on this mapping.