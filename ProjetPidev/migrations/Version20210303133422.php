<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210303133422 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_post (id INT AUTO_INCREMENT NOT NULL, nom_categorie_post VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE parapharmacie DROP FOREIGN KEY FK_27D41E87A76ED395');
        $this->addSql('DROP INDEX IDX_27D41E87A76ED395 ON parapharmacie');
        $this->addSql('ALTER TABLE parapharmacie ADD img_para LONGTEXT DEFAULT NULL, ADD lien_image_p VARCHAR(255) DEFAULT NULL, DROP user_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE categorie_post');
        $this->addSql('ALTER TABLE parapharmacie ADD user_id INT NOT NULL, DROP img_para, DROP lien_image_p');
        $this->addSql('ALTER TABLE parapharmacie ADD CONSTRAINT FK_27D41E87A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_27D41E87A76ED395 ON parapharmacie (user_id)');
    }
}
