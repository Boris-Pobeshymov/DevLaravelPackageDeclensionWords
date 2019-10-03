# DevLaravelPackageDeclensionWords
<h1>Installation</h1>

<pre>
composer require ztbpb/declension-words
</pre>

<h1>Usage examples</h1>
<h4>Russian</h4>
<pre>
    $num = 12;
    echo ztbpb\DeclensionWords\DeclensionWordsClass::ru($num, 'товар', 'товара', 'товаров') . PHP_EOL;
</pre>

<h5>Results</h5>
<pre>
12 товаров
</pre>

<h4>English</h4>
<pre>
    $num = 12;
    echo ztbpb\DeclensionWords\DeclensionWordsClass::en($num, 'item', 'items') . PHP_EOL;
</pre>

<h5>Results</h5>
<pre>
12 items
</pre>
