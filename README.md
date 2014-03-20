## Introduction

A Simple Employee Form written in php. It accepts user inputs and returns sql queries as the end result.


## Features

* Specify the number of employees (index.php)
* Generate the employees form (start.php)
* Submit the form and return sql queries for insertion (save.php)

## Note
start.php submits to a blank window because of the target set to blank on line 14.
```
<form method="post" target="_blank" action="save.php">
```
To make it submit to the same page, alter that line to
```
<form method="post" target="_self" action="save.php">
```
or
```
<form method="post" action="save.php">
```


## Community

You can view our other [repositories](https://github.com/dhtml)
and our (php framework)[https://github.com/dhtml/dhtmlframework]
 We use the [dhtmlframework group](https://groups.google.com/forum/#!forum/dhtmlframework) for issues that are being tracked here on GitHub.

You can chat with us on facebook http://facebook.com/dhtml5 

## License

`dhtmlframework`'s code in this repo uses the MIT license, see our `LICENSE` file.
