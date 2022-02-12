<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public $final_array = [];

    public function mount ($array, $key)
    {
        if(strpos($array, $key[0].'-') !== false)
        {
            if($key[1] === 'PP')
            {
                $this->final_array[$key[0]][$key[1]] += 1;
            }
            else if($key[1] === 'M')
            {
                $this->final_array[$key[0]][$key[1]] += 1;
            }
            else if($key[1] === 'G')
            {
                $this->final_array[$key[0]][$key[1]] += 1;
            }
            else
            {
                $this->final_array[$key[0]][$key[1]] += 1;
            }
        }
    }

    public function make(): array
    {
        $array_old = self::products;
        
        foreach($array_old as $array)
        {
            $key = explode('-', $array);
            $this->mount($array, $key);
        }

        return $this->final_array;
    }
}