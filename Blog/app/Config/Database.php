<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
    /**
     * The directory that holds the Migrations and Seeds directories.
     */
    public string $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

    /**
     * Lets you choose which connection group to use if no other is specified.
     */
    public string $defaultGroup = 'default';

    /**
     * The default database connection.
     *
     * @var array<string, mixed>
     */
    public array $default = [
        'DSN'          => '',  // Optional Data Source Name, typically leave empty for MySQL
        'hostname'     => 'localhost',  // Your database server
        'username'     => 'root',  // Your database username
        'password'     => 'asdflkjhg',  // Your database password
        'database'     => 'blog',  // Your database name
        'DBDriver'     => 'MySQLi',  // Driver for MySQL (use 'Postgre' for PostgreSQL, 'SQLite3' for SQLite, etc.)
        'DBPrefix'     => '',  // Table prefix (leave empty unless required)
        'pConnect'     => false,  // Persistent connection, set to true if you want persistent connections
        'DBDebug'      => (ENVIRONMENT !== 'production'), // Enable or disable database errors display
        'cacheOn'      => false, // Cache queries if necessary
        'cacheDir'     => '', // Directory for cached queries
        'charset'      => 'utf8', // Database character set
        'DBCollat'     => 'utf8_general_ci', // Database collation
        'swapPre'      => '', // Table prefix swapping
        'encrypt'      => false, // Whether to use encryption (typically false)
        'compress'     => false, // Enable compression if necessary
        'strictOn'     => false, // Strict SQL Mode
        'failover'     => [], // Failover connections (if needed)
        'port'         => 4306, // Default MySQL port (2306 in your code is uncommon, changed to 3306)
        'numberNative' => false, // Native number representation
        'dateFormat'   => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ],
    ];

    /**
     * This database connection is used when running PHPUnit database tests.
     *
     * @var array<string, mixed>
     */
    public array $tests = [
        'DSN'         => '',
        'hostname'    => 'localhost',
        'username'    => 'root',
        'password'    => 'asdflkjhg',
        'database'    => 'blog',
        'DBDriver'    => 'MySQLi',
        'DBPrefix'    => 'db_',  // Prefix for tests
        'pConnect'    => false,
        'DBDebug'     => true,
        'charset'     => 'utf8',
        'DBCollat'    => 'utf8_general_ci',
        'swapPre'     => '',
        'encrypt'     => false,
        'compress'    => false,
        'strictOn'    => false,
        'failover'    => [],
        'port'        => 4306, // Default MySQL port
        'foreignKeys' => true, // Enable foreign key checks for tests
        'busyTimeout' => 1000, // SQLite only
        'dateFormat'  => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ],
    ];

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        // Ensure that we always set the database group to 'tests' if
        // we are currently running an automated test suite, so that
        // we don't overwrite live data on accident.
        if (ENVIRONMENT === 'testing') {
            $this->defaultGroup = 'tests';
        }
    }

    /**
     * Return the active configuration.
     *
     * @return array<string, mixed>
     */
    public function getConfig(): array
    {
        return $this->{$this->defaultGroup};
    }
}
