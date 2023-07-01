<?php

class GeneralController
{

    function getPaymentAddress($conn, $coin)
    {
        $items = array();

        $query = "SELECT * FROM method WHERE coin ='$coin'";

        $results = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($results)) {
            $items[] = $row;
        }
        return $items;
    }
    function getPaymentInvoice($conn)
    {
        $items = array();

        $query = "SELECT * FROM invoice ";

        $results = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($results)) {
            $items[] = $row;
        }
        return $items;
    }
}
