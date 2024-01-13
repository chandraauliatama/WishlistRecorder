<?php

namespace App\Enums;

class MerchantEnum
{
    const TOKOPEDIA = 1;

    const SHOPEE = 2;

    const BLIBLI = 3;

    const LAZADA = 4;

    public static function merchantString(int $merchantId): string
    {
        $arrayMerchants = MerchantEnum::arrayMerchants();

        return in_array($merchantId, [1,2,3,4]) ? $arrayMerchants[$merchantId] : "No merchant for this id";
    }
    
    public static function arrayMerchants(): array
    {
        return [
            1 => 'Tokopedia',
            2 => 'Shopee',
            3 => 'Blibli',
            4 => 'Lazada',
        ];
    }
}