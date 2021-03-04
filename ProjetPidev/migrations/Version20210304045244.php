<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210304045244 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_produit (id INT AUTO_INCREMENT NOT NULL, parapharmacie_id INT NOT NULL, categorie VARCHAR(255) NOT NULL, img_categorie VARCHAR(255) DEFAULT NULL, lien_img_cat VARCHAR(255) DEFAULT NULL, INDEX IDX_76264285D7C4E100 (parapharmacie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categorie_produit ADD CONSTRAINT FK_76264285D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27BCF5E72D');
        $this->addSql('DROP TABLE categorie_produit');
    }
}
