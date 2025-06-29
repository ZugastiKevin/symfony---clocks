<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250626083219 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE clocks (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, price INT NOT NULL, describ LONGTEXT DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_5B146DDA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE comments (id INT AUTO_INCREMENT NOT NULL, clocks_id INT DEFAULT NULL, user_id INT DEFAULT NULL, comment VARCHAR(255) NOT NULL, create_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_5F9E962AF95508CF (clocks_id), INDEX IDX_5F9E962AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE type_clocks (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE type_clocks_clocks (type_clocks_id INT NOT NULL, clocks_id INT NOT NULL, INDEX IDX_85034C094D9349DF (type_clocks_id), INDEX IDX_85034C09F95508CF (clocks_id), PRIMARY KEY(type_clocks_id, clocks_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE clocks ADD CONSTRAINT FK_5B146DDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE comments ADD CONSTRAINT FK_5F9E962AF95508CF FOREIGN KEY (clocks_id) REFERENCES clocks (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE comments ADD CONSTRAINT FK_5F9E962AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE type_clocks_clocks ADD CONSTRAINT FK_85034C094D9349DF FOREIGN KEY (type_clocks_id) REFERENCES type_clocks (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE type_clocks_clocks ADD CONSTRAINT FK_85034C09F95508CF FOREIGN KEY (clocks_id) REFERENCES clocks (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE clocks DROP FOREIGN KEY FK_5B146DDA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962AF95508CF
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962AA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE type_clocks_clocks DROP FOREIGN KEY FK_85034C094D9349DF
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE type_clocks_clocks DROP FOREIGN KEY FK_85034C09F95508CF
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE clocks
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE comments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE type_clocks
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE type_clocks_clocks
        SQL);
    }
}
