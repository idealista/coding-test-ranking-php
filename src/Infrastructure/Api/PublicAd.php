<?php

declare(strict_types=1);

namespace App\Infrastructure\Api;

final class PublicAd
{
    public function __construct(
        private int $id,
        private String $typology,
        private String $description,
        private array $pictureUrls,
        private int $houseSize,
        private ?int $gardenSize = null,
    ) {
    }
}
