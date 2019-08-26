<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190826102706 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE grupo (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(1000) NOT NULL, descripcion VARCHAR(4000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE estancia CHANGE id_hotel id_hotel INT DEFAULT NULL, CHANGE noches noches INT DEFAULT NULL, CHANGE personas personas INT DEFAULT NULL, CHANGE habitacion habitacion VARCHAR(150) DEFAULT NULL, CHANGE tipo_pension tipo_pension VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE hotel CHANGE nombre nombre VARCHAR(500) DEFAULT NULL, CHANGE descripcion descripcion VARCHAR(1000) DEFAULT NULL, CHANGE ciudad ciudad VARCHAR(300) DEFAULT NULL, CHANGE direccion direccion VARCHAR(1000) DEFAULT NULL, CHANGE comunidad comunidad VARCHAR(300) DEFAULT NULL, CHANGE provincia provincia VARCHAR(300) DEFAULT NULL, CHANGE salida salida TIME DEFAULT NULL, CHANGE llegada llegada TIME DEFAULT NULL, CHANGE telefono telefono VARCHAR(15) DEFAULT NULL, CHANGE email email VARCHAR(200) DEFAULT NULL, CHANGE web web VARCHAR(500) DEFAULT NULL, CHANGE imagen_portada imagen_portada INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hotel_servicio CHANGE anotacion anotacion VARCHAR(200) DEFAULT NULL');
        $this->addSql('ALTER TABLE imagen CHANGE imagen imagen VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE pack CHANGE nombre nombre VARCHAR(300) DEFAULT NULL, CHANGE descripcion descripcion VARCHAR(1000) DEFAULT NULL, CHANGE precio precio DOUBLE PRECISION DEFAULT NULL, CHANGE grupo grupo VARCHAR(200) DEFAULT NULL, CHANGE imagen_portada imagen_portada INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pedido CHANGE id_usuario id_usuario INT DEFAULT NULL, CHANGE id_estancia id_estancia INT DEFAULT NULL, CHANGE precio precio DOUBLE PRECISION DEFAULT NULL, CHANGE usado usado TINYINT(1) DEFAULT NULL, CHANGE fecha fecha DATE DEFAULT NULL, CHANGE fecha_fin fecha_fin DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE servicio CHANGE nombre nombre VARCHAR(200) DEFAULT NULL, CHANGE tipo tipo VARCHAR(200) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE usuario CHANGE usuario usuario VARCHAR(50) DEFAULT NULL, CHANGE password password VARCHAR(1000) DEFAULT NULL, CHANGE nombre nombre VARCHAR(200) DEFAULT NULL, CHANGE apellidos apellidos VARCHAR(500) DEFAULT NULL, CHANGE correo correo VARCHAR(200) DEFAULT NULL, CHANGE direccion direccion VARCHAR(400) DEFAULT NULL, CHANGE ciudad ciudad VARCHAR(400) DEFAULT NULL, CHANGE rol rol VARCHAR(100) DEFAULT NULL, CHANGE fecha_nacimiento fecha_nacimiento DATE DEFAULT NULL, CHANGE fecha_registro fecha_registro DATE DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE grupo');
        $this->addSql('ALTER TABLE estancia CHANGE id_hotel id_hotel INT DEFAULT NULL, CHANGE noches noches INT DEFAULT NULL, CHANGE personas personas INT DEFAULT NULL, CHANGE habitacion habitacion VARCHAR(150) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE tipo_pension tipo_pension VARCHAR(500) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE hotel CHANGE nombre nombre VARCHAR(500) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE descripcion descripcion VARCHAR(1000) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE ciudad ciudad VARCHAR(300) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE direccion direccion VARCHAR(1000) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE comunidad comunidad VARCHAR(300) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE provincia provincia VARCHAR(300) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE salida salida TIME DEFAULT \'NULL\', CHANGE llegada llegada TIME DEFAULT \'NULL\', CHANGE telefono telefono VARCHAR(15) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE email email VARCHAR(200) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE web web VARCHAR(500) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE imagen_portada imagen_portada INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hotel_servicio CHANGE anotacion anotacion VARCHAR(200) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE imagen CHANGE imagen imagen VARCHAR(500) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE pack CHANGE nombre nombre VARCHAR(300) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE descripcion descripcion VARCHAR(1000) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE precio precio DOUBLE PRECISION DEFAULT \'NULL\', CHANGE grupo grupo VARCHAR(200) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE imagen_portada imagen_portada INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pedido CHANGE id_usuario id_usuario INT DEFAULT NULL, CHANGE id_estancia id_estancia INT DEFAULT NULL, CHANGE precio precio DOUBLE PRECISION DEFAULT \'NULL\', CHANGE usado usado TINYINT(1) DEFAULT \'NULL\', CHANGE fecha fecha DATE DEFAULT \'NULL\', CHANGE fecha_fin fecha_fin DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE servicio CHANGE nombre nombre VARCHAR(200) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE tipo tipo VARCHAR(200) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin');
        $this->addSql('ALTER TABLE usuario CHANGE usuario usuario VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE password password VARCHAR(1000) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE nombre nombre VARCHAR(200) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE apellidos apellidos VARCHAR(500) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE correo correo VARCHAR(200) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE direccion direccion VARCHAR(400) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE ciudad ciudad VARCHAR(400) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE rol rol VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE fecha_nacimiento fecha_nacimiento DATE DEFAULT \'NULL\', CHANGE fecha_registro fecha_registro DATE DEFAULT \'NULL\'');
    }
}
