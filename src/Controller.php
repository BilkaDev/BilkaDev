<?php
declare(strict_types=1);

namespace App;

require_once 'src/Exception/ConfigurationException.php';

use App\Exception\ConfigurationException;
use App\Exception\StorageException;

require_once 'src/View.php';
require_once 'src/Database.php';

class Controller
{
    private static array $configuration;
    private View $view;
    private Database $db;

    public static function initConfiguration(array $config): void
    {
        self::$configuration = $config;
    }

    /**
     * @throws ConfigurationException
     * @throws StorageException
     */
    public function __construct()
    {
        $this->validateConfig();
        $this->view = new View();
        $this->db = new Database(self::$configuration['db']);
    }

    public function run()
    {
        $paramsView['about'] = $this->db->getAboutMe();
        $paramsView['skills'] = $this->db->getSkills();
        $paramsView['projectCategories'] = $this->db->getProjectsCategories();
        $paramsView['projects'] = $this->db->getProjects();
        $paramsView['educations'] = $this->db->getEducations();
        $paramsView['experiences'] = $this->db->getExperiences();
        $this->view->render($paramsView);
    }

    /**
     * @return void
     * @throws ConfigurationException
     */
    private function validateConfig(): void
    {
        if (empty(self::$configuration['db'])) {
            throw new ConfigurationException('Missing configuration');
        }
    }
}