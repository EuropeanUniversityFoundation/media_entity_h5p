<?php

declare(strict_types=1);

namespace Drupal\media_entity_h5p\Plugin\media\Source;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\media\Attribute\MediaSource;
use Drupal\media\MediaSourceBase;

/**
 * H5P media source.
 */
#[MediaSource(
  id: 'h5p',
  label: new TranslatableMarkup('H5P'),
  description: new TranslatableMarkup('Use an Interactive H5P.'),
  allowed_field_types: ['h5p'],
  default_thumbnail_filename: 'no-thumbnail.png',
)]
class H5P extends MediaSourceBase {

  /**
   * {@inheritdoc}
   */
  public function getMetadataAttributes(): array {
    return [];
  }

}
