<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210331122501 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, centre_medical_id INT DEFAULT NULL, nom_centre_medical VARCHAR(255) NOT NULL, nom_patient VARCHAR(255) NOT NULL, service VARCHAR(255) NOT NULL, matricule VARCHAR(255) NOT NULL, INDEX IDX_E19D9AD2CDB9AC97 (centre_medical_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2CDB9AC97 FOREIGN KEY (centre_medical_id) REFERENCES centre_medical (id)');
        $this->addSql('ALTER TABLE centre_medical ADD adresse VARCHAR(255) NOT NULL, ADD type VARCHAR(255) NOT NULL, ADD mail VARCHAR(255) NOT NULL, ADD num_tel INT DEFAULT NULL, DROP adresse_centre_medical, DROP type_centre_medical, DROP num_tel_centre_medical, DROP mail_centre_medical, CHANGE nom_centre_medical nom_centre_medical VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE service');
        $this->addSql('ALTER TABLE centre_medical ADD adresse_centre_medical VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD type_centre_medical VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD num_tel_centre_medical VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD mail_centre_medical VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP adresse, DROP type, DROP mail, DROP num_tel, CHANGE nom_centre_medical nom_centre_medical VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
