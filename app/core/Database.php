<?php


class Database {

    public \PDO $pdo;

    public function __construct(array $config)
    {
        try {
            // get the dsn, user and password to be able to connect to the database
            //$dsn = $config['DB_DSN']."=".$config['DB_HOST'].";port=".$config['DB_PORT'].";dbname=".$config['DB_NAME'] ?? '';
            //$user = $config['DB_USER'] ?? '';
            //$password = $config['DB_PASSWORD'] ?? '';
            $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=jeraldb_master';// pour le mac, host = 127.0.0.1
            $user = 'root';
            $password = '';
            
            // create an instance of the PDO (to connect to the database)
            $this->pdo = new \PDO($dsn, $user, $password);
        }
        // if connection to database fails, return the error (with its specific message, to debug)
        catch (PDOException $e) {
            echo "Error : " . $e->getMessage() . "<br/>";
            die();
        }

        // set attributes of the pdo to return the potential errors (with their details, to debug more easily)
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }


    public function applyMigrations() 
    {
        // launch the function to create migrations table and then the function to get the applied migrations
        $this->createMigrationsTable();
        $appliedMigrations = $this->getAppliedMigrations();

        // store in an array all the new migrations
        $newMigrations = [];

        // get all the files in the migrations directory
        $files = scandir('app/migrations');
        
        $toApplyMigrations = array_diff($files, $appliedMigrations);

        // loop in the files of the migrations folder and apply those migrations
        foreach($toApplyMigrations as $migration){
            if($migration === '.' || $migration === '..'){
                continue;
            } else {
                // require the migration file in question
                require_once 'app/migrations/'.$migration;

                // get the file name
                $className = pathinfo($migration, PATHINFO_FILENAME);

                // create an instance of the class of the migration
                $instance = new $className();

                // apply the function 'up()' of the migration
                $this->log('Applying migration '.$migration.' ...');
                $instance->up($this->pdo);
                $this->log('Applied migration '.$migration.'!');

                $newMigrations[]=$migration;
            }
        }
        if(!empty($newMigrations)){
            $this->saveMigrations($newMigrations);
        } else {
            $this->log('All migrations were applied !');
        }
    }

    // function to create migrations table (if not created already)
    public function createMigrationsTable()
    {
        // Execute (exec) SQL code to create and configure migrations table if not created already
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations (
                id INT AUTO_INCREMENT PRIMARY KEY,
                migration VARCHAR(255),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) 
            ENGINE=INNODB;");
    }


    // function to get the already applied migrations 
    public function getAppliedMigrations()
    {
        $statement = $this->pdo->prepare("SELECT migration FROM migrations");
        $statement->execute();
        
        return $statement->fetchAll(\PDO::FETCH_COLUMN);
    }


    // function to save the newly added migrations to the migrations table in the database 
    public function saveMigrations(array $migrations)
    {
        echo PHP_EOL;
        echo PHP_EOL;

        $str = implode(",", array_map(fn($m)=>"('$m')",$migrations));

        $statement = $this->pdo->prepare("INSERT INTO migrations (migration) VALUES $str");
        $statement->execute();


    }
    
    // function to remove migrations from the migrations table in the database 
    public function removeMigrations()
    {
        $statement = $this->pdo->prepare("TRUNCATE TABLE migrations");
        $statement->execute();
    }

    public function downAllMigrations()
    {
        $appliedMigrations = $this->getAppliedMigrations();
        $downedMigrations = [];
        // get all the files in the migrations directory
        $files = scandir('app/migrations');
        $toDownMigrations = array_reverse(array_intersect($files, $appliedMigrations));
        // loop in the files of the migrations folder and DOWN those migrations
        foreach($toDownMigrations as $migration){
            if($migration === '.' || $migration === '..'){
                continue;
            } else {
                // require the migration file in question
                require_once 'app/migrations/'.$migration;
                // get the file name
                $className = pathinfo($migration, PATHINFO_FILENAME);
                // create an instance of the class of the migration
                $instance = new $className();
                // call the function 'down()' of the migration
                $this->log('Downing migration '.$migration.' ...');
                $instance->down($this->pdo);
                $this->log('Downing migration '.$migration.'!');
                $downedMigrations[]=$migration;
            }
        }
        if(!empty($downedMigrations)){
            $this->removeMigrations();
        } else {
            $this->log('All migrations were Downed !');
        }
    }

    
    // function to get the log
    protected function log($message)
    {
        echo PHP_EOL.'['.date('Y-m-d H:i:s').'] - '.$message.PHP_EOL;
    }
}