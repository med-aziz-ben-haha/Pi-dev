<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210324195808 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE actualite (id INT AUTO_INCREMENT NOT NULL, titre_article VARCHAR(255) NOT NULL, slogan_article VARCHAR(255) NOT NULL, text_article VARCHAR(255) NOT NULL, actif VARCHAR(255) DEFAULT NULL, creation DATE NOT NULL, en_premier VARCHAR(255) NOT NULL, couverture VARCHAR(255) NOT NULL, type_article VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_actualite (id INT AUTO_INCREMENT NOT NULL, nom_cat_actualite VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_actualite_actualite (categorie_actualite_id INT NOT NULL, actualite_id INT NOT NULL, INDEX IDX_66775E52DB8776F1 (categorie_actualite_id), INDEX IDX_66775E52A2843073 (actualite_id), PRIMARY KEY(categorie_actualite_id, actualite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_soin_mp (id INT AUTO_INCREMENT NOT NULL, libelle_categorie_soin_mp VARCHAR(255) NOT NULL, lien_icone_csmp VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE centre_medical (id INT AUTO_INCREMENT NOT NULL, nom_centre_medical VARCHAR(50) NOT NULL, adresse_centre_medical VARCHAR(255) NOT NULL, type_centre_medical VARCHAR(255) NOT NULL, num_tel_centre_medical VARCHAR(20) NOT NULL, mail_centre_medical VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE laboratoire (id INT AUTO_INCREMENT NOT NULL, nom_labo VARCHAR(255) NOT NULL, adresse_labo VARCHAR(255) NOT NULL, tel_labo VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, actualite_id INT NOT NULL, type_media VARCHAR(50) NOT NULL, description_media VARCHAR(255) NOT NULL, fichier_media VARCHAR(255) DEFAULT NULL, INDEX IDX_6A2CA10CA2843073 (actualite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medicament (id INT AUTO_INCREMENT NOT NULL, nom_medicament VARCHAR(30) NOT NULL, validite VARCHAR(10) NOT NULL, disponibilite VARCHAR(10) NOT NULL, quantite INT NOT NULL, lien_image_medicament VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parapharmacie (id INT AUTO_INCREMENT NOT NULL, nom_para VARCHAR(255) NOT NULL, adresse_para VARCHAR(255) NOT NULL, tel_para VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, parapharmacie_id INT NOT NULL, nom_produit VARCHAR(255) NOT NULL, prix_produit DOUBLE PRECISION NOT NULL, quantite_produit INT NOT NULL, categorie_produit VARCHAR(255) NOT NULL, INDEX IDX_29A5EC27D7C4E100 (parapharmacie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, type_reclamation_id INT NOT NULL, description_reclamation VARCHAR(255) NOT NULL, reponse VARCHAR(255) DEFAULT NULL, INDEX IDX_CE606404A76ED395 (user_id), INDEX IDX_CE6064047BA88B4D (type_reclamation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, date_rendez_vous DATE NOT NULL, heure_rendez_vous DATE NOT NULL, disponibilite_medecin INT NOT NULL, INDEX IDX_65E8AA0AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, centre_medical_id INT NOT NULL, service_reservation VARCHAR(255) DEFAULT NULL, date_reservation DATE NOT NULL, INDEX IDX_42C84955CDB9AC97 (centre_medical_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_user (reservation_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_9BAA1B21B83297E7 (reservation_id), INDEX IDX_9BAA1B21A76ED395 (user_id), PRIMARY KEY(reservation_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE soin_mp (id INT AUTO_INCREMENT NOT NULL, categorie_soin_mp_id INT NOT NULL, titre_soin_mp VARCHAR(255) NOT NULL, description_soin_mp VARCHAR(255) NOT NULL, lien_image_smp VARCHAR(255) DEFAULT NULL, adresse_soin_mp VARCHAR(255) NOT NULL, INDEX IDX_11233010998FEB7C (categorie_soin_mp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_reclamation (id INT AUTO_INCREMENT NOT NULL, type_reclamation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(30) NOT NULL, mdp VARCHAR(30) NOT NULL, email VARCHAR(255) NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, matricule_fiscale VARCHAR(50) DEFAULT NULL, adresse_user VARCHAR(255) NOT NULL, telephone VARCHAR(20) NOT NULL, specialite VARCHAR(255) DEFAULT NULL, sexe VARCHAR(10) NOT NULL, role INT NOT NULL, lien_image_user VARCHAR(255) DEFAULT NULL, lien_icone_user VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_actualite (user_id INT NOT NULL, actualite_id INT NOT NULL, INDEX IDX_54720C73A76ED395 (user_id), INDEX IDX_54720C73A2843073 (actualite_id), PRIMARY KEY(user_id, actualite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categorie_actualite_actualite ADD CONSTRAINT FK_66775E52DB8776F1 FOREIGN KEY (categorie_actualite_id) REFERENCES categorie_actualite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie_actualite_actualite ADD CONSTRAINT FK_66775E52A2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CA2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064047BA88B4D FOREIGN KEY (type_reclamation_id) REFERENCES type_reclamation (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955CDB9AC97 FOREIGN KEY (centre_medical_id) REFERENCES centre_medical (id)');
        $this->addSql('ALTER TABLE reservation_user ADD CONSTRAINT FK_9BAA1B21B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_user ADD CONSTRAINT FK_9BAA1B21A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE soin_mp ADD CONSTRAINT FK_11233010998FEB7C FOREIGN KEY (categorie_soin_mp_id) REFERENCES categorie_soin_mp (id)');
        $this->addSql('ALTER TABLE user_actualite ADD CONSTRAINT FK_54720C73A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_actualite ADD CONSTRAINT FK_54720C73A2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE note_soin_mp ADD CONSTRAINT FK_9085F48AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE note_soin_mp ADD CONSTRAINT FK_9085F48A74621D0 FOREIGN KEY (soin_mp_id) REFERENCES soin_mp (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_actualite_actualite DROP FOREIGN KEY FK_66775E52A2843073');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CA2843073');
        $this->addSql('ALTER TABLE user_actualite DROP FOREIGN KEY FK_54720C73A2843073');
        $this->addSql('ALTER TABLE categorie_actualite_actualite DROP FOREIGN KEY FK_66775E52DB8776F1');
        $this->addSql('ALTER TABLE soin_mp DROP FOREIGN KEY FK_11233010998FEB7C');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955CDB9AC97');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27D7C4E100');
        $this->addSql('ALTER TABLE reservation_user DROP FOREIGN KEY FK_9BAA1B21B83297E7');
        $this->addSql('ALTER TABLE note_soin_mp DROP FOREIGN KEY FK_9085F48A74621D0');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064047BA88B4D');
        $this->addSql('ALTER TABLE note_soin_mp DROP FOREIGN KEY FK_9085F48AA76ED395');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404A76ED395');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0AA76ED395');
        $this->addSql('ALTER TABLE reservation_user DROP FOREIGN KEY FK_9BAA1B21A76ED395');
        $this->addSql('ALTER TABLE user_actualite DROP FOREIGN KEY FK_54720C73A76ED395');
        $this->addSql('DROP TABLE actualite');
        $this->addSql('DROP TABLE categorie_actualite');
        $this->addSql('DROP TABLE categorie_actualite_actualite');
        $this->addSql('DROP TABLE categorie_soin_mp');
        $this->addSql('DROP TABLE centre_medical');
        $this->addSql('DROP TABLE laboratoire');
        $this->addSql('DROP TABLE media');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('DROP TABLE parapharmacie');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE reservation_user');
        $this->addSql('DROP TABLE soin_mp');
        $this->addSql('DROP TABLE type_reclamation');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE user_actualite');
    }
}
