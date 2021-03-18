<?php

namespace App\DataFixtures;

use App\Entity\CategorieSoinMP;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $categorieSoinMP = new CategorieSoinMP();
            $categorieSoinMP->setLibelleCategorieSoinMP('Categorie'.$i);
            $categorieSoinMP->setLienIconeCSMP("categorie-605339359cead.png");
            $manager->persist($categorieSoinMP);}
        $manager->flush();
    }
}
