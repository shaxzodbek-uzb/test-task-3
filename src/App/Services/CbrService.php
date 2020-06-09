<?php
namespace App\Services;

use App\Models\Currency;
use App\Contracts\DataProviderServiceContract;

class CbrService implements DataProviderServiceContract
{
    public function getData()
    {
        
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://www.cbr.ru/scripts/XML_daily.asp");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        try {
            
            $output = curl_exec($ch);

            curl_close($ch);
            $xml = new \SimpleXMLElement($output);
        } catch (\Throwable $th) {
            return false;
        }
        foreach ($xml->Valute as $currency){
            Currency::updateOrCreate([
                'code' => $currency->NumCode,
                'code_char' => $currency->CharCode,
                'name' => $currency->Name,
                'rate' => $currency->Value / $currency->Nominal
            ]);
        }
        return true;
    }
}