<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200229101630 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_to_user_request (id INT AUTO_INCREMENT NOT NULL, dates VARCHAR(255) NOT NULL, toUser INT DEFAULT NULL, fromUser INT DEFAULT NULL, INDEX IDX_A5D35EC636F6A883 (toUser), INDEX IDX_A5D35EC69CB41F4F (fromUser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_to_user_request ADD CONSTRAINT FK_A5D35EC636F6A883 FOREIGN KEY (toUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_to_user_request ADD CONSTRAINT FK_A5D35EC69CB41F4F FOREIGN KEY (fromUser) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user_to_user_request');
    }
}
