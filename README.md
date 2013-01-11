# Library - Jelix-based web application

## Application's features

### Authentification

In order to consult the application, you MUST login.
When logged in as an administrator, you can consult the list of loaned books and the list of all the books.

The Authentification is managed thanks to the jelix plugin "jAuth". It checks the user information directly in the database through the jelix DAO "user".

### List of loaned books

You can consult the list of all loaned books. The list is the result of a query feteching all results from the table "loanbook".
Are displayed the name of the loaner and the title of the book he loaned.

### List of all books

You can consult the list of all the books from the table "book". Is displayed as well the author, thanks to the table "author" <br>
For each book, 2 links are available : 
* Modify : You can modify the book's informations. The author's name and firstname in the form are only displayed as readonly.
* Delete : You can delete the book from the database. When you try to delete an entry, a confirm popup appears in order to confirm your deletion.
  
> Note : you cannot delete a book which has been loaned by a user. Ask him (gently) to give it back, then proceed to the deletion.


## Application's UI

### Stylesheet

* The stylesheet provided by jelix hadn't been removed.
* Bootstrap had been added above and customize a little bit to fit the global application's UI. <br>
* A third one is present, style.css, in order to distinguish the CSS properties specifically asked by the project's tutor.

Those three stylesheets are located in the [...]jelix-www/design/ folder, as recommended by the framework's documentation. 

### Interaction - Javascript

Just like the stylesheets, the several js files (jelix, bootstrap, jQuery) had been added to the [...]jelix-www/design/ folder. <br>
A last javascript file had been added, script.js, just as the third stylesheet, in order to separate the function specifically asked by the project tutor.


## Online version

Please consult [the online version](<http://boyet.me/ITI4/ProjetDevWeb/Bibli/www/>)

> available user in oder to connect to the application : <br>
> login : sboyet, password : pass
