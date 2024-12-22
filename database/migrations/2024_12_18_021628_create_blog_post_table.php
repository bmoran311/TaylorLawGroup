<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $casts = [
        'published_date' => 'datetime:Y-m-d',
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
           Schema::create('blog_post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->longText('content');
            $table->foreignId('blog_category_id')->constrained('blog_category')->onDelete('cascade');
            $table->string('tags');
            $table->string('featured_image')->nullable();
            $table->timestamp('published_date')->useCurrent();
            $table->boolean('is_featured')->default(false);
            $table->boolean('visibility')->default(false);
            $table->string('seo_title')->nullable();
            $table->string('seo_meta_description')->nullable();
            $table->integer('firm_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_post');
    }
};
