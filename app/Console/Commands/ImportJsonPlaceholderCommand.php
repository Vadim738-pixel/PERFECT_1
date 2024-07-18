<?php

namespace App\Console\Commands;

use App\Components\ImportDataClient;
use App\Models\Post;
use Illuminate\Console\Command;

class ImportJsonPlaceholderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:json-placeholder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get data from json placeholder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       // return 0;

       // dd(11111111111);

        $import = new ImportDataClient();
        $response = $import->client->request('GET',"posts");
        $data = json_decode($response->getBody()->getContents());

        foreach ($data as $item)
        {
           // dd($item ->id);

            Post::firstOrCreate([
                'title' => $item->title,
                'content' => $item->body,
                'category_id' => 2,

            ]);
        }
        dd('finish');
    }
}
