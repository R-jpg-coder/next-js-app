Route::get('update_books_table_2', function(){
 // creating the authors table...
 Schema::create('authors', function(Blueprint $table)
 {
 $table->increments('id');
 $table->string('first_name');
 $table->string('last_name');
 $table->timestamps();
 })