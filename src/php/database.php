<?php

    //Deleta Registros
    function DBDelete($table, $where = null){
        $where = ($where) ? " WHERE {$where}" : null;
        $query = "DELETE FROM {$table} {$where}";

        return DBExecute($query);
    }

    //Altera Registros
    function DBUpdate($table, array $data, $where = null){
        foreach($data as $key => $value){
            $fields[] = "{$key} = '{$value}'";
        }

        $fields = implode(', ', $fields);

        $where = ($where) ? " WHERE {$where}" : null;

        $query = "UPDATE {$table} SET {$fields} {$where}";

        return DBExecute($query);
    }

    //Ler Registros
    function DBRead($table, $params = null, $fields = '*' ){
        $params = ($params) ? " {$params}" : null;
        $query = "SELECT {$fields} FROM {$table}{$params}";

        $result = DBExecute($query);
        if(!mysqli_num_rows($result)){
            return false;
        } else {
            while($res = mysqli_fetch_assoc($result)){
                $data[] = $res;
            }
        }
        return $data;
    }

    // Grava Registros
    function DBCreate($table, array $data, $insertId = false){
        $data = DBEscape($data);

        $fields = implode(', ', array_keys($data));
        $values ="'".implode("', '", $data)."'";

        $query = "INSERT INTO {$table} (${fields}) VALUES ({$values})";

        return DBExecute($query, $insertId);
    }

    // Executa Querys
    function DBExecute($query, $insertId = false){
        $link = DBConnect();
        $result = @mysqli_query($link,$query) or die(mysqli_error($link));

        if($insertId){
            $result = mysqli_insert_id($link);
        }
        
        DBClose($link);

        return $result;
    }



?>