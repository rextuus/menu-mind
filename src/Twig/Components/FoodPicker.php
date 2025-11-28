<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class FoodPicker
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public array $images = [
        'https://www.360bbq.de/grill-magazin/wp-content/uploads/2024/03/peperoni-pizza-blogbeitrag.jpg',
        'https://www.spicebangla.com/wp-content/uploads/2024/08/Spicy-Pasta-recipe-optimised-scaled.webp',
        'https://images.lecker.de/sushi-selber-machen-b3jpg/16x9,id=48df8ccb,b=lecker,w=1600,h=,ca=0,20.58,100,95.42,rm=sk.jpeg',
        'https://eat.de/wp-content/uploads/2023/09/pommes-aus-der-heissluftfritteuse-2143.jpg',
        'https://image.essen-und-trinken.de/11920774/t/n1/v9/w960/r1.5/-/432837--48883-.jpg',
        'https://www.moeyskitchen.com/wp-content/uploads/2020/06/spanischer-kartoffel-paprika-eintopf-quadrat-480x270.jpg',
        'https://static.bremer-gewuerzhandel.de/media/0a/65/5d/1727187964/wikinger-topf-12896-01027-00052.webp?ts=1727187964',
    ];

    #[LiveProp(writable: true)]
    public array $loadingImages = [
        'https://res.cloudinary.com/dl4y4cfvs/image/upload/v1764348644/menu-mind/7563fea6-6ebd-4564-a147-7a0def6978d5.png',
        'https://res.cloudinary.com/dl4y4cfvs/image/upload/v1764348656/menu-mind/ec263abc-ebe2-4a13-9a5f-c597046f2e30.png',
        'https://res.cloudinary.com/dl4y4cfvs/image/upload/v1764348662/menu-mind/d2bb91d9-4123-40c1-b873-d09333c1117a.png',
        'https://res.cloudinary.com/dl4y4cfvs/image/upload/v1764348676/menu-mind/94df9abf-4b9a-42f2-bdde-e68c380b7089.png',
        'https://res.cloudinary.com/dl4y4cfvs/image/upload/v1764348684/menu-mind/bb57c1e0-5178-4050-9c19-eded24bdc63b.png',
        'https://res.cloudinary.com/dl4y4cfvs/image/upload/v1764348694/menu-mind/9b699906-cd69-492f-aa02-8487cb2e5b65.png',
    ];

    #[LiveProp(writable: true)]
    public array $finalGifs = [
        'https://media.tenor.com/1v96dcyooBAAAAAM/nikocado-nikocado-avocado.gif',
        'https://i.pinimg.com/originals/64/b1/b9/64b1b9fa737fbf3b7e04be9113fd0fd6.gif',
        'https://images.food52.com/hEFqibPDYJfDPYEXdbZHVtfFlZE=/ddae199f-788c-47f9-9ae5-b1d8d5283b67--tumblr_inline_msv42uLeUF1qz4rgp.gif',
        'https://media1.giphy.com/media/v1.Y2lkPTZjMDliOTUyNnRqaW81eWI4cXV6aDcyaTllZnQwa2p6MDltNWQ5aW9ocngyYmtmYiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/eSQKNSmg07dHq/200w.gif',
        'https://media.tenor.com/uapxLX2NmyoAAAAM/hungry-martin-lawrence.gif',
        'https://media.tenor.com/Xc0IMA2AjPwAAAAM/chinese-eating-reverse.gif',
        'https://media.tenor.com/0LXOcf9Jib0AAAAC/happy-eating.gif',
        'https://media2.giphy.com/media/xT0BKKNqQB7W2sVQyY/giphy.gif',
        'https://img.buzzfeed.com/buzzfeed-static/static/2013-09/enhanced/webdr01/26/12/anigif_enhanced-buzz-20041-1380212683-1.gif',
        'https://giffiles.alphacoders.com/347/3478.gif',
        'https://media.tenor.com/C3CAkkwOHfsAAAAM/chili-dog-chili.gif',
        'https://media.tenor.com/TLXU_Gefw6EAAAAM/dj-racer-flr.gif',
        'https://media.tenor.com/25u5qN5mMhQAAAAM/emma-stone-emma.gif',
        'https://media.tenor.com/8skDEfCnvZ8AAAAM/happy-dance-eat.gif',
        'https://media.tenor.com/E_RyLRKMYmEAAAAM/stuffed-zucchini.gif',
        'https://media.tenor.com/wxLc7duRRh4AAAAM/harry-potter-ron-weasley.gif',
        'https://i.chzbgr.com/full/4609093632/h6DA30A98/midday-snack-carb-loading',
        'https://media.tenor.com/pKC2e4dnZfcAAAAM/eating-panchathanthiram-movie.gif',
        'https://media.tenor.com/uXOHcrRii18AAAAM/that-is-an-incredible-meal-matty-matheson.gif',
        'https://media.tenor.com/gNlVw0EN8ycAAAAM/pizza-pizza-time.gif',
        'https://media.tenor.com/3RXMtOZ5o2wAAAAM/keth-jk.gif',
        'https://giffiles.alphacoders.com/206/206602.gif',
        'https://media1.tenor.com/m/54EOE-XTjcsAAAAC/user.gif',
        'https://media1.tenor.com/m/xvuSFTlFypYAAAAd/roman-reigns.gif',
        'https://media1.tenor.com/m/gHyh_uP4sK0AAAAd/mukbang-food.gif',
        'https://media1.tenor.com/m/p1XFI69XVDsAAAAd/mukbang-food.gif',
        'https://media1.tenor.com/m/zmuXFG1rYWYAAAAd/mukbang-food.gif',
        'https://media1.tenor.com/m/Xpj3MYA15mcAAAAd/mukbang-food.gif',
        'https://media1.tenor.com/m/r86b0Rh3f1UAAAAd/mukbang-food.gif',
    ];

    #[LiveProp(writable: true)]
    public array $positiveAttributes = [
        'smart',
        'pretty',
        'absolutely amazing',
        'insanely intelligent',
        'funny as hell',
        'a genius',
        'beautiful',
        'unstoppable',
        'an angel',
        'a legend',
        'sharp as a razor',
        'cooler than the other side of the pillow',
        'ridiculously talented',
        'a walking brain upgrade',
        'the main character',
        'on fire today',
        'built different',
        'the human version of a 5-star review',
        'someone AI shouldn’t underestimate',
        'a certified masterpiece',
        'dangerously clever',
        'cosmically brilliant',
        'the universe’s favorite plot twist',
        'running on pure excellence',
        'effortlessly iconic',
        'the gold standard',
        'proof that evolution works',
        '99% vibes, 1% chaos (in a good way)',
        'secretly a superhero'
    ];

    #[LiveProp]
    public string $currentImage = 'https://image.essen-und-trinken.de/11920774/t/n1/v9/w960/r1.5/-/432837--48883-.jpg';

    #[LiveProp]
    public bool $locked = false;

    #[LiveAction]
    public function pick(): void
    {
        $this->locked = true;
        $this->currentImage = $this->images[array_rand($this->images)];
    }

}
