<?php

namespace Drupal\media_entity_h5p\Plugin\media\Source;

use Drupal\media\MediaInterface;
use Drupal\media\MediaSourceBase;

/**
* H5P media source.
*
* @MediaSource(
*   id = "h5p",
*   label = @Translation("H5P"),
*   description = @Translation("Use an Interactive H5P."),
*   allowed_field_types = {"h5p"},
*   default_thumbnail_filename = "no-thumbnail.png"
* )
*/
class H5P extends MediaSourceBase {

  /**
   * {@inheritdoc}
   */
  public function getMetadataAttributes() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getMetadata(MediaInterface $media, $attribute_name) {
    return parent::getMetadata($media, $attribute_name);
  }

}
