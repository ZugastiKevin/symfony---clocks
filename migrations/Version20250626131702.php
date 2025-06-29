<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250626131702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE clocks DROP FOREIGN KEY FK_5B146DD4D9349DF
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_5B146DD4D9349DF ON clocks
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE clocks CHANGE type_clocks_id sub_type_clocks_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE clocks ADD CONSTRAINT FK_5B146DD2C371BCB FOREIGN KEY (sub_type_clocks_id) REFERENCES sub_type_clocks (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_5B146DD2C371BCB ON clocks (sub_type_clocks_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE clocks DROP FOREIGN KEY FK_5B146DD2C371BCB
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_5B146DD2C371BCB ON clocks
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE clocks CHANGE sub_type_clocks_id type_clocks_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE clocks ADD CONSTRAINT FK_5B146DD4D9349DF FOREIGN KEY (type_clocks_id) REFERENCES type_clocks (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_5B146DD4D9349DF ON clocks (type_clocks_id)
        SQL);
    }
}
