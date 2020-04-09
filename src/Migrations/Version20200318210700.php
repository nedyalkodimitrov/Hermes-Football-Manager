<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200318210700 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE match_list DROP INDEX UNIQ_25A7496A7A5BC505, ADD INDEX IDX_25A7496A7A5BC505 (`match`)');
        $this->addSql('ALTER TABLE match_list DROP FOREIGN KEY FK_25A7496A7A5BC505');
        $this->addSql('ALTER TABLE match_list ADD CONSTRAINT FK_25A7496A7A5BC505 FOREIGN KEY (`match`) REFERENCES matches (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE match_list DROP INDEX IDX_25A7496A7A5BC505, ADD UNIQUE INDEX UNIQ_25A7496A7A5BC505 (`match`)');
        $this->addSql('ALTER TABLE match_list DROP FOREIGN KEY FK_25A7496A7A5BC505');
        $this->addSql('ALTER TABLE match_list ADD CONSTRAINT FK_25A7496A7A5BC505 FOREIGN KEY (`match`) REFERENCES `match` (id)');
    }
}
