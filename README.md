A sample contact form to show how to use Aura.Filter, Aura.Input with Aura.View. 

For a standalone version check https://github.com/harikt/form-example

You can install the package via composer

```json
    "hari/contact" : "dev-develop2"
```
    
to composer of system.

> Note as this is development preview you should add the minimum-stability flag.

The assets like css is rendered via the help of https://github.com/RobLoach/component-installer . So you need to set the configuration as below in composer.json.

```json
    "config": {
        "component-dir": "public/assets",
        "component-baseurl": "/assets"
    }
```

# Requirements 
a ) PHP 5.4
b ) Aura v2 Web Kernel

# Running Server:

Now you can run your development server and point it to contact page . `http://localhost:8000/contact` . 

If you have any questions get in touch with [Aura Community](http://auraphp.com/community)
