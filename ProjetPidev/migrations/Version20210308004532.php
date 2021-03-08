<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210308004532 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE note_soin_mp (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, soin_mp_id INT DEFAULT NULL, valeur VARCHAR(255) DEFAULT NULL, avis VARCHAR(255) DEFAULT NULL, INDEX IDX_9085F48AA76ED395 (user_id), INDEX IDX_9085F48A74621D0 (soin_mp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE note_soin_mp ADD CONSTRAINT FK_9085F48AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE note_soin_mp ADD CONSTRAINT FK_9085F48A74621D0 FOREIGN KEY (soin_mp_id) REFERENCES soin_mp (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE note_soin_mp');
    }
}
