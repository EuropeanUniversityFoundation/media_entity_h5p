# Media entity H5P

Drupal module providing a Media Source for H5P.

## Installation

Include the repository in your project's `composer.json` file:

    "repositories": [
        ...
        {
            "type": "vcs",
            "url": "https://github.com/EuropeanUniversityFoundation/media_entity_h5p"
        }
    ],

Then you can require the package as usual:

    composer require euf/media_entity_h5p

Finally, install the module:

    drush en media_entity_h5p

## Usage

Go to `/admin/structure/media/add` to add a media type, select *H5P* as the Media source and save.

Then go to `/admin/structure/media/manage/{MEDIA_TYPE}/form-display` and select the *H5P Editor* as the widget for the *H5P* field.

Finally, go to `/media/add/{MEDIA_TYPE}` to add a new *H5P* object via the Editor, where the Upload option is also available.
