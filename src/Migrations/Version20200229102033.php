<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200229102033 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_to_user_request DROP FOREIGN KEY FK_A5D35EC636F6A883');
        $this->addSql('ALTER TABLE user_to_user_request DROP FOREIGN KEY FK_A5D35EC69CB41F4F');
        $this->addSql('DROP INDEX IDX_A5D35EC636F6A883 ON user_to_user_request');
        $this->addSql('DROP INDEX IDX_A5D35EC69CB41F4F ON user_to_user_request');
        $this->addSql('ALTER TABLE user_to_user_request ADD sender INT DEFAULT NULL, ADD receiver INT DEFAULT NULL, DROP toUser, DROP fromUser');
        $this->addSql('ALTER TABLE user_to_user_request ADD CONSTRAINT FK_A5D35EC65F004ACF FOREIGN KEY (sender) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_to_user_request ADD CONSTRAINT FK_A5D35EC63DB88C96 FOREIGN KEY (receiver) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A5D35EC65F004ACF ON user_to_user_request (sender)');
        $this->addSql('CREATE INDEX IDX_A5D35EC63DB88C96 ON user_to_user_request (receiver)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_to_user_request DROP FOREIGN KEY FK_A5D35EC65F004ACF');
        $this->addSql('ALTER TABLE user_to_user_request DROP FOREIGN KEY FK_A5D35EC63DB88C96');
        $this->addSql('DROP INDEX IDX_A5D35EC65F004ACF ON user_to_user_request');
        $this->addSql('DROP INDEX IDX_A5D35EC63DB88C96 ON user_to_user_request');
        $this->addSql('ALTER TABLE user_to_user_request ADD toUser INT DEFAULT NULL, ADD fromUser INT DEFAULT NULL, DROP sender, DROP receiver');
        $this->addSql('ALTER TABLE user_to_user_request ADD CONSTRAINT FK_A5D35EC636F6A883 FOREIGN KEY (toUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_to_user_request ADD CONSTRAINT FK_A5D35EC69CB41F4F FOREIGN KEY (fromUser) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A5D35EC636F6A883 ON user_to_user_request (toUser)');
        $this->addSql('CREATE INDEX IDX_A5D35EC69CB41F4F ON user_to_user_request (fromUser)');
    }
}
