<?php

namespace App\DataFixtures;

use App\Entity\CategorieSoinMP;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\TypeReclamation;
class AppFixtures extends Fixture
{
    //SOIN MP FIXTURES (emna)
    /*public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $categorieSoinMP = new CategorieSoinMP();
            $categorieSoinMP->setLibelleCategorieSoinMP('Categorie'.$i);
            $categorieSoinMP->setLienIconeCSMP("categorie-605339359cead.png");
            $manager->persist($categorieSoinMP);}
        $manager->flush();
    }*/

    //typeReclamation FIXTURES(EYA)
    public function load(ObjectManager $manager)
    {
     /*   for ($i = 0; $i < 6; $i++) {
            $TypeReclamation = new TypeReclamation();
            $TypeReclamation->setTypeReclamation('typereclamation'.$i);

            $manager->persist($TypeReclamation);}
        $manager->flush();*/
    }
}
