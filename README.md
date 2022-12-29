# Sure-Jobs

Online Job Board System - Laravel project

<p align="center">
  <img src="https://github.com/YasiruPriyadarshana/SureJobs/blob/main/public/images/home/homepage.png">
</p>

#links

https://colorhunt.co/

https://pixelied.com/editor?refId=7b002d3e-900a-454e-af35-0a7dc52aef77&toolRefId=94503d07-4881-40e3-a42f-3413c0a149c1

#useful commands

composer create-project laravel/laravel example-app

php artisan serve

php artisan make:controller PhotoController --resource
php artisan migrate
php artisan migrate:rollback
composer clear-cache
php artisan make:model Post -m

php artisan tinker
$post = new App\Models\Post 
$post->title="First title"
$post->excerpt="First long excerpt"
$post->content="my very first long content"
$post->image="images/tech1.jpg"
$post->save()

$post::find(1)
$post::all()
$post::first()
$post = Post::all()->first();
$post::get()

#use Illuminate\Support\Facades\DB;
#$post = DB::table('post')->get();

$post = new Post();

Post::create(['title'=>'Third title', 'excerpt'=>'Third long excerpt', 'content'=>'my very third long content', 'image'=>'images/tech3.jpg']);
Post::all()
Post::find(5)->delete();

dd($post);

@stack('scripts') //on layout page
@push('scripts')

<!-- Scripts -->

@endpush

#set configuration variables
create file_name.php file in config folder
config(['file_name.user_id' => $userid]);
$value = config('file_name');

#set global variables
config(['role' => 'company']);
$value = config('role');

#for relations between tables
