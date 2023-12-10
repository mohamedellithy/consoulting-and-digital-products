<?php

namespace App\Console\Commands;

use App\Models\Setting;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ConverterCurrency extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:convertor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $to     = 'OMR';
        $from   = 'USD';
        $amount = 1;
        $apikey = "12d9032148bb3c169a0631e0579b7310";
        $response = Http::withOptions([
            'verify' => true
        ])->get("http://data.fixer.io/api/latest?access_key={$apikey}&symbols={$to}&base={$from}");

        if($response->successful()):
            $result = $response->json();
            if($result['success'] == true):
                $value  = round($result['rates'][$to],3);
                Setting::updateOrCreate([
                    'name' => 'currency_converter'
                ],[
                    'value'=> $value
                ]);
            endif;
        endif;
        return Command::SUCCESS;
    }
}
