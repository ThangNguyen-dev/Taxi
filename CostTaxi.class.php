<?php
require_once 'db.php';
    class CostTaxi {

        private $typeDistance;
        private $typeWeight;
        private $cost;
        private $conn;
        private $weight;
        private $distance;
        private $fee;
        
        public function __construct($conn, $weight, $distance) {
            $this->distance = $distance;
            $this->weight = $weight;
            $this->conn = $conn;
            $this->getTypeDistanceFromDatabase();
            $this->getTypeWeightFromDatabase();
            $this->getFee();
        }
        public function setDistane($distance){
            $this->distance = $distance;
        }
        public function setWeight($weight){
            $this->weight = $weight;
        }
        public function setConnect($conn){
            $this->conn = $conn;
        }
        public function getDistance(){
            return $this->distance;
        }
        public function getWeight(){
            return $this->weight;
        }
        public function getFee(){
            $result = $this->conn->query('SELECT fee FROM Cost WHERE id_cost = '.$this->typeDistance.' AND id_weight = '.$this->typeWeight);
            $result = $result->fetch(PDO::FETCH_ASSOC);
            return $this->fee = $result['fee'];
        }

        public function getCost()
        {
            return $this->Cost = $this->fee*$this->distance;
        }

        public function getTypeDistanceFromDatabase()
        {
            $result = $this->conn->query('SELECT id_cost FROM taxi_fee WHERE '.$this->distance.' >= taxi_fee.Min AND '.$this->distance.' < taxi_fee.Max');
            $result = $this->typeDistance = $result->fetch(PDO::FETCH_ASSOC);
            return $this->typeDistance = $result['id_cost'];
        }

        public function getTypeWeightFromDatabase()
        {
            $result = $this->conn->query('SELECT weight1.id_weight FROM weight as weight1, weight as weight2 WHERE '.$this->weight.' >= weight1.weight AND '.$this->weight.'  < weight2.weight');
            $result =  $result->fetch(PDO::FETCH_ASSOC);
            return $this->typeWeight = end($result);
        }
    }
    $taxi_fee = new CostTaxi($conn, 2, 10);
    $fee = $taxi_fee->getCost();
    // $taxi_fee->getTypeWeightFromDatabase();
    echo $taxi_fee->getFee();
    echo $taxi_fee->getCost();
    
    
?>