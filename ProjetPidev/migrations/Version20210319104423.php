<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210319104423 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE list_produit (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, parapharmacie_id INT DEFAULT NULL, panier_id INT DEFAULT NULL, prix_tot DOUBLE PRECISION DEFAULT NULL, tva_tot DOUBLE PRECISION DEFAULT NULL, qte INT DEFAULT NULL, INDEX IDX_F5EA312AA76ED395 (user_id), INDEX IDX_F5EA312AD7C4E100 (parapharmacie_id), INDEX IDX_F5EA312AF77D927C (panier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE list_produit_produit (list_produit_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_C443AEBD5190A27 (list_produit_id), INDEX IDX_C443AEBF347EFB (produit_id), PRIMARY KEY(list_produit_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, parapharmacie_id INT NOT NULL, nom_produit VARCHAR(255) NOT NULL, prix_produit DOUBLE PRECISION NOT NULL, quantite_produit INT NOT NULL, tva INT NOT NULL, description LONGTEXT NOT NULL, img_prod VARCHAR(255) DEFAULT NULL, lien_img_p VARCHAR(255) DEFAULT NULL, INDEX IDX_29A5EC27BCF5E72D (categorie_id), INDEX IDX_29A5EC27D7C4E100 (parapharmacie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AD7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AF77D927C FOREIGN KEY (panier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE list_produit_produit ADD CONSTRAINT FK_C443AEBD5190A27 FOREIGN KEY (list_produit_id) REFERENCES list_produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE list_produit_produit ADD CONSTRAINT FK_C443AEBF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_produit (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2F347EFB');
        $this->addSql('DROP INDEX UNIQ_24CC0DF2F347EFB ON panier');
        $this->addSql('ALTER TABLE panier DROP produit_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE list_produit_produit DROP FOREIGN KEY FK_C443AEBD5190A27');
        $this->addSql('ALTER TABLE list_produit_produit DROP FOREIGN KEY FK_C443AEBF347EFB');
        $this->addSql('DROP TABLE list_produit');
        $this->addSql('DROP TABLE list_produit_produit');
        $this->addSql('DROP TABLE produit');
        $this->addSql('ALTER TABLE panier ADD produit_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_24CC0DF2F347EFB ON panier (produit_id)');
    }
}
