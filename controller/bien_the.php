<?php
function insertbienthe($name)
{
    $sql = "INSERT INTO bien_the(name) VALUES ('$name')";
    pdo_execute($sql);
}

function Onebienthe_name($name)
{
    $sql = "SELECT name FROM bien_the WHERE name like '% $name %'";
    return pdo_query_one($sql);
}
function all_bienThe()
{
    $sql = "SELECT * FROM bien_the";
    return pdo_query($sql);
}
