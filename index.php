<?php
require_once 'Person.php';
require_once 'PersonRegistry.php';
$registry = new PersonRegistry('storage.csv');
//$person = new Person();
$registry->loadPersons();
$registry->setPersons();
$registry->savePersonToCSV();
?>

    <html lang="en">
    <body>
    <h1>Person Registry</h1>
    <form action="/" method="post">

        <label for="name">Name</label>
        <input type="text" name="name" id="name"/>

        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname"/>

        <label for="personID">PersonID</label>
        <input type="text" name="personID" id="personID"/>

        <label for="address">Address</label>
        <input type="text" name="address" id="address"/>

        <button type="submit">Submit</button>

    </form>

    <form action="/" method="post">
        <label for="search">Search for Person by the Person ID</label>
        <input type="text" name="search" id="search"/>
        <button type="submit">Submit</button>
        <?php echo $registry->searchPerson(); ?>
    </form>

    </body>
    </html>
<?php

?>