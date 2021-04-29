<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210324114631 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_produit (id INT AUTO_INCREMENT NOT NULL, parapharmacie_id INT NOT NULL, categorie VARCHAR(255) NOT NULL, img_categorie VARCHAR(255) DEFAULT NULL, lien_img_cat VARCHAR(255) DEFAULT NULL, INDEX IDX_76264285D7C4E100 (parapharmacie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE list_produit (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, parapharmacie_id INT DEFAULT NULL, panier_id INT DEFAULT NULL, prix_tot DOUBLE PRECISION DEFAULT NULL, tva_tot DOUBLE PRECISION DEFAULT NULL, prix_finale DOUBLE PRECISION DEFAULT NULL, qte INT DEFAULT NULL, INDEX IDX_F5EA312AA76ED395 (user_id), INDEX IDX_F5EA312AD7C4E100 (parapharmacie_id), INDEX IDX_F5EA312AF77D927C (panier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE list_produit_produit (list_produit_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_C443AEBD5190A27 (list_produit_id), INDEX IDX_C443AEBF347EFB (produit_id), PRIMARY KEY(list_produit_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, parapharmacie_id INT NOT NULL, prix_tot DOUBLE PRECISION DEFAULT NULL, tva_tot DOUBLE PRECISION DEFAULT NULL, prix_finale DOUBLE PRECISION DEFAULT NULL, INDEX IDX_24CC0DF2A76ED395 (user_id), INDEX IDX_24CC0DF2D7C4E100 (parapharmacie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE regions (id INT AUTO_INCREMENT NOT NULL, region VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categorie_produit ADD CONSTRAINT FK_76264285D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AD7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AF77D927C FOREIGN KEY (panier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE list_produit_produit ADD CONSTRAINT FK_C443AEBD5190A27 FOREIGN KEY (list_produit_id) REFERENCES list_produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE list_produit_produit ADD CONSTRAINT FK_C443AEBF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('ALTER TABLE parapharmacie ADD region_id INT NOT NULL, ADD img_para LONGTEXT DEFAULT NULL, ADD lien_image_p VARCHAR(255) DEFAULT NULL, CHANGE tel_para tel_para INT NOT NULL');
        $this->addSql('ALTER TABLE parapharmacie ADD CONSTRAINT FK_27D41E8798260155 FOREIGN KEY (region_id) REFERENCES regions (id)');
        $this->addSql('CREATE INDEX IDX_27D41E8798260155 ON parapharmacie (region_id)');
        $this->addSql('ALTER TABLE produit ADD categorie_id INT NOT NULL, ADD tva INT NOT NULL, ADD description LONGTEXT NOT NULL, ADD img_prod VARCHAR(255) DEFAULT NULL, ADD lien_img_p VARCHAR(255) DEFAULT NULL, DROP categorie_produit');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_produit (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC27BCF5E72D ON produit (categorie_id)');
        $this->addSql('ALTER TABLE user ADD parapharmacie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649D7C4E100 ON user (parapharmacie_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27BCF5E72D');
        $this->addSql('ALTER TABLE list_produit_produit DROP FOREIGN KEY FK_C443AEBD5190A27');
        $this->addSql('ALTER TABLE list_produit DROP FOREIGN KEY FK_F5EA312AF77D927C');
        $this->addSql('ALTER TABLE parapharmacie DROP FOREIGN KEY FK_27D41E8798260155');
        $this->addSql('DROP TABLE categorie_produit');
        $this->addSql('DROP TABLE list_produit');
        $this->addSql('DROP TABLE list_produit_produit');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE regions');
        $this->addSql('DROP INDEX IDX_27D41E8798260155 ON parapharmacie');
        $this->addSql('ALTER TABLE parapharmacie DROP region_id, DROP img_para, DROP lien_image_p, CHANGE tel_para tel_para VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX IDX_29A5EC27BCF5E72D ON produit');
        $this->addSql('ALTER TABLE produit ADD categorie_produit VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP categorie_id, DROP tva, DROP description, DROP img_prod, DROP lien_img_p');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649D7C4E100');
        $this->addSql('DROP INDEX IDX_8D93D649D7C4E100 ON `user`');
        $this->addSql('ALTER TABLE `user` DROP parapharmacie_id');
    }
}
