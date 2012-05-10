# Composer installer for Elefant CMS themes

This custom [Composer](http://getcomposer.org/) installer will install themes
into an Elefant CMS site's `layouts/` folder through Composer. It will trigger
when a Composer package uses the `elefant-theme` custom package type.

## Usage

In order for a theme to install using this installer, it needs a `composer.json`
file with the following:

```json
{
	"name": "elefant/theme-$NAME$",
	"type": "elefant-theme",
	"license": "MIT",
	"repositories": [
		{"type": "git", "url": "http://github.com/jbroadway/elefant_installer"}
	],
	"require": {
		"elefant/theme-installer": "*"
	}
}
```

The type element will instruct Composer to use this custom installer.