<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pdvs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('phone');
            $table->string('url');
            $table->string('logo');
            $table->string('main_color');
            $table->timestamps();
        });

        DB::table('pdvs')->insert([
            [
                'name' => 'Services',
                'address' => 'Cualquier PDV',
                'city' => '-',
                'state' => '-',
                'zip' => '-',
                'phone' => '-',
                'url' => '-',
                'logo' => '-',
                'main_color' => '#000000'
            ],
            [
                'name' => 'Freddo',
                'address' => 'Blvd. Adolfo Lopez Mateos 1817 - 301',
                'city' => 'Ciudad de Mexico',
                'state' => 'CDMX',
                'zip' => '01600',
                'phone' => '55 5555 5555',
                'url' => 'https://freddo.com.mx',
                'logo' => 'freddo.png',
                'main_color' => '#CD9D29'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdvs');
    }
};
