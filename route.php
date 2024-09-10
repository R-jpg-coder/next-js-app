Route::get('update_books_table', function(){
 Schema::table('books', function(Blueprint $table)
 {
 $table->string('title', 250)->change();
 });
 });