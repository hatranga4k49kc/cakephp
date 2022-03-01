<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Cake\Datasource\ConnectionManager;
/**
 * Users seed.
 */
class UserSeeds extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $conn = ConnectionManager::get('default');
        $conn->execute("
        INSERT INTO `users` VALUES ('10', 'Admin 3', 'admin3@gmail.com', '$2y$10$1oFb4K64gzGEhihwEYc7UueinbT.iVDW8N68t06VZ4OwHKEYE3n0.', 1, 0, NULL, '2022-01-05 08:48:57', '2022-02-07 04:30:57', NULL, NULL, NULL, NULL, NULL);
            ");
    }
    
}