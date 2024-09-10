Schema::create('books', function(Blueprint $table)
 {
 $table->increments('id');
 $table->string('title');
 $table->integer('pages_count');
 $table->decimal('price', 5, 2);

 $table->text('description');
 $table->timestamps();
 });