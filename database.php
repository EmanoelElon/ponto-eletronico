<?php
class DB
{
    private $db;


    public function __construct($config)
    {


        // $connectionString = $config['driver'] . ':' . $config['database'];


        // $dsn = $config['driver'] . ':host=' . $config['host'] . ':' . $config['port'] . ';dbname=' . $config['dbname'] . ';' . $config['charset'];

        $dsn = $config['driver'] . ':' . $config['database'];

        // $username = $config['user'];
        // $password = $config['password'];

        // $dsn = 'mysql:host=10.243.133.201:3330;dbname=db_tradutores;charset=utf8';
        // $username = 'tradutores';
        // $password = 'Tr4dut0r35';
        // $dsn = 'mysql:host=127.0.0.1:3306;dbname=db_tradutores;charset=utf8';
        // $username = 'root';
        // $password = '259137';

        // $this->db = new pdo($connectionString);
        // $this->db = new pdo($dsn, $username, $password);

        // $config = [
        //     'driver' => 'mysql',
        //     'host' => '10.243.133.28',
        //     'port' => 3306,
        //     'dbname' => 'jcleiloes',
        //     'user' => 'root',
        //     'password'=> 'Ult12@320',
        //     'charset' => 'utf8mb4'
        // ];

        // phpinfo();
        // $this->db = new pdo($connectionString);
        // $this->db = new PDO($dsn, $username, $password);
        $this->db = new PDO($dsn);
    }

    public function query($query, $class = null, $params = [])
    {
        // dd($prepare = $this->db->prepare($query));
        // $prepare = $this->db->prepare($query);

        // $prepare->bindValue(':descricao', "%$descricao%");
        // $prepare->bindValue(':cidade', "%$cidade%");
        // $prepare->setFetchMode(PDO::FETCH_CLASS,Leilao::class);

        // dd( $class );

        if (is_array($class)) {
            // dd( $class );
            $params = $class;
            $class = null;
        }

        $prepare = $this->db->prepare($query);

        if ($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }

        //phpinfo();
        // dd($_SERVER);
        $prepare->execute($params);
        // dd($prepare->errorInfo());

        return $prepare;
    }
}

$DB = new DB($config['database']);

// $DB = new DB($config['database']);
