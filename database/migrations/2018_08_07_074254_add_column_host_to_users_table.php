<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnHostToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('hosts',255)->default('')->after('university');
            $table->text('hosts_information')->after('hosts');
            $table->string('status',20)->default('')->after('hosts_information');
            $table->boolean('courses')->default(false)->after('status');
            $table->string('deposit',100)->default('')->after('courses');
            $table->string('sa_approval',100)->default('')->after('deposit');
            $table->boolean('leave')->default(false)->after('sa_approval');
            $table->string('cf_registration',100)->default('')->after('leave');
            $table->text('notes1')->after('cf_registration');
            $table->text('notes2')->after('notes1');
            $table->dropColumn('gender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('hosts');
            $table->dropColumn('hosts_information');
            $table->dropColumn('status');
            $table->dropColumn('courses');
            $table->dropColumn('deposit');
            $table->dropColumn('sa_approval');
            $table->dropColumn('leave');
            $table->dropColumn('cf_registration');
            $table->dropColumn('notes1');
            $table->dropColumn('notes2');
            $table->enum('gender', array('F','M','Other',''))->default('');
        });
    }
}
