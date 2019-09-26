# jxExtYoutube

**Extension Module for Embedded Youtube and Vimeo Videos**

This module allows to define the settings for all embedded YouTube and Vimeo videos, like

- video size
- video quality
- auto repeat
- reuse of chosen shop language
- subtitles
- no cookies
- etc.

Additionally the module inherits the media files defined for the parent article to all of its variants (like it is done for images by default).

## Screenshot of Settings ##
![show products and customers](/docs/img/settings-de.png)


## Setup ##

OXID eShop 6:

`composer require ecs/jxextyoutube`  


## Release history ##

- **0.1 - Initial release**
	- Settings for embedded YouTube videos
	- Inheritance of media files for variants  

- **0.2 - Vimeo update**
	- Vimeo videos can be embedded now as well
