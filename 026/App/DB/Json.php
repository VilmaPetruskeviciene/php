<?php

namespace App\DB;

class Json implements DataBase{

    private $data, $file;
    static private $obj;


    static public function connect($file = 'data')
    {
        return self::$obj ?? self::$obj = new self($file);
    }

    private function __construct($file)
    {
        $this->file = $file;
        if (!file_exists(DIR . 'App/DB/'.$this->file.'.json')) {
            file_put_contents(DIR . 'App/DB/'.$this->file.'.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents(DIR . 'App/DB/'.$this->file.'.json'), 1);
    }

    private function getId() : int
    {
        if (!file_exists(DIR . 'App/DB/'.$this->file.'_id.json')) {
            file_put_contents(DIR . 'App/DB/'.$this->file.'_id.json', json_encode(0));
        }
        $id = json_decode(file_get_contents(DIR . 'App/DB/'.$this->file.'_id.json'));
        $id++;
        file_put_contents(DIR . 'App/DB/'.$this->file.'_id.json', json_encode($id));
        return $id;
    }

    public function __destruct()
    {
        file_put_contents(DIR . 'App/DB/'.$this->file.'.json', json_encode($this->data));
    }

    public function create(array $animalData) : void
    {
        $animalData['id'] = $this->getId();
        $this->data[] = $animalData;
    }

    public function update(int $animalId, array $animalData) : void
    {
        foreach ($this->data as &$animal) {
            if ($animal['id'] == $animalId) {
                $animalData['id'] = $animalId;
                $animal = $animalData;
                break;
            }
        }
    }

    public function delete(int $animalId) : void
    {
        foreach ($this->data as $index => $animal) {
            if ($animal['id'] == $animalId) {
                unset($this->data[$index]);
                $this->data = array_values($this->data);
                break;
            }
        }
    }

    public function show(int $animalId) : array
    {
        foreach ($this->data as $animal) {
            if ($animal['id'] == $animalId) {
                return $animal;
            }
        }
    }

    public function showAll() : array 
    {
        return $this->data;
    }

}