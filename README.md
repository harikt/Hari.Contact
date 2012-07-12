This is a sample project, just to demonstrate a Vendor.Package in Aura. Have a look into the `config/default.php`. Just drop this package in package folder of system folder.

# Requirements 
a ) PHP 5.4
b ) Aura system
c ) Zend Framework 1 for we are creating forms. Eventually will be removed.
Keep ZF1 in include folder of aura framework folder.

# Running Server:

Now you can run your development server via 
 
    $php package/Aura.Framework/cli/server

Normally the server will show a message like `Starting the Aura development server @ http://localhost:8000/`, and point it to `http://localhost:8000/contact` . Feel free to change the route in `config/default.php` according to your need.


    ├── config
    ├── include
    ├── package
    │   ├── Aura.Autoload
    │   ├── Aura.Cli
    │   ├── Aura.Di
    │   ├── Aura.Framework
    │   ├── Aura.Http
    │   ├── Aura.Marshal
    │   ├── Aura.Router
    │   ├── Aura.Signal
    │   ├── Aura.Sql
    │   ├── Aura.View
    │   └── Aura.Web
    ├── tmp
    └── web
        └── cache
        |--index.php // document root

Any questions shoot a tweet to @harikt or in #auraphp channel in irc.freenode.org