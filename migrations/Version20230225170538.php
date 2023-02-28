<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230225170538 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC727ACA70');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC748C0F37');
        $this->addSql('DROP INDEX IDX_67F068BC727ACA70 ON commentaire');
        $this->addSql('DROP INDEX IDX_67F068BC748C0F37 ON commentaire');
        $this->addSql('ALTER TABLE commentaire ADD user_id INT DEFAULT NULL, DROP parent_id, DROP com_id');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCA76ED395 ON commentaire (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCA76ED395');
        $this->addSql('DROP INDEX IDX_67F068BCA76ED395 ON commentaire');
        $this->addSql('ALTER TABLE commentaire ADD com_id INT DEFAULT NULL, CHANGE user_id parent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC727ACA70 FOREIGN KEY (parent_id) REFERENCES commentaire (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC748C0F37 FOREIGN KEY (com_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_67F068BC727ACA70 ON commentaire (parent_id)');
        $this->addSql('CREATE INDEX IDX_67F068BC748C0F37 ON commentaire (com_id)');
    }
}
