<?php

namespace App\DB;

class Json implements DataBase {

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

    public function __destruct()
    {
        file_put_contents(DIR . 'App/DB/'.$this->file.'.json', json_encode($this->data));
    }

    public function getId() : int
    {
        if (!file_exists(DIR . 'App/DB/'.$this->file.'_id.json')) {
            file_put_contents(DIR . 'App/DB/'.$this->file.'_id.json', json_encode(0));
        }
        $id = json_decode(file_get_contents(DIR . 'App/DB/'.$this->file.'_id.json'));
        $id++;
        file_put_contents(DIR . 'App/DB/'.$this->file.'_id.json', json_encode($id));
        return $id;
    }

    public function newIban()
    {
        $ibanNumber = 'LT';
        for ($i = 0; $i < 18; $i++) {
            $number = rand(0, 9);
            $ibanNumber .= $number;
        }
        return $ibanNumber;
    }

    public function create(array $userData) : void
    {
        $userData['id'] = $this->getId();
        $userData['iban'] = $this->newIban();
        $userData['likutis'] = 0;
        $this->data[] = $userData;
    }

    public function update(int $userId, array $userData) : void
    {
        foreach ($this->data as &$user) {
            if ($user['id'] == $userId) {
                $userData['id'] = $userId;
                $user['likutis'] = $userData['likutis'];
                break;
            }
        }
    }

    public function delete(int $userId) : void
    {
        foreach($this->data as $key => $user) {
            if ($user['id'] == $userId) {
                //var_dump($userId);
                unset($this->data[$key]);
                $this->data = array_values($this->data);
                break;       
            }
        } 
    }

    public function show(int $userId) : array
    {
        foreach ($this->data as $user) {
            if ($user['id'] == $userId) {
                return $user;
            }
        }
        return [];
    }

    public function showAll() : array
    {
        usort($this->data, 
            function ($a, $b)
            {return $a['pavarde'] <=> $b['pavarde'];
            });
        return $this->data;
    }
}