<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
public function up()
{
Schema::create('ads', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->string('start_date');
$table->string('end_date');
$table->string('status')->default('pending');
$table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
$table->foreignId('catagory_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
$table->timestamps();
});
}
public function down()
{
Schema::dropIfExists('ads');
}
}
