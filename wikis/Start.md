# Startseite

# Verdammt lange Überschrift die so keiner schreiben würde
# Rindfleischettikettierungsaufgabenüberwachungsübertragungsgesetz

##### Wir haben kein Problem

-------------------------
 
MD Syntax ist nicht schwer (Edit: fuck es ist doch schwer (Edit: Ok nein doch nicht))

Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nulla sed eveniet earum perspiciatis libero praesentium non, dolor ad a aspernatur autem, fugiat quod impedit voluptatibus! Ullam, ipsa earum. Accusantium minima excepturi voluptate optio illum! Placeat reprehenderit explicabo odit corporis qui similique, a culpa animi eveniet reiciendis laborum quod repellat odio maiores quibusdam voluptates, sequi distinctio tenetur iste, recusandae veritatis eum vel. Similique laborum quae iste doloribus, exercitationem quam nemo, dignissimos explicabo expedita corrupti soluta recusandae odio, molestias non quis.

| Tabelle  | Value  |
| :------- | -----: |
| Tabellen | sind   |
| nicht    | schwer |

| Tabelle  | Value  | Tabelle  | Value  | Tabelle  | Value  | Tabelle  | Value  | Tabelle  | Value  |
| :------- | -----: | :------- | -----: | :------- | -----: | :------- | -----: | :------- | -----: |
| Tabellen | sind   | Tabellen | sind   | Tabellen | sind   | Tabellen | sind   | Tabellen | sind   |
| nicht    | schwer | nicht    | schwer | nicht    | schwer | nicht    | schwer | nicht    | schwer |

[Pokenews Link](https://pokenews.diafischchen.net/)

```php
$c = new Parsedown;
echo $c->text("## Hello Parsedown!");
```

![pokenews logo](https://pokenews.diafischchen.net/images/articles/61e04fe033e175.65199554.png)

---------------------------------------------


## Überschrift

------------------------------

1. First item
2. Second item
3. Third item
4. Fourth item 

- First item
- Second item
- Third item
    - Indented item
    - Indented item
- Fourth item 

sdfsdf

> Dorothy followed her through many of the beautiful rooms in her castle.
> oh yeah
> > Dorothy followed her through many of the beautiful rooms in her castle.

> #### The quarterly results look great!
>
> - Revenue was off the chart.
> - Profits were higher than ever.
>
>  *Everything* is going according to **plan**.

------------------------------

# Code

------------------------------

Inline Code `new View` marks something

```php
$new = new View;
$new->parsedown();

$new->exit();

if ($new->exit) {
    $nothing->willHappen();
}
```


```js
function animateFolderIn(folder, additionalHeight = 0) {
    // animate in
    folder.classList.add('active')
    folder.querySelector('.folder-items').style.maxHeight = '0px'

    // if subdirectory add additional space
    if (folder.closest('.folder-items') !== null) {
        animateFolderIn(folder.closest('.folder-items').closest('.folder'), folder.querySelector('.folder-items').scrollHeight)
    }

    setTimeout(() => {
        folder.querySelector('.folder-items').style.maxHeight = (folder.querySelector('.folder-items').scrollHeight + additionalHeight) + 'px'
    }, 5)
}

function animateFolderOut(folder) {
    // animate out
    folder.querySelector('.folder-items').style.maxHeight = '0px'

    setTimeout(() => {
        folder.classList.remove('active')
    }, 300)
}
```