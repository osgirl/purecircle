<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150428183714 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE techadv ADD firstname VARCHAR(255) NOT NULL, ADD lastname VARCHAR(255) NOT NULL, ADD idNumber VARCHAR(255) NOT NULL, ADD payrollNumber VARCHAR(255) NOT NULL, ADD ManagerId VARCHAR(255) NOT NULL, DROP first_name, DROP last_name, DROP id_number, DROP payroll_number, DROP manager_id, CHANGE remarks remarks VARCHAR(255) NOT NULL, CHANGE date_added dateAdded DATE NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE TechAdv ADD first_name VARCHAR(255) NOT NULL, ADD last_name VARCHAR(255) NOT NULL, ADD id_number VARCHAR(255) NOT NULL, ADD payroll_number VARCHAR(255) NOT NULL, ADD manager_id VARCHAR(255) NOT NULL, DROP firstname, DROP lastname, DROP idNumber, DROP payrollNumber, DROP ManagerId, CHANGE remarks remarks LONGTEXT NOT NULL, CHANGE dateadded date_added DATE NOT NULL');
    }
}
