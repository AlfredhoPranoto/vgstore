<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productData = [
            [
                'name' => "Baldur's Gate III",
                'price' => NULL,
                'description' => "Baldur's Gate 3 is a story-rich, party-based RPG set in the universe of Dungeons & Dragons, where your choices shape a tale of fellowship and betrayal, survival and sacrifice, and the lure of absolute power",
                'sale_price' => 700000,
                'hor_image' => 'baldurs-gate-III-hor-1712567100.jpg',
                'ver_image' => 'baldurs-gate-III-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2023-08-03',
                'category_id' => 1
            ],
            [
                'name' => 'Batman: Arkham City',
                'price' => NULL,
                'description' => "Batman: Arkham City is the sequel to Batman: Arkham Asylum and once again stars the masked superhero Batman as the protagonist. The game takes place a year and a half after the events of the original game. After Joker was stopped from taking over the asylum, the asylum's former warden Quincy Sharp claims the responsibility for having averted disaster and he uses the popularity to become mayor of Gotham City. ",
                'sale_price' => 136000,
                'hor_image' => 'batman-arkham-city-hor-1712567100.jpg',
                'ver_image' => 'batman-arkham-city-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2011-10-18',
                'category_id' => 2
            ],
            [
                'name' => 'Elden Ring',
                'price' => NULL,
                'description' => 'THE NEW FANTASY ACTION RPG. Rise, Tarnished, and be guided by grace to brandish the power of the Elden Ring and become an Elden Lord in the Lands Between.',
                'sale_price' => 600000,
                'hor_image' => 'elden-ring-hor-1712567100.jpg',
                'ver_image' => 'elden-ring-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2022-02-25',
                'category_id' => 1
            ],
            [
                'name' => 'God of War',
                'price' => NULL,
                'description' => "God of War is a soft reboot of Sony's long-running series of action games. While the originals were set within Greek mythology, the  new title takes place after the original games within the world of Norse mythology. Kratos now resides in Midgard along with his son Atreus. After encountering a mysterious stranger covered in tattoos, Kratos and Atreus set out on a long and dangerous journey through the Nine Realms to scatter his dead wife's ashes from atop the highest mountain peak in Midgard.",
                'sale_price' => 730000,
                'hor_image' => 'gow-hor-1712567100.jpg',
                'ver_image' => 'gow-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2022-01-14',
                'category_id' => 2
            ],
            [
                'name' => 'Grand Theft Auto V',
                'price' => NULL,
                'description' => 'Grand Theft Auto V takes place five years after Grand Theft Auto IV and is now set in Los Santos. It centers around three protagonists: Michael, Trevor, and Franklin. New to the series is that the player can switch between the three characters on the fly. They each have different missions, lives, and personalities. They also often come together, especially for heists, a complex type of mission where a large operation needs to be planned and executed by determining a strategy and hiring additional henchmen. ',
                'sale_price' => 300000,
                'hor_image' => 'gta5-hor-1712567100.png',
                'ver_image' => 'gta5-ver-1712567100.png',
                'stock' => 3,
                'release_date' => '2013-09-17',
                'category_id' => 2
            ],
            [
                'name' => 'It Takes Two',
                'price' => NULL,
                'description' => "Embark on the craziest journey of your life in It Takes Two, a genre-bending platform adventure created purely for co-op. Invite a friend to join for free with Friend's Pass* and work together across a huge variety of gleefully disruptive gameplay challenges. Play as the clashing couple Cody and May, two humans turned into dolls by a magic spell. Together, trapped in a fantastical world where the unpredictable hides around every corner, they are reluctantly challenged with saving their fractured relationship.",
                'sale_price' => 480000,
                'hor_image' => 'it-takes-two-hor-1712567100.jpg',
                'ver_image' => 'it-takes-two-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2021-03-26',
                'category_id' => 2
            ],
            [
                'name' => 'Like a Dragon: Infinite Wealth',
                'price' => 790000,
                'description' => 'Two larger-than-life heroes, Ichiban Kasuga and Kazuma Kiryu are brought together by the hand of fate, or perhaps something more sinister… Live it up in Japan and explore all that Hawaii has to offer in an RPG adventure so big it spans the Pacific.',
                'sale_price' => 632000,
                'hor_image' => 'like-a-dragon-infinite-wealth-hor-1712567100.jpg',
                'ver_image' => 'like-a-dragon-infinite-wealth-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2024-01-25',
                'category_id' => 2
            ],
            [
                'name' => 'Persona 3 Reload',
                'price' => 780000,
                'description' => 'Dive into the Dark Hour and awaken the depths of your heart. Persona 3 Reload is a captivating reimagining of the genre-defining RPG, reborn for the modern era with cutting-edge graphics and gameplay.',
                'sale_price' => 624000,
                'hor_image' => 'p3r-hor-1712567100.jpg',
                'ver_image' => 'p3r-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2024-02-02',
                'category_id' => 1
            ],
            [
                'name' => 'Persona 4 Golden',
                'price' => NULL,
                'description' => 'Recently, strange murders began to occur in the quiet Japanese town Inaba. People are found dead under mysterious circumstances, and rumors say that something very wrong is going on with local TV system. A high school student moves into town, living at the house of his uncle, a police detective named Ryotaro Dojima.',
                'sale_price' => 260000,
                'hor_image' => 'p4g-hor-1712567100.jpg',
                'ver_image' => 'p4g-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2012-06-14',
                'category_id' => 1
            ],
            [
                'name' => 'Persona 5 Royal',
                'price' => 800000,
                'description' => 'Wear the mask. Reveal your truth. Prepare for an all-new RPG experience in Persona®5 Royal based in the universe of the award-winning series, Persona! Don the mask of Joker and join the Phantom Thieves of Hearts. Break free from the chains of modern society and stage grand heists to infiltrate the minds of the corrupt and make them change their ways!',
                'sale_price' => 640000,
                'hor_image' => 'p5r-hor-1712567100.jpg',
                'ver_image' => 'p5r-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2019-10-31',
                'category_id' => 1
            ],
            [
                'name' => 'Red Dead Redemption II',
                'price' => 640000,
                'description' => 'After a robbery goes badly wrong in the western town of Blackwater, Arthur Morgan and the Van der Linde gang are forced to flee. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. ',
                'sale_price' => 512000,
                'hor_image' => 'RDR-II-hor-1712567100.jpg',
                'ver_image' => 'RDR-II-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2018-10-26',
                'category_id' => 2
            ],
            [
                'name' => 'Resident Evil 2',
                'price' => NULL,
                'description' => 'The story follows Leon S. Kennedy, a rookie police officer coming to work on his first day at Raccoon precinct. Alternate story follows Claire Redfield, who came to Raccoon city in search of her brother, Chris, who is also a S.T.A.R.S. team member. The game, just like the original, is intended to be played with both characters, where second playthrough with different character will unlock additional locations and complete the story.',
                'sale_price' => 320000,
                'hor_image' => 'RE2-hor-1712567100.jpg',
                'ver_image' => 'RE2-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2019-01-25',
                'category_id' => 2
            ],
            [
                'name' => 'Resident Evil 4',
                'price' => NULL,
                'description' => "Six years have passed since the biological disaster in Raccoon City. Agent Leon S. Kennedy, one of the survivors of the incident, has been sent to rescue the president's kidnapped daughter. He tracks her to a secluded European village, where there is something terribly wrong with the locals. And the curtain rises on this story of daring rescue and grueling horror where life and death, terror and catharsis intersect.",
                'sale_price' => 600000,
                'hor_image' => 'RE4-hor-1712567100.jpg',
                'ver_image' => 'RE4-ver-1712567100.png',
                'stock' => 3,
                'release_date' => '2023-03-24',
                'category_id' => 2
            ],
            [
                'name' => 'Sekiro: Shadows Die Twice',
                'price' => NULL,
                'description' => 'Explore late 1500s Sengoku Japan, a brutal period of constant life and death conflict, as you come face to face with larger than life foes in a dark and twisted world. Unleash an arsenal of deadly prosthetic tools and powerful ninja abilities while you blend stealth, vertical traversal, and visceral head to head combat in a bloody confrontation.',
                'sale_price' => 900000,
                'hor_image' => 'sekiro-hor-1712567100.jpg',
                'ver_image' => 'sekiro-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2019-03-22',
                'category_id' => 2
            ],
            [
                'name' => 'Street Fighter 6',
                'price' => 830000,
                'description' => 'Street Fighter 6 is the first title in the long-running fighting game series to take place after the events of Street Fighter III: 3rd Strike. Peace has largely been restored to Metro City but street fights are still a common occurence among the population to the point of becoming a pastime, and the player can enter the storyline either with a custom character seeking to rise in the ranks of street fighters.',
                'sale_price' => 664000,
                'hor_image' => 'SF6-hor-1712567100.jpg',
                'ver_image' => 'SF6-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2023-06-01',
                'category_id' => 2
            ],
            [
                'name' => 'Stardew Valley',
                'price' => NULL,
                'description' => "The gameplay consists of keeping the plot of land clean from decaying plants, stones, logs and stumps, planting and fostering new vegetation, discovering new places, combating hostile animals and monsters, earning money and collecting materials in order to create new tools and buildings, joining in social activities and events, befriending and romancing non-playable characters, all while managing the protagonist's energy levels.",
                'sale_price' => 120000,
                'hor_image' => 'stardew-valley-hor-1712567100.jpg',
                'ver_image' => 'stardew-valley-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2016-02-26',
                'category_id' => 3
            ],
            [
                'name' => 'A Space for the Unbound',
                'price' => NULL,
                'description' => 'A Space For The Unbound is a slice-of-life adventure game with beautiful pixel art set in the late 90s rural Indonesia that tells a story about overcoming anxiety, depression, and the relationship between a boy and a girl with supernatural powers.',
                'sale_price' => 100000,
                'hor_image' => 'a-space-for-the-unbound-hor-1712567100.jpg',
                'ver_image' => 'a-space-for-the-unbound-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2023-01-18',
                'category_id' => 4
            ],
            [
                'name' => 'Subnautica',
                'price' => NULL,
                'description' => 'Subnautica is an open-world survival game in which a player takes on the role of a terraformer engineer, having escaped the starship Aurora just before it mysteriously crashes onto an alien planet. The planet is mostly covered by water and the player must adapt to this new alien environment, gathering food, building a habitat and discovering the secrets to why the ship crashed.',
                'sale_price' => 350000,
                'hor_image' => 'subnautica-hor-1712567100.jpg',
                'ver_image' => 'subnautica-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2014-12-16',
                'category_id' => 4
            ],
            [
                'name' => 'TEKKEN 8',
                'price' => 700000,
                'description' => 'Very Cool Bracelet that was made in Indonesia',
                'sale_price' => 560000,
                'hor_image' => 't8-hor-1712567100.jpg',
                'ver_image' => 't8-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2024-01-25',
                'category_id' => 2
            ],
            [
                'name' => 'Naruto Shippuden: Ultimate Ninja Storm 4',
                'price' => NULL,
                'description' => "The latest opus in the acclaimed STORM series is taking you on a colourful and breathtaking ride. Take advantage of the totally revamped battle system and prepare to dive into the most epic fights you've ever seen!",
                'sale_price' => 200000,
                'hor_image' => 'nsuns4-hor-1712567100.jpg',
                'ver_image' => 'nsuns4-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2016-02-04',
                'category_id' => 2
            ],
            [
                'name' => 'NieR: Automata',
                'price' => NULL,
                'description' => 'NieR: Automata is an action RPG set several thousand years after the original NieR. Living machines from another world invaded Earth and the remnants of humanity fled to the moon. Since then have been sending android units back to Earth, to fight proxy wars against the machines, until it becomes safe to return. This game follows three units from the YoRHa android series: a battle unit named 2B, a recon unit named 9S, and an older prototype unit named A2.',
                'sale_price' => 580000,
                'hor_image' => 'nier-automata-hor-1712567100.jpg',
                'ver_image' => 'nier-automata-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2017-03-17',
                'category_id' => 1
            ],
            [
                'name' => 'Dead Space',
                'price' => 660000,
                'description' => 'The sci-fi survival-horror classic Dead Space™ returns, completely rebuilt from the ground up to offer a deeper, more immersive experience. This remake brings jaw-dropping visual fidelity, suspenseful atmospheric audio, and improvements to gameplay while staying faithful to the original game’s thrilling vision.',
                'sale_price' => 528000,
                'hor_image' => 'dead-space-hor-1712567100.jpg',
                'ver_image' => 'dead-space-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2023-01-27',
                'category_id' => 2
            ],
            [
                'name' => 'Unpacking',
                'price' => 110000,
                'description' => 'Necklace made of pure ruby material',
                'sale_price' => 88000,
                'hor_image' => 'unpacking-hor-1712567100.jpg',
                'ver_image' => 'unpacking-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2021-11-02',
                'category_id' => 4
            ],
            [
                'name' => 'Forza Horizon 5',
                'price' => 700000,
                'description' => 'Explore the vibrant open world landscapes of Mexico with limitless, fun driving action in the world’s greatest cars. Blast off into Forza Horizon 5: Hot Wheels or Conquer the Sierra Nueva in the ultimate Horizon Rally Adventure experience. Requires Forza Horizon 5 game, expansion sold separately.',
                'sale_price' => 560000,
                'hor_image' => 'forza-horizon-5-hor-1712567100.jpg',
                'ver_image' => 'forza-horizon-5-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2021-11-09',
                'category_id' => 5
            ],
            [
                'name' => 'Monster Hunter Stories',
                'price' => NULL,
                'description' => 'Monster Hunter Stories is an RPG that takes the world of Monster Hunter and expands upon it in new and exciting ways! No longer are you hunting monsters, but raising them! In this deep story featuring heroes known as Monster Riders, you will live alongside monsters and form lifelong bonds with them',
                'sale_price' => 450000,
                'hor_image' => 'monster-hunter-stories-hor-1712567100.jpg',
                'ver_image' => 'monster-hunter-stories-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2024-06-14',
                'category_id' => 1
            ],
            [
                'name' => 'Call of Duty®: Black Ops 6',
                'price' => NULL,
                'description' => 'Call of Duty®: Black Ops 6 is signature Black Ops across a cinematic single-player Campaign, a best-in-class Multiplayer experience and with the epic return of Round-Based Zombies',
                'sale_price' => 1000000,
                'hor_image' => 'cod-bo-6-hor-1712567100.jpg',
                'ver_image' => 'cod-bo-6-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2024-10-25',
                'category_id' => 2
            ],
            [
                'name' => 'Shin Megami Tensei V: Vengeance',
                'price' => NULL,
                'description' => 'Become a mighty demigod and battle through a decimated Tokyo in a war between angels and demons. Make new allies along your journey, engage in intense, turn-based combat, recruit hundreds of demons and forge your own path to dictate the fate of all existence.',
                'sale_price' => 800000,
                'hor_image' => 'shin-megami-hor-1712567100.jpg',
                'ver_image' => 'shin-megami-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2024-06-14',
                'category_id' => 1
            ],
            [
                'name' => 'Black Myth: Wukong',
                'price' => NULL,
                'description' => 'Black Myth: Wukong is an action RPG rooted in Chinese mythology. You shall set out as the Destined One to venture into the challenges and marvels ahead, to uncover the obscured truth beneath the veil of a glorious legend from the past.',
                'sale_price' => 700000,
                'hor_image' => 'wukong-hor-1712567100.jpg',
                'ver_image' => 'wukong-ver-1712567100.jpg',
                'stock' => 3,
                'release_date' => '2024-08-20',
                'category_id' => 2
            ],
        ];

        Product::insert($productData);
    }
}
