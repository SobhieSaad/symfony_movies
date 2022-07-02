<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie= new Movie();
        $movie->setTitle('The Dark Night');
        $movie->setReleaseYear(2008);
        $movie->setDescription('This is the last one');
        $movie->setImagePath('https://static.wikia.nocookie.net/marvel_dc/images/4/4b/Batman_Vol_3_86_Textless.jpg/revision/latest?cb=20200502132734');
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);

        $movie2= new Movie();
        $movie2->setTitle('The Dark Night');
        $movie2->setReleaseYear(2008);
        $movie2->setDescription('This is the last one');
        $movie2->setImagePath('https://static.wikia.nocookie.net/marvel_dc/images/4/4b/Batman_Vol_3_86_Textless.jpg/revision/latest?cb=20200502132734');
        $movie2->addActor($this->getReference('actor_3'));
        $manager->persist($movie2);

        $manager->flush(); 

    }
}
