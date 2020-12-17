<?php
require_once 'db.php';
    class CostTaxi {

        private $idDistance;
        private $idWeight;
        private $cost;
        private $conn;
        private $weight;
        private $distance;
        private $fee;
        
        public function __construct($conn, $weight, $distance) {
            $this->distance = $distance;
            $this->weight = $weight;
            $this->conn = $conn;
            $this->getIdDistanceFromDatabase();
            $this->getIdWeightFromDatabase();
            $this->getFeeFromDatbase();
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
        public function getFeeFromDatbase(){
            $result = $this->conn->query('SELECT fee FROM Cost WHERE id_cost = '.$this->idDistance.' AND id_weight = '.$this->idWeight);
            $result = $result->fetch(PDO::FETCH_ASSOC);
            return $this->fee = $result['fee'];
        }

        public function getCost()
        {
            return $this->Cost = $this->fee;
        }

        public function getIdDistanceFromDatabase()
        {
            $result = $this->conn->query('SELECT id_cost FROM taxi_fee WHERE '.$this->distance.' >= taxi_fee.Min AND '.$this->distance.' < taxi_fee.Max');
            $result = $this->idDistance = $result->fetch(PDO::FETCH_ASSOC);
            return $this->idDistance = $result['id_cost'];
        }

        public function getIdWeightFromDatabase()
        {
            $result = $this->conn->query('SELECT * FROM `weight`');
            $results = $result->fetchALl();
            $maxValue= end($results);
            $maxValue= $maxValue['weight'];
            foreach ($results as $key => $result) {
                if($this->getWeight() >=$results[$key]['weight'] && $this->getWeight() <$results[$key+1]['weight']){
                    return $this->idWeight = $result['id_weight'];
                    break;
                }elseif($this->getWeight() <$results[0]['weight'])
                {
                    return $this->idWeight = $results[0]['id_weight'];
                    break;
                }elseif( $this->getWeight() >= $maxValue){
                    $weight = end($results);
                    return $this->idWeight = $weight['id_weight'];
                    break;
                }else {
                    require_once 'modules/error.php';
                }
            }
        }
    }
    
    
?>