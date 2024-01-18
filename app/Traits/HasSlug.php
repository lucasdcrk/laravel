<?php

namespace App\Traits;

use Balping\HashSlug\HasHashSlug;

trait HasSlug {
    use HasHashSlug;

    public function getRouteKeyName(): string
    {
        return 'id';
    }

    public function getSlugAttribute() :string
    {
        return $this->slug();
    }
}
