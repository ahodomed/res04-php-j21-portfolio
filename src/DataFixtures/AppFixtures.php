<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $projet = new Projet();
        $projet->setNom('premier projet');
        $projet->setTechnologie_principale('html-css');
        $projet->setTechnologie_secondaire('php');
        $projet->setDescription('une très bonne technologie');

        $projet->persist($projet);

        $manager->flush();
    }
}
