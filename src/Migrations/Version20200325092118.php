<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200325092118 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE match_scheme (`match` INT NOT NULL, scheme INT NOT NULL, INDEX IDX_1E8C7C4A7A5BC505 (`match`), INDEX IDX_1E8C7C4ABFE3854B (scheme), PRIMARY KEY(`match`, scheme)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE soccer_scheme (id INT AUTO_INCREMENT NOT NULL, `schema` VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE match_scheme ADD CONSTRAINT FK_1E8C7C4A7A5BC505 FOREIGN KEY (`match`) REFERENCES matches (id)');
        $this->addSql('ALTER TABLE match_scheme ADD CONSTRAINT FK_1E8C7C4ABFE3854B FOREIGN KEY (scheme) REFERENCES soccer_scheme (id)');
        $this->addSql('ALTER TABLE matches CHANGE date date VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE match_scheme DROP FOREIGN KEY FK_1E8C7C4ABFE3854B');
        $this->addSql('DROP TABLE match_scheme');
        $this->addSql('DROP TABLE soccer_scheme');
        $this->addSql('ALTER TABLE matches CHANGE date date DATE NOT NULL');
    }
}
