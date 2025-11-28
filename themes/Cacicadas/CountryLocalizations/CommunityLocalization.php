<?php

namespace Cacicadas\CountryLocalizations;

use CountryLocalizations\BrasilLocalization;
use CountryLocalizations\CountryLocalizationDefinition;
use MapasCulturais\Entity;
use MapasCulturais\i;

class CommunityLocalization extends CountryLocalizationDefinition
{
    public function register()
    {
    }

    public function getCountryCode(): ?string
    {
        return 'COMMUNITY';
    }

    public function getCountryName(): ?string
    {
        return i::__('Comunidade');
    }

    public function getActiveLevels(): ?array
    {
        return [2, 4, 5, 6];
    }

    public function getPostalCode(Entity $entity): ?string
    {
        return $entity->address_postalCode;
    }

    public function getLevel0(Entity $entity): ?string
    {
        return $entity->address_level0 ?: 'COMMUNITY';
    }

    public function getLevel1(Entity $entity): ?string
    {
        return null;
    }

    public function getLevel2(Entity $entity): ?string
    {
        return $entity->address_level2;
    }

    public function getLevel3(Entity $entity): ?string
    {
        return null;
    }

    public function getLevel4(Entity $entity): ?string
    {
        return $entity->address_level4;
    }

    public function getLevel5(Entity $entity): ?string
    {
        return $entity->address_level5;
    }

    public function getLevel6(Entity $entity): ?string
    {
        return $entity->address_level6;
    }

    public function getLine1(Entity $entity): ?string
    {
        return $entity->address_line1;
    }

    public function getLine2(Entity $entity): ?string
    {
        return $entity->address_line2;
    }

    public function getFullAddress(Entity $entity): ?string
    {
        $parts = [];

        if ($entity->address_level5) {
            $parts[] = $entity->address_level5;
        }

        if ($entity->address_level6) {
            $parts[] = $entity->address_level6;
        }

        if ($entity->address_level4 && $entity->address_level2) {
            $parts[] = "{$entity->address_level4}/{$entity->address_level2}";
        } elseif ($entity->address_level4) {
            $parts[] = $entity->address_level4;
        } elseif ($entity->address_level2) {
            $parts[] = $entity->address_level2;
        }

        if ($entity->address_line1) {
            $parts[] = $entity->address_line1;
        }

        return $parts ? implode(' - ', $parts) : null;
    }

    public function getLevelHierarchy(): array
    {
        $reflection = new \ReflectionClass(BrasilLocalization::class);
        $file = dirname($reflection->getFileName()) . '/levels-hierarchies/br.php';

        if (file_exists($file)) {
            return include $file;
        }

        return [];
    }

    public function setPostalCode(Entity $entity, ?string $value): void
    {
        $entity->address_postalCode = $value;
    }

    public function setLevel0(Entity $entity, ?string $value): void
    {
        $entity->address_level0 = $value;
    }

    public function setLevel1(Entity $entity, ?string $value): void
    {
    }

    public function setLevel2(Entity $entity, ?string $value): void
    {
        $entity->address_level2 = $value;
    }

    public function setLevel3(Entity $entity, ?string $value): void
    {
    }

    public function setLevel4(Entity $entity, ?string $value): void
    {
        $entity->address_level4 = $value;
    }

    public function setLevel5(Entity $entity, ?string $value): void
    {
        $entity->address_level5 = $value;
    }

    public function setLevel6(Entity $entity, ?string $value): void
    {
        $entity->address_level6 = $value;
    }

    public function setLine1(Entity $entity, ?string $value): void
    {
        $entity->address_line1 = $value;
    }

    public function setLine2(Entity $entity, ?string $value): void
    {
        $entity->address_line2 = $value;
    }

    public function setFullAddress(Entity $entity, ?string $value): void
    {
        $entity->address = $value;
    }
}

