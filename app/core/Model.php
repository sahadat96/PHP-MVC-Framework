<?php

// main model class

class Model
{
    use Database;
    protected $table = 'users';
    protected $limit = 10;
    protected $offset = 0;

    public function where($data, $not_data = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($not_data);
        $query = " SELECT * FROM {$this->table} WHERE ";  

        foreach($keys as $key)
        {
           $query .= $key . " = :" . $key . " AND ";
        }

        foreach($keys_not as $key)
        {
           $query .= $key . " != :" . $key . " AND ";
        }

        $query = trim($query, " AND ");

        $query .= " LIMIT {$this->limit} OFFSET {$this->offset} ";
        $data = array_merge($data, $not_data);

        return $this->query($query, $data);
    }

    public function first($data, $not_data)
    {
        
    }

    public function insert($data)
    {

    }

    public function update($id, $data, $id_column = 'id')
    {

    }

    public function delete($id, $id_column = 'id')
    {

    }
}