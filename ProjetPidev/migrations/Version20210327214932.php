<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210327214932 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE calendar (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, description LONGTEXT NOT NULL, all_day TINYINT(1) NOT NULL, background_color VARCHAR(7) NOT NULL, border_color VARCHAR(7) NOT NULL, text_color VARCHAR(7) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D140AAD8E');
        $this->addSql('DROP INDEX IDX_5A8A6C8D140AAD8E ON post');
        $this->addSql('ALTER TABLE post CHANGE categoriepostid categorie_post_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D140AAD8E FOREIGN KEY (categorie_post_id) REFERENCES categorie_post (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D140AAD8E ON post (categorie_post_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE calendar');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D140AAD8E');
        $this->addSql('DROP INDEX IDX_5A8A6C8D140AAD8E ON post');
        $this->addSql('ALTER TABLE post CHANGE categorie_post_id categoriePostId INT DEFAULT NULL');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D140AAD8E FOREIGN KEY (categoriePostId) REFERENCES categorie_post (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D140AAD8E ON post (categoriePostId)');
    }
}
