<?php
    namespace Database;

    use PDO;
    use PDOException;

    class DataBase {
        private string $db_host = "127.0.0.1";
        private string $db_name = "metis";
        private int $db_port = 3306;
        private string $db_user = "root";
        private int $db_pass = 1980;
        private ?PDO $pdo = null;

        public function connect() {
            if ($this->pdo === null) {
                $dsn = "mysql:host=$this->db_host;dbname=$this->db_name;port=$this->db_port;charset=utf8";
                $this->pdo = new PDO($dsn, $this->db_user, $this->db_pass);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }
            return $this->connect();
        }
    }