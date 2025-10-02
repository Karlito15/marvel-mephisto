<?php

namespace App\Twig\Components;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

#[AsTwigComponent(
    name: 'Card',
    template: '@App/components/card.html.twig',
)]
final class Card
{
    public array $data = [];

    public int $column = 1;

    #[PreMount]
    public function preMount(array $data): array
    {
        // validate data
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);
        $resolver->setDefaults(['data' => []]);
        $resolver->setRequired('data');
        $resolver->setAllowedTypes('data', 'array');
        $resolver->setRequired('column');
        $resolver->setAllowedTypes('column', 'int');
        $resolver->setAllowedValues('column', [1, 2, 3]);

        return $resolver->resolve($data) + $data;
    }

    public function getColumn(): int
    {
        return match ($this->column) {
            1 => 12,
            2 => 6,
            3 => 4,
        };
    }
}
