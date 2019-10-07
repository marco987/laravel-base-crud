<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Comment;
use App\Post;

class AddForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('comments', function (Blueprint $table) {

          $table -> bigInteger('post_id') -> unsigned() -> index();
          $table -> foreign('post_id', 'post')
                 -> references('id')
                 -> on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('comments', function (Blueprint $table) {

          $table -> dropForeign('post');
          $table -> dropColumn('post_id');
        });
    }
}
