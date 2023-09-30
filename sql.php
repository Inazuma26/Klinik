<?php
class crud extends database{
    public function TampilData(){
        $sql = "SELECT id,pasien ,bpjs FROM klinik";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    // function creat
    public function insertData($pasien,$bpjs){
        try{
            $sql = "INSERT INTO klinik (pasien,bpjs) VALUES (:pasien, :bpjs)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":pasien",$pasien);
            $stmt->bindParam(":bpjs",$bpjs);
            $stmt->execute();
            return true;
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}