# TGIFramework Sample Application

Sample application written in TGIFramework

## To Install ##

Installation instructions for [tgif_vagrant](https://github.com/tychay/tgif_vagrant) includes this as a sample project.

## Filestructure ##

- **class/**: class libraries where the directory structure maps into
              `str_replace('_',DIR_SEP,$class_name).'.php';`
- **conf/**:  configuration for sample website (no need for prod/whatever
              separator like in Tagged.)
- **res/**:   data resources used elsewhere (not used currently)
- **savant/**: where templates are stored
- **www/**:   web root for samples
- **prepend.php**: Loads the framework.

## FAQ ##

### Why no composer.json? ###

Composer would install TGIF into a vendor directory. In order to make OpCache 
more efficient in a live-site deploy, it'd be best to not have each TGIF
application reference their own (otherwise identical) copy of framework code.

