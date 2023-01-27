<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use YC\PlatformBundle\Entity\Categorie;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('This is the description of the Dark Knight');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2017/10/19/17/13/halloween-2868461_960_720.jpg');
        
        // add data to pivot table 
        // pour ajouter info dans la table relationnel
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));

        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Blade Runner');
        $movie2->setReleaseYear(2018);
        $movie2->setDescription('This is the description of the Blade Runner');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2022/09/16/00/39/city-7457513_960_720.jpg');
        
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        
        $manager->persist($movie2);

        $manager->flush();



    }
}
