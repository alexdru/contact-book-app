<?php

    $pdo = new PDO('sqlite:contacts.db');

    $statement = $pdo->query("SELECT * FROM contacts");

    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    print_r($rows);