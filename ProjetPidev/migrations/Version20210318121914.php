<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210318121914 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post ADD categorie_post_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D140AAD8E FOREIGN KEY (categorie_post_id) REFERENCES categorie_post (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D140AAD8E ON post (categorie_post_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D140AAD8E');
        $this->addSql('DROP INDEX IDX_5A8A6C8D140AAD8E ON post');
        $this->addSql('ALTER TABLE post DROP categorie_post_id');
    }
}
