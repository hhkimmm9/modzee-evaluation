<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id');
            $table->string('title');
            $table->string('description');
            $table->string('img');
            $table->date('date');
            $table->boolean('featured')->default(false);
            $table->timestamps();

            $table->index('profile_id');
        });

        // Sample data - easy to rollback and test!
        DB::insert(
            'INSERT INTO albums (profile_id, title, description, img, date, featured) VALUES (?, ?, ?, ?, ?, ?)',
            [
                1,
                "Nandhaka Pieris",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img/landscape1.jpg",
                "2015-05-01",
                true
            ]
        );
        DB::insert(
            'INSERT INTO albums (profile_id, title, description, img, date, featured) VALUES (?, ?, ?, ?, ?, ?)',
            [
                1,
                "New West Calgary",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img/landscape2.jpg",
                "2016-05-01",
                false
            ]
        );
        DB::insert(
            'INSERT INTO albums (profile_id, title, description, img, date, featured) VALUES (?, ?, ?, ?, ?, ?)',
            [
                1,
                "Australian Landscape",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img/landscape3.jpg",
                "2015-02-02",
                false
            ]
        );
        DB::insert(
            'INSERT INTO albums (profile_id, title, description, img, date, featured) VALUES (?, ?, ?, ?, ?, ?)',
            [
                1,
                "Halvergate Marsh",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img/landscape4.jpg",
                "2014-04-01",
                true
            ]
        );
        DB::insert(
            'INSERT INTO albums (profile_id, title, description, img, date, featured) VALUES (?, ?, ?, ?, ?, ?)',
            [
                1,
                "Rikkis Landscape",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img/landscape5.jpg",
                "2010-09-01",
                false
            ]
        );
        DB::insert(
            'INSERT INTO albums (profile_id, title, description, img, date, featured) VALUES (?, ?, ?, ?, ?, ?)',
            [
                1,
                "Kiddi Kristjans Iceland",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img/landscape6.jpg",
                "2015-07-21",
                true
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
