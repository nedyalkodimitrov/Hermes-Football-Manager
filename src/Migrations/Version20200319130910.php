<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200319130910 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE match_stats DROP FOREIGN KEY FK_E92D180B2ABEACD6');
        $this->addSql('DROP INDEX UNIQ_E92D180B2ABEACD6 ON match_stats');
        $this->addSql('ALTER TABLE match_stats CHANGE match_id `match` INT DEFAULT NULL');
        $this->addSql('ALTER TABLE match_stats ADD CONSTRAINT FK_E92D180B7A5BC505 FOREIGN KEY (`match`) REFERENCES matches (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E92D180B7A5BC505 ON match_stats (`match`)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE match_stats DROP FOREIGN KEY FK_E92D180B7A5BC505');
        $this->addSql('DROP INDEX UNIQ_E92D180B7A5BC505 ON match_stats');
        $this->addSql('ALTER TABLE match_stats CHANGE `match` match_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE match_stats ADD CONSTRAINT FK_E92D180B2ABEACD6 FOREIGN KEY (match_id) REFERENCES matches (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E92D180B2ABEACD6 ON match_stats (match_id)');
    }
}
