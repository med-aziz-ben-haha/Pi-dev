<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210519234959 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cattag');
        $this->addSql('DROP TABLE centremed');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE tags');
        $this->addSql('ALTER TABLE article CHANGE titre titre VARCHAR(500) DEFAULT NULL, CHANGE image image VARCHAR(500) DEFAULT NULL, CHANGE contenu contenu VARCHAR(500) DEFAULT NULL, CHANGE categorie_id categorie_id VARCHAR(500) DEFAULT NULL, CHANGE date date VARCHAR(500) DEFAULT NULL, CHANGE description description VARCHAR(500) DEFAULT NULL, CHANGE vues vues VARCHAR(500) DEFAULT NULL, CHANGE type type VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE categorie CHANGE nom nom VARCHAR(500) DEFAULT NULL, CHANGE description description VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE categorie_actualite_actualite DROP FOREIGN KEY FK_66775E52A2843073');
        $this->addSql('ALTER TABLE categorie_actualite_actualite DROP FOREIGN KEY FK_66775E52DB8776F1');
        $this->addSql('ALTER TABLE categorie_actualite_actualite ADD CONSTRAINT FK_66775E52A2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie_actualite_actualite ADD CONSTRAINT FK_66775E52DB8776F1 FOREIGN KEY (categorie_actualite_id) REFERENCES categorie_actualite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie_produit DROP FOREIGN KEY FK_76264285D7C4E100');
        $this->addSql('ALTER TABLE categorie_produit ADD CONSTRAINT FK_76264285D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('ALTER TABLE list_produit DROP FOREIGN KEY FK_F5EA312AA76ED395');
        $this->addSql('ALTER TABLE list_produit DROP FOREIGN KEY FK_F5EA312AD7C4E100');
        $this->addSql('ALTER TABLE list_produit DROP FOREIGN KEY FK_F5EA312AF77D927C');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AD7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AF77D927C FOREIGN KEY (panier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE list_produit_produit DROP FOREIGN KEY FK_C443AEBD5190A27');
        $this->addSql('ALTER TABLE list_produit_produit DROP FOREIGN KEY FK_C443AEBF347EFB');
        $this->addSql('ALTER TABLE list_produit_produit ADD CONSTRAINT FK_C443AEBD5190A27 FOREIGN KEY (list_produit_id) REFERENCES list_produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE list_produit_produit ADD CONSTRAINT FK_C443AEBF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C162CB942');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CA76ED395');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CC54C8C93');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C162CB942 FOREIGN KEY (folder_id) REFERENCES folder (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CC54C8C93 FOREIGN KEY (type_id) REFERENCES media_type (id)');
        $this->addSql('ALTER TABLE media_data DROP FOREIGN KEY FK_6EB42CB0EA9FDD75');
        $this->addSql('ALTER TABLE media_data ADD CONSTRAINT FK_6EB42CB0EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE media_post_rel DROP FOREIGN KEY FK_A29C747C4B89032C');
        $this->addSql('ALTER TABLE media_post_rel DROP FOREIGN KEY FK_A29C747CEA9FDD75');
        $this->addSql('ALTER TABLE media_post_rel ADD CONSTRAINT FK_A29C747C4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE media_post_rel ADD CONSTRAINT FK_A29C747CEA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE note_soin_mp DROP FOREIGN KEY FK_9085F48A74621D0');
        $this->addSql('ALTER TABLE note_soin_mp DROP FOREIGN KEY FK_9085F48AA76ED395');
        $this->addSql('ALTER TABLE note_soin_mp ADD CONSTRAINT FK_9085F48A74621D0 FOREIGN KEY (soin_mp_id) REFERENCES soin_mp (id)');
        $this->addSql('ALTER TABLE note_soin_mp ADD CONSTRAINT FK_9085F48AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE ordonnance DROP FOREIGN KEY FK_924B326C4F31A84');
        $this->addSql('ALTER TABLE ordonnance DROP FOREIGN KEY FK_924B326CA76ED395');
        $this->addSql('ALTER TABLE ordonnance ADD CONSTRAINT FK_924B326C4F31A84 FOREIGN KEY (medecin_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE ordonnance ADD CONSTRAINT FK_924B326CA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE ordonnance_medicament DROP FOREIGN KEY FK_FE7DFAEE2BF23B8F');
        $this->addSql('ALTER TABLE ordonnance_medicament DROP FOREIGN KEY FK_FE7DFAEEAB0D61F7');
        $this->addSql('ALTER TABLE ordonnance_medicament ADD CONSTRAINT FK_FE7DFAEE2BF23B8F FOREIGN KEY (ordonnance_id) REFERENCES ordonnance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ordonnance_medicament ADD CONSTRAINT FK_FE7DFAEEAB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2A76ED395');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2D7C4E100');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('ALTER TABLE parapharmacie DROP FOREIGN KEY FK_27D41E8798260155');
        $this->addSql('ALTER TABLE parapharmacie ADD CONSTRAINT FK_27D41E8798260155 FOREIGN KEY (region_id) REFERENCES regions (id)');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D5DA0FB8');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DA76ED395');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D5DA0FB8 FOREIGN KEY (template_id) REFERENCES template (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE post_category DROP FOREIGN KEY FK_B9A1906012469DE2');
        $this->addSql('ALTER TABLE post_category DROP FOREIGN KEY FK_B9A190604B89032C');
        $this->addSql('ALTER TABLE post_category ADD CONSTRAINT FK_B9A1906012469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post_category ADD CONSTRAINT FK_B9A190604B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE postt DROP FOREIGN KEY FK_16392F59140AAD8E');
        $this->addSql('ALTER TABLE postt ADD CONSTRAINT FK_16392F59140AAD8E FOREIGN KEY (categorie_post_id) REFERENCES categorie_post (id)');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27BCF5E72D');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27D7C4E100');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_produit (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064047BA88B4D');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404A76ED395');
        $this->addSql('ALTER TABLE reclamation CHANGE user_id user_id INT NOT NULL, CHANGE type_reclamation_id type_reclamation_id INT NOT NULL, CHANGE description_reclamation description_reclamation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064047BA88B4D FOREIGN KEY (type_reclamation_id) REFERENCES type_reclamation (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0AA76ED395');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955CDB9AC97');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955CDB9AC97 FOREIGN KEY (centre_medical_id) REFERENCES centre_medical (id)');
        $this->addSql('ALTER TABLE reservation_user DROP FOREIGN KEY FK_9BAA1B21A76ED395');
        $this->addSql('ALTER TABLE reservation_user DROP FOREIGN KEY FK_9BAA1B21B83297E7');
        $this->addSql('ALTER TABLE reservation_user ADD CONSTRAINT FK_9BAA1B21A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_user ADD CONSTRAINT FK_9BAA1B21B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2CDB9AC97');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2CDB9AC97 FOREIGN KEY (centre_medical_id) REFERENCES centre_medical (id)');
        $this->addSql('ALTER TABLE soin_mp DROP FOREIGN KEY FK_11233010998FEB7C');
        $this->addSql('ALTER TABLE soin_mp ADD CONSTRAINT FK_11233010998FEB7C FOREIGN KEY (categorie_soin_mp_id) REFERENCES categorie_soin_mp (id)');
        $this->addSql('ALTER TABLE type_reclamation CHANGE type_reclamation type_reclamation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D7C4E100');
        $this->addSql('ALTER TABLE user CHANGE mdp mdp VARCHAR(80) NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id)');
        $this->addSql('ALTER TABLE user_actualite DROP FOREIGN KEY FK_54720C73A2843073');
        $this->addSql('ALTER TABLE user_actualite DROP FOREIGN KEY FK_54720C73A76ED395');
        $this->addSql('ALTER TABLE user_actualite ADD CONSTRAINT FK_54720C73A2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_actualite ADD CONSTRAINT FK_54720C73A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cattag (article_id INT NOT NULL, tag_id INT NOT NULL) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE centremed (id_centre_medical INT NOT NULL, nom_centre_medical VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, adresse VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Type VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Num_Tel INT NOT NULL, mail VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE services (id_services INT NOT NULL, nom_centre_medical INT NOT NULL, service VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, duree INT NOT NULL) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tags (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(500) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('ALTER TABLE article CHANGE titre titre VARCHAR(500) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE image image VARCHAR(500) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE contenu contenu VARCHAR(500) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE date date VARCHAR(500) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE description description VARCHAR(500) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE vues vues VARCHAR(500) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE type type VARCHAR(500) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE categorie_id categorie_id VARCHAR(500) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE categorie CHANGE nom nom VARCHAR(500) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE description description VARCHAR(500) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE categorie_actualite_actualite DROP FOREIGN KEY FK_66775E52DB8776F1');
        $this->addSql('ALTER TABLE categorie_actualite_actualite DROP FOREIGN KEY FK_66775E52A2843073');
        $this->addSql('ALTER TABLE categorie_actualite_actualite ADD CONSTRAINT FK_66775E52DB8776F1 FOREIGN KEY (categorie_actualite_id) REFERENCES categorie_actualite (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie_actualite_actualite ADD CONSTRAINT FK_66775E52A2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie_produit DROP FOREIGN KEY FK_76264285D7C4E100');
        $this->addSql('ALTER TABLE categorie_produit ADD CONSTRAINT FK_76264285D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE list_produit DROP FOREIGN KEY FK_F5EA312AA76ED395');
        $this->addSql('ALTER TABLE list_produit DROP FOREIGN KEY FK_F5EA312AD7C4E100');
        $this->addSql('ALTER TABLE list_produit DROP FOREIGN KEY FK_F5EA312AF77D927C');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AD7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE list_produit ADD CONSTRAINT FK_F5EA312AF77D927C FOREIGN KEY (panier_id) REFERENCES panier (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE list_produit_produit DROP FOREIGN KEY FK_C443AEBD5190A27');
        $this->addSql('ALTER TABLE list_produit_produit DROP FOREIGN KEY FK_C443AEBF347EFB');
        $this->addSql('ALTER TABLE list_produit_produit ADD CONSTRAINT FK_C443AEBD5190A27 FOREIGN KEY (list_produit_id) REFERENCES list_produit (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE list_produit_produit ADD CONSTRAINT FK_C443AEBF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C162CB942');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CC54C8C93');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CA76ED395');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C162CB942 FOREIGN KEY (folder_id) REFERENCES folder (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CC54C8C93 FOREIGN KEY (type_id) REFERENCES media_type (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media_data DROP FOREIGN KEY FK_6EB42CB0EA9FDD75');
        $this->addSql('ALTER TABLE media_data ADD CONSTRAINT FK_6EB42CB0EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media_post_rel DROP FOREIGN KEY FK_A29C747CEA9FDD75');
        $this->addSql('ALTER TABLE media_post_rel DROP FOREIGN KEY FK_A29C747C4B89032C');
        $this->addSql('ALTER TABLE media_post_rel ADD CONSTRAINT FK_A29C747CEA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media_post_rel ADD CONSTRAINT FK_A29C747C4B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE note_soin_mp DROP FOREIGN KEY FK_9085F48AA76ED395');
        $this->addSql('ALTER TABLE note_soin_mp DROP FOREIGN KEY FK_9085F48A74621D0');
        $this->addSql('ALTER TABLE note_soin_mp ADD CONSTRAINT FK_9085F48AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE note_soin_mp ADD CONSTRAINT FK_9085F48A74621D0 FOREIGN KEY (soin_mp_id) REFERENCES soin_mp (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ordonnance DROP FOREIGN KEY FK_924B326CA76ED395');
        $this->addSql('ALTER TABLE ordonnance DROP FOREIGN KEY FK_924B326C4F31A84');
        $this->addSql('ALTER TABLE ordonnance ADD CONSTRAINT FK_924B326CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ordonnance ADD CONSTRAINT FK_924B326C4F31A84 FOREIGN KEY (medecin_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ordonnance_medicament DROP FOREIGN KEY FK_FE7DFAEE2BF23B8F');
        $this->addSql('ALTER TABLE ordonnance_medicament DROP FOREIGN KEY FK_FE7DFAEEAB0D61F7');
        $this->addSql('ALTER TABLE ordonnance_medicament ADD CONSTRAINT FK_FE7DFAEE2BF23B8F FOREIGN KEY (ordonnance_id) REFERENCES ordonnance (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ordonnance_medicament ADD CONSTRAINT FK_FE7DFAEEAB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2A76ED395');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2D7C4E100');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parapharmacie DROP FOREIGN KEY FK_27D41E8798260155');
        $this->addSql('ALTER TABLE parapharmacie ADD CONSTRAINT FK_27D41E8798260155 FOREIGN KEY (region_id) REFERENCES regions (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DA76ED395');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D5DA0FB8');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D5DA0FB8 FOREIGN KEY (template_id) REFERENCES template (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post_category DROP FOREIGN KEY FK_B9A190604B89032C');
        $this->addSql('ALTER TABLE post_category DROP FOREIGN KEY FK_B9A1906012469DE2');
        $this->addSql('ALTER TABLE post_category ADD CONSTRAINT FK_B9A190604B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post_category ADD CONSTRAINT FK_B9A1906012469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE postt DROP FOREIGN KEY FK_16392F59140AAD8E');
        $this->addSql('ALTER TABLE postt ADD CONSTRAINT FK_16392F59140AAD8E FOREIGN KEY (categorie_post_id) REFERENCES categorie_post (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27BCF5E72D');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27D7C4E100');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_produit (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404A76ED395');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064047BA88B4D');
        $this->addSql('ALTER TABLE reclamation CHANGE user_id user_id INT DEFAULT NULL, CHANGE type_reclamation_id type_reclamation_id INT DEFAULT NULL, CHANGE description_reclamation description_reclamation VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064047BA88B4D FOREIGN KEY (type_reclamation_id) REFERENCES type_reclamation (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0AA76ED395');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955CDB9AC97');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955CDB9AC97 FOREIGN KEY (centre_medical_id) REFERENCES centre_medical (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_user DROP FOREIGN KEY FK_9BAA1B21B83297E7');
        $this->addSql('ALTER TABLE reservation_user DROP FOREIGN KEY FK_9BAA1B21A76ED395');
        $this->addSql('ALTER TABLE reservation_user ADD CONSTRAINT FK_9BAA1B21B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_user ADD CONSTRAINT FK_9BAA1B21A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2CDB9AC97');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2CDB9AC97 FOREIGN KEY (centre_medical_id) REFERENCES centre_medical (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE soin_mp DROP FOREIGN KEY FK_11233010998FEB7C');
        $this->addSql('ALTER TABLE soin_mp ADD CONSTRAINT FK_11233010998FEB7C FOREIGN KEY (categorie_soin_mp_id) REFERENCES categorie_soin_mp (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE type_reclamation CHANGE type_reclamation type_reclamation VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649D7C4E100');
        $this->addSql('ALTER TABLE `user` CHANGE mdp mdp VARCHAR(80) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D649D7C4E100 FOREIGN KEY (parapharmacie_id) REFERENCES parapharmacie (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_actualite DROP FOREIGN KEY FK_54720C73A76ED395');
        $this->addSql('ALTER TABLE user_actualite DROP FOREIGN KEY FK_54720C73A2843073');
        $this->addSql('ALTER TABLE user_actualite ADD CONSTRAINT FK_54720C73A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_actualite ADD CONSTRAINT FK_54720C73A2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
