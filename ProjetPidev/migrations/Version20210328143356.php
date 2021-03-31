<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210328143356 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE postt (id INT AUTO_INCREMENT NOT NULL, categorie_post_id INT DEFAULT NULL, titre_postt VARCHAR(255) NOT NULL, texte_postt VARCHAR(1000) NOT NULL, date_postt DATE NOT NULL, INDEX IDX_16392F59140AAD8E (categorie_post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE postt ADD CONSTRAINT FK_16392F59140AAD8E FOREIGN KEY (categorie_post_id) REFERENCES categorie_post (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE postt');
    }
}
