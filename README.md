# Laravel 11 Example using Blade templates

This project is just a simple Laravel 11 example project using Blade templates.

At this point only 3 views are working:
* layout
* bicycles/index
* bicycles/create

There are some validation as well, and also some CSS using vite.

## Getting Started

Try the tutorials recommended at the end of this README.md

## Prerequisites

You need a working environment with:
* [Laragon](https://laragon.org/download/) - TLaragon is a universal development environment. It has many features to make you more productive.
* [Git](https://git-scm.com) - You can install it from https://git-scm.com/downloads.
* [Laravel](https://laravel.com/) - A PHP framework.

## General Installation instructions

First you need an environment with Laragon.

Then clone this project:
```
git clone https://github.com/tcrurav/LaravelCRUDWithBlade.git
```

create a .env file copying the .env.example file:
```
cp .env.example .env
```

Create a Key for your project: (if the field APP_KEY in .env file is empty)
```
php artisan key:generate
```

If you check now your .env file you will see a new Key in APP_KEY.

Now install all dependencies and start your dev server:
```
composer install
php artisan serve
```

Enjoy!!!

## Steps for a simple validation

Follow this steps for a simple validation:

- STEP 1: In a view, i.e. resources/views/bicycles/create.blade.php, take a look to the following lines:

```
<input type="text" name="brand" class="form-control" id="brand" placeholder="Enter bicycle brand" value="{{ old('brand') }}">
@error('brand')
    <span class="error">{{ $message }}</span><br>
@enderror
```

- STEP 2: In a controller, i.e. app/Http/Controllers/BicycleController.php, take a look to the following lines:

```
public function store(Request $request)
{
    $validated = $request->validate([
        'brand' => 'required|min:3',
        'model' => 'required',
    ], [
        'brand.required' => 'Brand is mandatory in a bicycle.',
        'brand.min' => 'Bicycle brand must be at least 3 characters long.',
        'model.required' => 'Model is mandatory in a bicycle.',
    ]);

    $bicycle = new Bicycle;
    $bicycle->brand = $request->input('brand');
    $bicycle->model = $request->input('model');
    $bicycle->save();

    return redirect()->route('bicycles.index');
}
```

## Steps for using CSS with vite in Laravel 9 and upper using vite

Follow this steps for creating styles:

- STEP 1: Create some styles, i.e. resources/css/app.css, take a look to the following lines:

```
.error {
  background-color: red;
  color: antiquewhite;
}
```

- STEP 2: In a javascript file, i.e. resources/js/app.js, take a look to the following lines:

```
import '../css/app.css';
```

- STEP 3: In a view, i.e. resources/views/bicycles/create.blade.php, take a look to the following lines:

```
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

- STEP 4: Install the dependencies in package.json, and run vite:

```
npm install
npm run vite
```

Now you should be able to see the styles working in your view, i.e. resources/views/bicycles/create.blade.php

Enjoy!!!

## Built With

* [Visual Studio Code](https://code.visualstudio.com/) - The Editor used in this project
* [Laragon](https://laragon.org/download/) - TLaragon is a universal development environment. It has many features to make you more productive.
* [Git](https://git-scm.com) - You can install it from https://git-scm.com/downloads.
* [Laravel 11](https://laravel.com/) - A PHP framework.
* [PHP 8.3 for Windows 11](https://windows.php.net/download/) - PHP 8.3 for Windows 11 integrated in Laragon.

## Acknowledgments

* https://www.youtube.com/watch?v=a-X7khez-wI. Cómo instalar Laragon en Windows (Laravel 11) - Curso Laravel 11 desde cero.
* https://www.youtube.com/channel/UC-R0zZjpkeoLHPxVTHolVHw/videos. All videos about Laravel 11 from Aprendible.
* https://www.sitepoint.com/laravel-project-setup-beginners-guide/. Laravel beginners guide. Very good and simple to start.
* https://github.com/savanihd/Laravel-11-CRUD-Operation. Great Github repository to learn about Laravel 11.
* https://laravel.com/docs/11.x/validation. Laravel 11 validation.