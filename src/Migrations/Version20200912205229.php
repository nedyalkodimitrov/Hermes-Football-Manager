<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200912205229 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE qualification (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE coach ADD qualification_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE coach ADD CONSTRAINT FK_3F596DCC1A75EE38 FOREIGN KEY (qualification_id) REFERENCES qualification (id)');
        $this->addSql('CREATE INDEX IDX_3F596DCC1A75EE38 ON coach (qualification_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE coach DROP FOREIGN KEY FK_3F596DCC1A75EE38');
        $this->addSql('DROP TABLE qualification');
        $this->addSql('DROP INDEX IDX_3F596DCC1A75EE38 ON coach');
        $this->addSql('ALTER TABLE coach DROP qualification_id');
    }
}
