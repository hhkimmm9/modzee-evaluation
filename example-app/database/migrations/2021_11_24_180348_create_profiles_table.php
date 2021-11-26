<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('bio')->nullable();
            $table->string('profile_picture')->nullable();
            $table->timestamps();
        });

        // Sample data - easy to rollback and test!
        DB::insert(
            'INSERT INTO profiles (name, phone, email, bio, profile_picture) VALUES (?, ?, ?, ?, ?)',
            [
                "Nick Reynolds",
                "555-555-5555",
                "nick.reynolds@domain.co",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
                "img/profile.jpg"
            ]
        );

        DB::insert(
            'INSERT INTO profiles (name, phone, email, bio, profile_picture) VALUES (?, ?, ?, ?, ?)',
            [
                "Harrison Kim",
                "204-588-7754",
                "hsookim90@gmail.com",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
                "img/profile.jpg"
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
        Schema::dropIfExists('profiles');
    }
}
