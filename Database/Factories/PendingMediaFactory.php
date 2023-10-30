<?php

declare(strict_types=1);

namespace Modules\Media\Database\Factories;

use Webmozart\Assert\Assert;
use Modules\Media\Dto\PendingMediaItem;

class PendingMediaFactory
{
    protected array $temporaryUploadAttributes = [];

    public function withTemporaryUploadAttributes(array $temporaryUploadAttributes = []): self
    {
        $this->temporaryUploadAttributes = $temporaryUploadAttributes;

        return $this;
    }

    public function create(array $attributes = []): PendingMediaItem
    {

        $temporaryUpload = (new TemporaryUploadFactory)->create($this->temporaryUploadAttributes);
        Assert::notNull($temporaryUpload->getFirstMedia());
        return new PendingMediaItem(
            $temporaryUpload->getFirstMedia()->uuid,
            $attributes['name'] ?? 'name',
            $attributes['order'] ?? 0,
            $attributes['custom_properties'] ?? [],
            $attributes['custom_headers'] ?? [],
        );
    }
}
