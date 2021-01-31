<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProductCreated implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function handle()
    {
        Product::create([
            'id' => $this->data['id'],
            'title' => $this->data['title'],
            'image' => $this->data['image'],
            'created_at' => $this->data['created_at'],
            'updated_at' => $this->data['updated_at'],
        ]);
    }
}
