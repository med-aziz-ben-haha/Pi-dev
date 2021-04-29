<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210322141856 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE medicament_ordonnance (medicament_id INT NOT NULL, ordonnance_id INT NOT NULL, INDEX IDX_5B989D3AAB0D61F7 (medicament_id), INDEX IDX_5B989D3A2BF23B8F (ordonnance_id), PRIMARY KEY(medicament_id, ordonnance_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ordonnance (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, contenu_ord VARCHAR(255) NOT NULL, date_ord DATE NOT NULL, INDEX IDX_924B326CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE medicament_ordonnance ADD CONSTRAINT FK_5B989D3AAB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE medicament_ordonnance ADD CONSTRAINT FK_5B989D3A2BF23B8F FOREIGN KEY (ordonnance_id) REFERENCES ordonnance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ordonnance ADD CONSTRAINT FK_924B326CA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE medicament ADD date_modif DATE DEFAULT NULL, ADD img_medicament VARCHAR(255) DEFAULT NULL, DROP validite, DROP disponibilite, CHANGE nom_medicament nom_medicament VARCHAR(255) NOT NULL, CHANGE quantite dispo INT NOT NULL, CHANGE lien_image_medicament descmedicament VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medicament_ordonnance DROP FOREIGN KEY FK_5B989D3A2BF23B8F');
        $this->addSql('DROP TABLE medicament_ordonnance');
        $this->addSql('DROP TABLE ordonnance');
        $this->addSql('ALTER TABLE medicament ADD validite VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD disponibilite VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP date_modif, DROP img_medicament, CHANGE nom_medicament nom_medicament VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE dispo quantite INT NOT NULL, CHANGE descmedicament lien_image_medicament VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
