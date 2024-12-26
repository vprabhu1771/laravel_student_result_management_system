<?php 

namespace App\Enums;

enum Gender: string
 {
    case MALE = "MALE";

    case FEMALE = "FEMALE";

    case OTHERS = "OTHERS";
    
    public static function getValues(): array
    {
        return array_column(Gender::cases(), 'value');
    }
    
    public static function getKeyValues(): array
    {
        return array_column(Gender::cases(), 'value','key');        
    }
}