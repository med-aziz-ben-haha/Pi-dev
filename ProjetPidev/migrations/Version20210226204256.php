<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210226204256 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_soin_mp (id INT AUTO_INCREMENT NOT NULL, libelle_categorie_soin_mp VARCHAR(255) NOT NULL, lien_icone_csmp VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE soin_mp (id INT AUTO_INCREMENT NOT NULL, categorie_soin_mp_id INT NOT NULL, titre_soin_mp VARCHAR(255) NOT NULL, description_soin_mp VARCHAR(255) NOT NULL, lien_image_smp VARCHAR(255) DEFAULT NULL, adresse_soin_mp VARCHAR(255) NOT NULL, INDEX IDX_11233010998FEB7C (categorie_soin_mp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(30) NOT NULL, mdp VARCHAR(30) NOT NULL, email VARCHAR(255) NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, matricule_fiscale VARCHAR(50) DEFAULT NULL, adresse_user VARCHAR(255) NOT NULL, telephone VARCHAR(20) NOT NULL, specialite VARCHAR(255) DEFAULT NULL, sexe VARCHAR(10) NOT NULL, role INT NOT NULL, lien_image_user VARCHAR(255) DEFAULT NULL, lien_icone_user VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE soin_mp ADD CONSTRAINT FK_11233010998FEB7C FOREIGN KEY (categorie_soin_mp_id) REFERENCES categorie_soin_mp (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE soin_mp DROP FOREIGN KEY FK_11233010998FEB7C');
        $this->addSql('DROP TABLE categorie_soin_mp');
        $this->addSql('DROP TABLE soin_mp');
        $this->addSql('DROP TABLE `user`');
    }
}
