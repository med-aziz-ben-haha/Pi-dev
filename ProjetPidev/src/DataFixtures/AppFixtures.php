<?php

namespace App\DataFixtures;

use App\Entity\TypeReclamation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 6; $i++) {
            $TypeReclamation = new TypeReclamation();
            $TypeReclamation->setTypeReclamation('typereclamation'.$i);

            $manager->persist($TypeReclamation);}
        $manager->flush();
    }
}

