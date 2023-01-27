<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use YC\PlatformBundle\Entity\Categorie;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actor = new Actor();
        $actor->setName('Cristiano Balerino');
        $manager->persist($actor);
        
        $actor2 = new Actor();
        $actor2->setName('Heath Ledgerino');
        $manager->persist($actor2);
        
        $actor3 = new Actor();
        $actor3->setName('Ranino Gosalino');
        $manager->persist($actor3);
        
        $actor4 = new Actor();
        $actor4->setName('Anus darmus');
        $manager->persist($actor4);

        $manager->flush();

        $this->addReference('actor_1', $actor);
        $this->addReference('actor_2', $actor2);
        $this->addReference('actor_3', $actor3);
        $this->addReference('actor_4', $actor4);
    }
}
