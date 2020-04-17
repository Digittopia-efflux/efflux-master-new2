<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBudgetToAdSet extends Migration {
 public function up() {
  Schema::table('efflux_entourage.FbAdSet', function (Blueprint $table) {
   $table->double('budget');
  });
 }
 public function down() {
  Schema::table('efflux_entourage.FbAdSet', function (Blueprint $table) {
   $table->$table->dropColumn('budget');
  });
 }
}