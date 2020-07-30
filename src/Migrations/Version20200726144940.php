<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200726144940 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE schedule DROP INDEX IDX_5A3811FBC4131765, ADD UNIQUE INDEX UNIQ_5A3811FBC4131765 (coaches)');
        $this->addSql('ALTER TABLE schedule DROP FOREIGN KEY FK_5A3811FBC4131765');
        $this->addSql('ALTER TABLE schedule ADD training INT DEFAULT NULL, DROP description');
        $this->addSql('ALTER TABLE schedule ADD CONSTRAINT FK_5A3811FBD5128A8F FOREIGN KEY (training) REFERENCES training (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5A3811FBD5128A8F ON schedule (training)');
        $this->addSql('ALTER TABLE training ADD schedule INT DEFAULT NULL, DROP date');
        $this->addSql('ALTER TABLE training ADD CONSTRAINT FK_D5128A8F5A3811FB FOREIGN KEY (schedule) REFERENCES schedule (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D5128A8F5A3811FB ON training (schedule)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE schedule DROP INDEX UNIQ_5A3811FBC4131765, ADD INDEX IDX_5A3811FBC4131765 (coaches)');
        $this->addSql('ALTER TABLE schedule DROP FOREIGN KEY FK_5A3811FBD5128A8F');
        $this->addSql('DROP INDEX UNIQ_5A3811FBD5128A8F ON schedule');
        $this->addSql('ALTER TABLE schedule ADD description VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP training');
        $this->addSql('ALTER TABLE schedule ADD CONSTRAINT FK_5A3811FBC4131765 FOREIGN KEY (coaches) REFERENCES coach (id)');
        $this->addSql('ALTER TABLE training DROP FOREIGN KEY FK_D5128A8F5A3811FB');
        $this->addSql('DROP INDEX UNIQ_D5128A8F5A3811FB ON training');
        $this->addSql('ALTER TABLE training ADD date VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP schedule');
    }
}
