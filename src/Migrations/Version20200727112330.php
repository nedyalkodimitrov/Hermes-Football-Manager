<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200727112330 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE schedule DROP INDEX UNIQ_5A3811FBC4131765, ADD INDEX IDX_5A3811FBC4131765 (coaches)');
        $this->addSql('ALTER TABLE schedule ADD CONSTRAINT FK_5A3811FBC4131765 FOREIGN KEY (coaches) REFERENCES coach (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE schedule DROP INDEX IDX_5A3811FBC4131765, ADD UNIQUE INDEX UNIQ_5A3811FBC4131765 (coaches)');
        $this->addSql('ALTER TABLE schedule DROP FOREIGN KEY FK_5A3811FBC4131765');
    }
}
