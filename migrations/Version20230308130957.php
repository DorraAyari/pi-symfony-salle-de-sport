<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308130957 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rating (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, cours_id INT DEFAULT NULL, stars INT NOT NULL, INDEX IDX_D8892622A76ED395 (user_id), INDEX IDX_D88926227ECF78B0 (cours_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_cours (user_id INT NOT NULL, cours_id INT NOT NULL, INDEX IDX_1F0877C4A76ED395 (user_id), INDEX IDX_1F0877C47ECF78B0 (cours_id), PRIMARY KEY(user_id, cours_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D88926227ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_cours ADD CONSTRAINT FK_1F0877C4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_cours ADD CONSTRAINT FK_1F0877C47ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE calendar DROP FOREIGN KEY FK_6EA9A1463C105691');
        $this->addSql('ALTER TABLE calendar DROP FOREIGN KEY FK_6EA9A1467ECF78B0');
        $this->addSql('ALTER TABLE calendar ADD CONSTRAINT FK_6EA9A1463C105691 FOREIGN KEY (coach_id) REFERENCES coach (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE calendar ADD CONSTRAINT FK_6EA9A1467ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE coach ADD image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE command ADD cmd_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE command ADD CONSTRAINT FK_8ECAEAD4734413DD FOREIGN KEY (cmd_id) REFERENCES produit (id)');
        $this->addSql('CREATE INDEX IDX_8ECAEAD4734413DD ON command (cmd_id)');
        $this->addSql('ALTER TABLE comment_like CHANGE is_liked is_liked INT NOT NULL');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C3C105691');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C3C105691 FOREIGN KEY (coach_id) REFERENCES coach (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6497ECF78B0');
        $this->addSql('DROP INDEX IDX_8D93D6497ECF78B0 ON user');
        $this->addSql('ALTER TABLE user DROP cours_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D8892622A76ED395');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D88926227ECF78B0');
        $this->addSql('ALTER TABLE user_cours DROP FOREIGN KEY FK_1F0877C4A76ED395');
        $this->addSql('ALTER TABLE user_cours DROP FOREIGN KEY FK_1F0877C47ECF78B0');
        $this->addSql('DROP TABLE rating');
        $this->addSql('DROP TABLE user_cours');
        $this->addSql('ALTER TABLE calendar DROP FOREIGN KEY FK_6EA9A1467ECF78B0');
        $this->addSql('ALTER TABLE calendar DROP FOREIGN KEY FK_6EA9A1463C105691');
        $this->addSql('ALTER TABLE calendar ADD CONSTRAINT FK_6EA9A1467ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE calendar ADD CONSTRAINT FK_6EA9A1463C105691 FOREIGN KEY (coach_id) REFERENCES coach (id)');
        $this->addSql('ALTER TABLE coach DROP image');
        $this->addSql('ALTER TABLE command DROP FOREIGN KEY FK_8ECAEAD4734413DD');
        $this->addSql('DROP INDEX IDX_8ECAEAD4734413DD ON command');
        $this->addSql('ALTER TABLE command DROP cmd_id');
        $this->addSql('ALTER TABLE comment_like CHANGE is_liked is_liked TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C3C105691');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C3C105691 FOREIGN KEY (coach_id) REFERENCES coach (id)');
        $this->addSql('ALTER TABLE user ADD cours_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6497ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6497ECF78B0 ON user (cours_id)');
    }
}
