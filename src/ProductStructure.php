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

    public function make(): array
    {
        $array_old = self::products;
        $final_array = [];

        foreach($array_old as $array)
        {
            $key = explode('-', $array);

            if(strpos($array, 'preto-') !== false)
            {
                if($key[1] === 'PP')
                {
                    $final_array['preto'][$key[1]] += 1;
                }
                else if($key[1] === 'M')
                {
                    $final_array['preto'][$key[1]] += 1;
                }
                else if($key[1] === 'G')
                {
                    $final_array['preto'][$key[1]] += 1;
                }
                else
                {
                    $final_array['preto'][$key[1]] += 1;
                }
            }

            if(strpos($array, 'branco-') !== false)
            {
                if($key[1] === 'PP')
                {
                    $final_array['branco'][$key[1]] += 1;
                }
                else if($key[1] === 'M')
                {
                    $final_array['branco'][$key[1]] += 1;
                }
                else if($key[1] === 'G')
                {
                    $final_array['branco'][$key[1]] += 1;
                }
                else
                {
                    $final_array['branco'][$key[1]] += 1;
                }
            }

            if(strpos($array, 'vermelho-') !== false)
            {
                if($key[1] === 'PP')
                {
                    $final_array['vermelho'][$key[1]] += 1;
                }
                else if($key[1] === 'M')
                {
                    $final_array['vermelho'][$key[1]] += 1;
                }
                else if($key[1] === 'G')
                {
                    $final_array['vermelho'][$key[1]] += 1;
                }
                else
                {
                    $final_array['vermelho'][$key[1]] += 1;
                }
            }

            if(strpos($array, 'azul-') !== false)
            {
                if($key[1] === 'PP')
                {
                    $final_array['azul'][$key[1]] += 1;
                }
                else if($key[1] === 'M')
                {
                    $final_array['azul'][$key[1]] += 1;
                }
                else if($key[1] === 'G')
                {
                    $final_array['azul'][$key[1]] += 1;
                }
                else
                {
                    $final_array['azul'][$key[1]] += 1;
                }
            }
        }

        return $final_array;
    }
}