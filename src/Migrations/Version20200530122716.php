<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200530122716 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE match_list DROP FOREIGN KEY FK_25A7496A7A5BC505');
        $this->addSql('DROP INDEX IDX_25A7496A7A5BC505 ON match_list');
        $this->addSql('ALTER TABLE match_list CHANGE `match` matches INT DEFAULT NULL');
        $this->addSql('ALTER TABLE match_list ADD CONSTRAINT FK_25A7496A62615BA FOREIGN KEY (matches) REFERENCES matches (id)');
        $this->addSql('CREATE INDEX IDX_25A7496A62615BA ON match_list (matches)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE match_list DROP FOREIGN KEY FK_25A7496A62615BA');
        $this->addSql('DROP INDEX IDX_25A7496A62615BA ON match_list');
        $this->addSql('ALTER TABLE match_list CHANGE matches `match` INT DEFAULT NULL');
        $this->addSql('ALTER TABLE match_list ADD CONSTRAINT FK_25A7496A7A5BC505 FOREIGN KEY (`match`) REFERENCES matches (id)');
        $this->addSql('CREATE INDEX IDX_25A7496A7A5BC505 ON match_list (`match`)');
    }
}
