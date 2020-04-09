<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200317212550 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE matches DROP FOREIGN KEY FK_62615BAE92D180B');
        $this->addSql('DROP INDEX UNIQ_62615BAE92D180B ON matches');
        $this->addSql('ALTER TABLE matches DROP match_stats');
        $this->addSql('ALTER TABLE match_stats ADD match_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE match_stats ADD CONSTRAINT FK_E92D180B2ABEACD6 FOREIGN KEY (match_id) REFERENCES matches (id)');
        $this->addSql('CREATE INDEX IDX_E92D180B2ABEACD6 ON match_stats (match_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE match_stats DROP FOREIGN KEY FK_E92D180B2ABEACD6');
        $this->addSql('DROP INDEX IDX_E92D180B2ABEACD6 ON match_stats');
        $this->addSql('ALTER TABLE match_stats DROP match_id');
        $this->addSql('ALTER TABLE matches ADD match_stats INT DEFAULT NULL');
        $this->addSql('ALTER TABLE matches ADD CONSTRAINT FK_62615BAE92D180B FOREIGN KEY (match_stats) REFERENCES match_stats (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_62615BAE92D180B ON matches (match_stats)');
    }
}
