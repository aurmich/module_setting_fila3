<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Collection;

// use Modules\Xot\Services\ArrayService;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class TransCollectionAction
{
    use QueueableAction;

    public string|null $transKey;

    public function execute(
        Collection $collection,
        ?string $transKey,
    ): Collection {
        if ($transKey === null) {
            return $collection;
        }

        $this->transKey = $transKey;

        return $collection->map(fn ($item): string => $this->trans($item));
    }

    public function trans(mixed $item): string
    {
        if (! is_string($item)) {
            dddx($item);

            return '';
        }
        $transKey = $this->transKey;
        $key = $transKey.'.'.$item;
        $trans = trans($key);
        if ($trans !== $key) {
            return $trans;
        }

        Assert::string($item1 = Str::replace('.', '_', $item));
        $key = $transKey.'.'.$item1;
        $trans = trans($key);
        if ($trans !== $key) {
            return $trans;
        }

        return $item;
    }
}
