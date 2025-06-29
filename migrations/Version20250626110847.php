<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250626110847 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE sub_type_clocks_clocks DROP FOREIGN KEY FK_C59E5E3C2C371BCB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sub_type_clocks_clocks DROP FOREIGN KEY FK_C59E5E3CF95508CF
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sub_type_clocks_clocks
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sub_type_clocks ADD type_clocks_id INT DEFAULT NULL, ADD story VARCHAR(255) DEFAULT NULL, ADD sub_story VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sub_type_clocks ADD CONSTRAINT FK_C39F587B4D9349DF FOREIGN KEY (type_clocks_id) REFERENCES type_clocks (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_C39F587B4D9349DF ON sub_type_clocks (type_clocks_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE type_clocks CHANGE describ describ VARCHAR(255) DEFAULT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE sub_type_clocks_clocks (sub_type_clocks_id INT NOT NULL, clocks_id INT NOT NULL, INDEX IDX_C59E5E3CF95508CF (clocks_id), INDEX IDX_C59E5E3C2C371BCB (sub_type_clocks_id), PRIMARY KEY(sub_type_clocks_id, clocks_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sub_type_clocks_clocks ADD CONSTRAINT FK_C59E5E3C2C371BCB FOREIGN KEY (sub_type_clocks_id) REFERENCES sub_type_clocks (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sub_type_clocks_clocks ADD CONSTRAINT FK_C59E5E3CF95508CF FOREIGN KEY (clocks_id) REFERENCES clocks (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE type_clocks CHANGE describ describ VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sub_type_clocks DROP FOREIGN KEY FK_C39F587B4D9349DF
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_C39F587B4D9349DF ON sub_type_clocks
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sub_type_clocks DROP type_clocks_id, DROP story, DROP sub_story
        SQL);
    }
}
