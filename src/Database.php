<?php
declare(strict_types=1);


namespace App;

require_once 'src/Exception/ConfigurationException.php';
require_once 'src/Exception/StorageException.php';

use App\Exception\ConfigurationException;
use App\Exception\StorageException;
use PDO;
use PDOException;

class Database
{
    private PDO $conn;

    /**
     * @throws StorageException
     * @throws ConfigurationException
     */
    public function __construct(array $config)
    {
        try {
            $config = $this->validateConfig($config);
            $this->createConnection($config);
        } catch (PDOException $e) {
            throw new StorageException("Database connection error");
        }
    }

    public function getAboutMe(): array
    {
        $query = "SELECT * FROM about";
        $result = $this->conn->query($query, PDO::FETCH_ASSOC);
        return $result->fetch();
    }

    public function getSkills(): array
    {
        $skills = [
            'html' => [],
            'css' => [],
            'js' => [],
            'back-end' => [],
            'other' => []
        ];

        $query = $this->conn->query("SELECT * FROM skill ORDER BY category");
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row) {
            $skills[$row['category']][] = [
                'name' => $row['name'],
                'image' => $row['image'],
                'alt' => $row['alt']
            ];
        }
        return $skills;
    }

    public function getProjectsCategories(): array
    {
        $query = $this->conn->query("SELECT * FROM project_category");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProjects(): array
    {
        $query = $this->conn->query("SELECT * FROM project");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as &$project) {
            if (isset($project['techs'])) {
                $project['techs'] = array_map('trim', explode(';', $project['techs']));
                $project['sources'] = array_map('trim', explode(';', $project['sources']));
            }
        }

        return $result;
    }

    public function getEducations(): array
    {
        $query = $this->conn->query("SELECT * FROM education");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getExperiences(): array
    {
        $query = $this->conn->query("SELECT * FROM experience");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param array $config
     * @return array
     * @throws ConfigurationException
     */
    private function validateConfig(array $config): array
    {
        if (empty($config['host'])
            || empty($config['port'])
            || empty($config['database'])
            || empty($config['user'])) {
            throw new ConfigurationException('Missing configuration please contact the administrator');
        }
        return $config;
    }

    /**
     * @param array $config
     * @return void
     */
    private function createConnection(array $config): void
    {
        $dsn = "mysql:dbname={$config['database']};host={$config['host']};port={$config['port']}";
        $this->conn = new PDO(
            $dsn,
            $config['user'],
            $config['password']
        );
    }
}