<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308121903 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment_like (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, commentaire_id INT DEFAULT NULL, is_liked INT NOT NULL, INDEX IDX_8A55E25FA76ED395 (user_id), INDEX IDX_8A55E25FBA9CD190 (commentaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment_like ADD CONSTRAINT FK_8A55E25FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment_like ADD CONSTRAINT FK_8A55E25FBA9CD190 FOREIGN KEY (commentaire_id) REFERENCES commentaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE blog ADD moredescreption VARCHAR(255) NOT NULL, ADD slogan VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE command ADD cmd_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE command ADD CONSTRAINT FK_8ECAEAD4734413DD FOREIGN KEY (cmd_id) REFERENCES produit (id)');
        $this->addSql('CREATE INDEX IDX_8ECAEAD4734413DD ON command (cmd_id)');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCC2B162DC');
        $this->addSql('ALTER TABLE commentaire ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCC2B162DC FOREIGN KEY (blogid_id) REFERENCES blog (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_67F068BCA76ED395 ON commentaire (user_id)');
        $this->addSql('ALTER TABLE produit ADD image VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment_like DROP FOREIGN KEY FK_8A55E25FA76ED395');
        $this->addSql('ALTER TABLE comment_like DROP FOREIGN KEY FK_8A55E25FBA9CD190');
        $this->addSql('DROP TABLE comment_like');
        $this->addSql('ALTER TABLE blog DROP moredescreption, DROP slogan');
        $this->addSql('ALTER TABLE command DROP FOREIGN KEY FK_8ECAEAD4734413DD');
        $this->addSql('DROP INDEX IDX_8ECAEAD4734413DD ON command');
        $this->addSql('ALTER TABLE command DROP cmd_id');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCA76ED395');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCC2B162DC');
        $this->addSql('DROP INDEX IDX_67F068BCA76ED395 ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP user_id');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCC2B162DC FOREIGN KEY (blogid_id) REFERENCES blog (id)');
        $this->addSql('ALTER TABLE produit DROP image');
    }
}
