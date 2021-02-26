<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210226214007 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE actualite (id INT AUTO_INCREMENT NOT NULL, titre_article VARCHAR(255) NOT NULL, slogan_article VARCHAR(255) NOT NULL, text_article VARCHAR(255) NOT NULL, actif VARCHAR(255) DEFAULT NULL, creation DATE NOT NULL, en_premier VARCHAR(255) NOT NULL, couverture VARCHAR(255) NOT NULL, type_article VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_actualite (id INT AUTO_INCREMENT NOT NULL, nom_cat_actualite VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_actualite_actualite (categorie_actualite_id INT NOT NULL, actualite_id INT NOT NULL, INDEX IDX_66775E52DB8776F1 (categorie_actualite_id), INDEX IDX_66775E52A2843073 (actualite_id), PRIMARY KEY(categorie_actualite_id, actualite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, actualite_id INT NOT NULL, type_media VARCHAR(50) NOT NULL, description_media VARCHAR(255) NOT NULL, fichier_media VARCHAR(255) DEFAULT NULL, INDEX IDX_6A2CA10CA2843073 (actualite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_actualite (user_id INT NOT NULL, actualite_id INT NOT NULL, INDEX IDX_54720C73A76ED395 (user_id), INDEX IDX_54720C73A2843073 (actualite_id), PRIMARY KEY(user_id, actualite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categorie_actualite_actualite ADD CONSTRAINT FK_66775E52DB8776F1 FOREIGN KEY (categorie_actualite_id) REFERENCES categorie_actualite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie_actualite_actualite ADD CONSTRAINT FK_66775E52A2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CA2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id)');
        $this->addSql('ALTER TABLE user_actualite ADD CONSTRAINT FK_54720C73A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_actualite ADD CONSTRAINT FK_54720C73A2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_actualite_actualite DROP FOREIGN KEY FK_66775E52A2843073');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CA2843073');
        $this->addSql('ALTER TABLE user_actualite DROP FOREIGN KEY FK_54720C73A2843073');
        $this->addSql('ALTER TABLE categorie_actualite_actualite DROP FOREIGN KEY FK_66775E52DB8776F1');
        $this->addSql('DROP TABLE actualite');
        $this->addSql('DROP TABLE categorie_actualite');
        $this->addSql('DROP TABLE categorie_actualite_actualite');
        $this->addSql('DROP TABLE media');
        $this->addSql('DROP TABLE user_actualite');
    }
}
