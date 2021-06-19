<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Supplier;
use App\Models\Customer;
use App\Models\Import;
use App\Models\Export;
use App\Models\Product;
use App\Models\Edetail;
use App\Models\Idetail;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User
        User::create([
            'name' => 'Duy Khoa',
            'email' => 'a@gmail.com',
            'password' => '123456789',
        ]);
        User::create([
            'name' => 'Mạnh Lộc',
            'email' => 'b@gmail.com',
            'password' => '123456789',
        ]);
        User::create([
            'name' => 'Công Minh',
            'email' => 'c@gmail.com',
            'password' => '123456789',
        ]);

        //Supplier
        Supplier::create([
            'name' => 'Văn Lưu',
            'email' => 'd@gmail.com',
            'phone' => '0123276398',
            'accountNumber' => '55558888777',
        ]);
        Supplier::create([
            'name' => 'Công Lộc',
            'email' => 'congloc@gmail.com',
            'phone' => '0123257893',
            'accountNumber' => '66669999444',
        ]);
        Supplier::create([
            'name' => 'Mạnh Lưu',
            'email' => 'manhluu@gmail.com',
            'phone' => '0123274231',
            'accountNumber' => '444555777888',
        ]);

        //Customer
        Customer::create([
            'name' => 'Mạnh Lưu',
            'address' => 'Bình Dương',
            'email' => 'manhluu@gmail.com',
            'phone' => '0123274231',
            'accountNumber' => '444555777888',
        ]);
        Customer::create([
            'name' => 'Văn Minh',
            'address' => 'Bình Thuận',
            'email' => 'vanminh@gmail.com',
            'phone' => '0123421347',
            'accountNumber' => '324346576788',
        ]);
        Customer::create([
            'name' => 'Duy Lộc',
            'address' => 'Hà Nội',
            'email' => 'duyloc@gmail.com',
            'phone' => '0123123125',
            'accountNumber' => '678798943232',
        ]);

        //Product
        Product::create([
            'name' => 'Nước Aquafina 5l',
            'unit' => 'Thùng',
            'amount' => 100,
            'photo' => 'https://cdn.tgdd.vn/Products/Images/2563/76509/bhx/nuoc-tinh-khiet-aquafina-5-lit-201910140954185442.jpg?fbclid=IwAR3aLdNQ36rcWLPO16rwb8u2_QuDGKMZX_tly9nya7H9CibY1aM7BfQWO-k',
            'priceIm' => 40000,
            'priceEx' => 45000,
        ]);
        Product::create([
            'name' => 'Nước Aquafina 1,5l',
            'unit' => 'Thùng',
            'amount' => 150,
            'photo' => 'https://salt.tikicdn.com/cache/w1200/ts/product/bd/7f/f3/a9594a99a5c8dc5d661adeff11f64350.JPG?fbclid=IwAR0RhLMTDiQZrXO3Qg7HbGLbS76uWUk9wAeYYutpxcDy0et6cOxMr_gK-Qk',
            'priceIm' => 30000,
            'priceEx' => 35000,
        ]);
        Product::create([
            'name' => 'Nước Aquafina 500ml',
            'unit' => 'Thùng',
            'amount' => 180,
            'photo' => 'https://i.pinimg.com/236x/b4/2e/8b/b42e8b9124a5f8cd8e21e8356ba0d367.jpg?fbclid=IwAR1NozvFva0K9FRXgVEvxZMw3qDSupEEiKJi37jWoaCBg0k02pBZ0199Ks4',
            'priceIm' => 20000,
            'priceEx' => 25000,
        ]);

        //Import
        Import::create([
            'date' => Carbon::now(),
            'supplier_id' => 2,
            'user_id' => 1,
            'success' => true,
        ]);
        Import::create([
            'date' => Carbon::yesterday(),
            'supplier_id' => 3,
            'user_id' => 2,
            'success' => true,
        ]);
        Import::create([
            'date' => Carbon::now(),
            'supplier_id' => 1,
            'user_id' => 3,
            'success' => true,
        ]);

        //Export
        Export::create([
            'date' => Carbon::now(),
            'customer_id' => 2,
            'user_id' => 1,
            'success' => true,
        ]);
        Export::create([
            'date' => Carbon::yesterday(),
            'customer_id' => 3,
            'user_id' => 2,
            'success' => true,
        ]);
        Export::create([
            'date' => Carbon::now(),
            'customer_id' => 1,
            'user_id' => 3,
            'success' => true,
        ]);

        //Import Detail
        Idetail::create([
            'product_id' => 1,
            'import_id' => 1,
            'amount' => 10,
        ]);
        Idetail::create([
            'product_id' => 2,
            'import_id' => 2,
            'amount' => 10,
        ]);
        Idetail::create([
            'product_id' => 3,
            'import_id' => 3,
            'amount' => 10,
        ]);

        //Export Detail
        Edetail::create([
            'product_id' => 1,
            'export_id' => 1,
            'amount' => 10,
        ]);
        Edetail::create([
            'product_id' => 2,
            'export_id' => 2,
            'amount' => 10,
        ]);
        Edetail::create([
            'product_id' => 3,
            'export_id' => 3,
            'amount' => 10,
        ]);
    }
}
