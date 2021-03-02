<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210302190459 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post_categorie_post DROP FOREIGN KEY FK_A902DBBA140AAD8E');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D1ADED311');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC71ADED311');
        $this->addSql('ALTER TABLE post_categorie_post DROP FOREIGN KEY FK_A902DBBA4B89032C');
        $this->addSql('DROP TABLE categorie_post');
        $this->addSql('DROP TABLE discussion');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE post_categorie_post');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('ALTER TABLE parapharmacie DROP FOREIGN KEY FK_27D41E87A76ED395');
        $this->addSql('DROP INDEX IDX_27D41E87A76ED395 ON parapharmacie');
        $this->addSql('ALTER TABLE parapharmacie DROP user_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_post (id INT AUTO_INCREMENT NOT NULL, categorie_post VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE discussion (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, discussion_id INT DEFAULT NULL, titre_post VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, text_post VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_post DATE NOT NULL, INDEX IDX_5A8A6C8DA76ED395 (user_id), UNIQUE INDEX UNIQ_5A8A6C8D1ADED311 (discussion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE post_categorie_post (post_id INT NOT NULL, categorie_post_id INT NOT NULL, INDEX IDX_A902DBBA4B89032C (post_id), INDEX IDX_A902DBBA140AAD8E (categorie_post_id), PRIMARY KEY(post_id, categorie_post_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, discussion_id INT DEFAULT NULL, user_id INT DEFAULT NULL, texte_reponse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, note_reponse DOUBLE PRECISION NOT NULL, INDEX IDX_5FB6DEC7A76ED395 (user_id), UNIQUE INDEX UNIQ_5FB6DEC71ADED311 (discussion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D1ADED311 FOREIGN KEY (discussion_id) REFERENCES discussion (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE post_categorie_post ADD CONSTRAINT FK_A902DBBA140AAD8E FOREIGN KEY (categorie_post_id) REFERENCES categorie_post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post_categorie_post ADD CONSTRAINT FK_A902DBBA4B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC71ADED311 FOREIGN KEY (discussion_id) REFERENCES discussion (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE parapharmacie ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE parapharmacie ADD CONSTRAINT FK_27D41E87A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_27D41E87A76ED395 ON parapharmacie (user_id)');
    }
}
