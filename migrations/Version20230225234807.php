<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230225234807 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours_user DROP FOREIGN KEY FK_5EE5E9A67ECF78B0');
        $this->addSql('ALTER TABLE cours_user DROP FOREIGN KEY FK_5EE5E9A6A76ED395');
        $this->addSql('DROP TABLE cours_user');
        $this->addSql('ALTER TABLE user ADD user_id INT DEFAULT NULL, ADD cours_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649A76ED395 FOREIGN KEY (user_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6497ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649A76ED395 ON user (user_id)');
        $this->addSql('CREATE INDEX IDX_8D93D6497ECF78B0 ON user (cours_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cours_user (cours_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_5EE5E9A67ECF78B0 (cours_id), INDEX IDX_5EE5E9A6A76ED395 (user_id), PRIMARY KEY(cours_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE cours_user ADD CONSTRAINT FK_5EE5E9A67ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cours_user ADD CONSTRAINT FK_5EE5E9A6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A76ED395');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6497ECF78B0');
        $this->addSql('DROP INDEX IDX_8D93D649A76ED395 ON user');
        $this->addSql('DROP INDEX IDX_8D93D6497ECF78B0 ON user');
        $this->addSql('ALTER TABLE user DROP user_id, DROP cours_id');
    }
}
