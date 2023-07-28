<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Page::updateOrCreate([
            'title'    => 'الرئيسية',
            'slug'     => 'home',
            'image'    => null,
            'content'  => '',
            'position' => 'header',
            'status'   => 'active'
        ]);

        Page::updateOrCreate([
            'title'    => 'المنتجات',
            'slug'     => 'shop',
            'image'    => null,
            'content'  => '',
            'position' => 'header',
            'status'   => 'active'
        ]);

        Page::updateOrCreate([
            'title'    => 'الخدمات',
            'slug'     => 'service',
            'image'    => null,
            'content'  => '',
            'position' => 'header',
            'status'   => 'active'
        ]);
    }
}
