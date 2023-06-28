<?php
    class Employee{
        // Connection
        private $conn;
        // Table
        private $db_table = "Employee";
        // Columns
        public $id;
        public $provinsi;
        public $kepemilikan;
        public $faskes;
        public $jumlah;
        public $created;
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }
        // GET ALL
        public function getEmployees(){
            $sqlQuery = "SELECT id, provinsi, kepemilikan, faskes, jumlah, created FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createEmployee(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        provinsi = :provinsi, 
                        kepemilikan = :kepemilikan, 
                        faskes = :faskes,
                        jumlah = :jumlah, 
                        created = :created";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->provinsi=htmlspecialchars(strip_tags($this->provinsi));
            $this->kepemilikan=htmlspecialchars(strip_tags($this->kepemilikan));
            $this->faskes=htmlspecialchars(strip_tags($this->faskes));
            $this->jumlah=htmlspecialchars(strip_tags($this->jumlah));
            $this->created=htmlspecialchars(strip_tags($this->created));
        
            // bind data
            $stmt->bindParam(":provinsi", $this->provinsi);
            $stmt->bindParam(":kepemilikan", $this->kepemilikan);
            $stmt->bindParam(":faskes", $this->faskes);
            $stmt->bindParam(":jumlah", $this->jumlah);
            $stmt->bindParam(":created", $this->created);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // READ single
        public function getSingleEmployee(){
            $sqlQuery = "SELECT
                        id, 
                        provinsi, 
                        kepemilikan, 
                        faskes, 
                        jumlah, 
                        created
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->provinsi = $dataRow['provinsi'];
            $this->kepemilikan = $dataRow['kepemilikan'];
            $this->faskes = $dataRow['faskes'];
            $this->jumlah = $dataRow['jumlah'];
            $this->created = $dataRow['created'];
        }        
        // UPDATE
        public function updateEmployee(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        provinsi = :provinsi, 
                        kepemilikan = :kepemilikan, 
                        faskes = :faskes, 
                        jumlah = :jumlah, 
                        created = :created
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->provinsi=htmlspecialchars(strip_tags($this->provinsi));
            $this->kepemilikan=htmlspecialchars(strip_tags($this->kepemilikan));
            $this->faskes=htmlspecialchars(strip_tags($this->faskes));
            $this->jumlah=htmlspecialchars(strip_tags($this->jumlah));
            $this->created=htmlspecialchars(strip_tags($this->created));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":provinsi", $this->provinsi);
            $stmt->bindParam(":kepemilikan", $this->kepemilikan);
            $stmt->bindParam(":faskes", $this->faskes);
            $stmt->bindParam(":jumlah", $this->jumlah);
            $stmt->bindParam(":created", $this->created);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteEmployee(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
?>