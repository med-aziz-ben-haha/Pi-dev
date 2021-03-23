<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210319101249 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE list_produit (id INT AUTO_INCREMENT NOT NULL, parapharmacie_id INT DEFAULT NULL, user_id INT DEFAULT NULL, panier_id INT NOT NULL, prix_tot DOUBLE PRECISION DEFAULT NULL, tvt_tot DOUBLE PRECISION DEFAULT NULL, qte INT DEFAULT NULL, INDEX IDX_F5EA312AD7C4E100 (parapharmacie_id), INDEX IDX_F5EA312AA76ED395 (user_id), INDEX IDX_F5EA312AF77D927C (panier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AD7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AF77D927C FOREIGN KEY (panier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE produit ADD list_produit_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27D5190A27 FOREIGN KEY (list_produit_id) REFERENCES list_produit (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC27D5190A27 ON produit (list_produit_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27D5190A27');
        $this->addSql('DROP TABLE list_produit');
        $this->addSql('DROP INDEX IDX_29A5EC27D5190A27 ON produit');
        $this->addSql('ALTER TABLE produit DROP list_produit_id');
    }
}
