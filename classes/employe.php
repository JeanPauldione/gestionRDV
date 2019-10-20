<?php
class Employe extends base {

    public function select($table){

        $sql = "SELECT * FROM $table";
        $result = $this->connect()->query($sql);

        if($result->rowCount() > 0){

            while ($row = $result->fetch()){

                $data[] = $row;
            }

            return $data;
        }
    }



    public function insert($fields, $table){
        $implodeColumns = implode(', ',array_keys($fields));

        $implodePlaceholder = implode(", :",array_keys($fields));

        $sql = "INSERT INTO $table ($implodeColumns) VALUES (:".$implodePlaceholder.")";

        $stmt = $this->connect()->prepare($sql);

        foreach($fields as $key => $value){
            $stmt->bindValue(':'.$key,$value);
        }
        $stmtExec = $stmt->execute();
        return $stmtExec;

    }


    public function selectOne($table, $id_table, $id){
        $sql = "SELECT * FROM $table WHERE $id_table = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":id",$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

   

    public function update($fields,$table, $id_table,$id){

        $st = "";
        $counter = 1;
        $total_fields = count($fields);
        foreach($fields as $key => $value){
            if($counter === $total_fields){
                $set = "$key = :".$key;
                $st =   $st.$set;
            } else{
                $set = "$key = :".$key.", ";
                $st = $st.$set;
                $counter++;
            }
        }

        $sql = "";
        $sql.= "UPDATE $table SET ".$st;
        $sql.= " WHERE $id_table = ".$id;

        $stmt = $this->connect()->prepare($sql);

        foreach ($fields as $key => $value){
            $stmt->bindValue(':'.$key, $value);
        }

        $stmtExec = $stmt->execute();
        return $stmtExec;
    }

    public function supprime($table, $id_table, $id){
        $sql = "DELETE FROM $table WHERE $id_table = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":id",$id);
        $stmt->execute();
    }

    
}





    

