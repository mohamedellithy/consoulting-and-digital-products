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
        $to = 'OMR';
        $from = 'USD';
        $amount = 1;
        $response = Http::withOptions([
            'verify' => false
        ])->withHeaders([
            'apikey' => '12d9032148bb3c169a0631e0579b7310'
        ])->get("https://api.apilayer.com/fixer/convert?to={$to}&from={$from}&amount={$amount}");

        if($response->successful()):
            $result = $response->json();
            $value  = round($result['result'],3);
            Setting::updateOrCreate([
                'name' => 'currency_converter'
            ],[
                'value'=> $value
            ]);
        endif;
        return Command::SUCCESS;
    }
}
