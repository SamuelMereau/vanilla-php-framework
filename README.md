# vanilla-php-framework
Super basic, PHP-based framework for quick and simple-to-setup websites.

## Installation

Requirements: 
* PHP 7.4
* NPM
* Composer

Using something like [Laravel Homestead](https://laravel.com/docs/9.x/homestead#installation-and-setup) is recommended for local development, however not necessary.

Clone repository to local system
```bash
$ git clone https://github.com/SamuelMereau/vanilla-php-framework
```

Install dependencies
```
$ npm i
$ composer install

$ npm run dev
```

Finally, rename `.env.example` to `.env`.

You're ready to go!

## Usage

Every page for your site is stored under the `pages` directory. To initialise a page, simply:

1. Create a new folder underneath the `pages` directory with the following structure:

   ```
   page_name  
    │   index.php  
    │      
    └─── templates
    │        │   template_name.html.php 
    │        │   ...      
    │      
    └─── img (optional)
    │        │   img_name.(jpg/png/gif/svg)
    │        │   ...    
    ```
2. Within the `index.php` file, include all templates you want to display

    ```php
    <?php

    $pageTitle = "My Page";
    $metaDescription = "Short summary of text content";

    /**
    * ==============================
    *  Page Middleware
    * ==============================
    */
    ob_start();

    include __DIR__."/templates/template_name.html.php";

    $output = ob_get_clean();

    include "../app/Global/layout.html.php";
    ```
    Within the basic PHP buffer, templates can easily be conditionally loaded (e.g displaying a success message for a form when submitted).


2. Add the page to the page directory under `app/PageDirectory.json`

    ```json
    {
        "page_name" : "/url_slug"
    }
    ```

    This is used primarily by the `URL` class, which allows you to update the slug of a page in one location and immediately update all links to that page (within the site).

3. Finally, create a Controller class for the page to render the view under `app/Controllers`. Ensure the name of the Controller file is the same as your page name.

    ```php
    <?php

    namespace App\Controllers;

    use VanillaPHP\Helpers\Params;
    use VanillaPHP\Helpers\View;

    class page_name
    {
        public function index()
        {
            return View::render('page_name', []);
        }
    }
    ```

    If your page were to interact with a database, this is where you would do so. 

## Contributing

You're welcome to contribute to this repository if you wish.

## License

[MIT](https://choosealicense.com/licenses/mit/)



