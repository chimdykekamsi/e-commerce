<?php
// WORLD BRAIN TECHNOLOGY LTD.
//
// This program was directly written by WORLD BRAIN TECHNOLOGY LTD.
// CEO - Godson Pius
// Program Director - Godson Pius
// Department - PHP Department
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


require_once "config.php";

function validateQuery($statement)
{
    global $link;

    $sql = "$statement";
    $query = mysqli_query($link, $sql);

    if ($query) {
        return true;
    } else {
        return false;
    }

}


function returnQuery($statement)
{
    global $link;

    $sql = "$statement";
    $query = mysqli_query($link, $sql);

    if ($query) {
        return $query;
    } else {
        return false;
    }

}

function executeQuery($statement)
{
    global $link;

    $sql = "$statement";
    $query = mysqli_query($link, $sql);

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        return $row;
    } else {
        return false;
    }
}


function encrypt($password) {
    $initialEncryption = md5($password);
    $finalEncryption = sha1($initialEncryption);

    return $finalEncryption;
}

function decrypt($dbpass, $password) {
    $initialEncryption = md5($password);
    $finalEncryption = sha1($initialEncryption);

    if ($dbpass === $finalEncryption) {
        return true;
    }
}

function fetch($table) {
    $sql = "SELECT * FROM $table";
    $query = returnQuery($sql);

    if ($query) {
        return $query;
    } else {
        return false;
    }
}

function fetchAll($table, $preferredOrder = null, $limit1 = null, $limit2 = null) {

    if (!is_null($limit1) && !is_null($limit2) && !is_null($preferredOrder)) {
        $sql = "SELECT * FROM $table ORDER BY $preferredOrder ASC LIMIT $limit1, $limit2";
    } else {
        $sql = "SELECT * FROM $table";
    }
    $result = returnQuery($sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function fetchAllDesc($table, $preferredOrder = null, $limit1 = null, $limit2 = null) {

    if (!is_null($limit1) && !is_null($limit2) && !is_null($preferredOrder)) {
        $sql = "SELECT * FROM $table ORDER BY $preferredOrder DESC LIMIT $limit1, $limit2";
    } else {
        $sql = "SELECT * FROM $table";
    }
    $result = returnQuery($sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function fetchAllWhere($table, $where, $whereValue, $orderBy, $limit = null, $limit2 = null) {

    $sql = "SELECT * FROM $table WHERE $where = $whereValue ORDER BY $orderBy DESC LIMIT $limit, $limit2";
    $result = returnQuery($sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function where($table, $where, $whereValue, $limit = null) {
    if (!is_null($limit)) {
        $sql = "SELECT * FROM $table WHERE $where = $whereValue LIMIT $limit";
    } else {
        $sql = "SELECT * FROM $table WHERE $where = $whereValue";
    }
    $result = returnQuery($sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function whereQuote($table, $where, $whereValue, $limit = null) {
    if (!is_null($limit)) {
        $sql = "SELECT * FROM $table WHERE $where = '$whereValue' LIMIT $limit";
    } else {
        $sql = "SELECT * FROM $table WHERE $where = '$whereValue'";
    }
    $result = returnQuery($sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function getTotal($table, $optional = null, $optionValue = null) {
    if (!is_null($optional) && !is_null($optionValue)) {
        $sql = "SELECT * FROM $table WHERE $optional = $optionValue";
    } else {
        $sql = "SELECT * FROM $table";
    }
    $result = returnQuery($sql);

    if ($result) {
        $total = mysqli_num_rows($result);
        return $total;
    } else {
        return false;
    }

}

function getTotalQuote($table, $optional = null, $optionValue = null) {
    if (!is_null($optional) && !is_null($optionValue)) {
        $sql = "SELECT * FROM $table WHERE $optional = '$optionValue'";
    } else {
        $sql = "SELECT * FROM $table";
    }
    $result = returnQuery($sql);

    if ($result) {
        $total = mysqli_num_rows($result);
        return $total;
    } else {
        return false;
    }

}

function blockUrlHackers($url, $user) {
    if (!isset($user)) {
        redirect_to($url);
    }
}

function getAdmin($id) {
    $sql = "SELECT * FROM admins WHERE admin_id = $id";
    $result = returnQuery($sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function selectSearch($field, $whereValue, $input) {

    $sql = "SELECT * FROM $field WHERE $whereValue LIKE '%$input%'";
    $result = returnQuery($sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
    return false;
}

function searchTotal($field, $whereValue, $input) {

    $sql = "SELECT * FROM $field WHERE $whereValue LIKE '%$input%'";
    $result = returnQuery($sql);

    if ($result) {
        $total = mysqli_num_rows($result);
        return $total;
    }
    return false;
}

function selectInterestedProps() {
    $sql = "SELECT property_id FROM clients";
    $result = returnQuery($sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
    return false;
}

function check_duplicate($table, $field, $sanitized_value)
{
    $sql = "SELECT * FROM $table WHERE $field = '$sanitized_value'";
    $result = executeQuery($sql);

    if ($result) {
        return true;
    }return false;
}

// For Deleting Actions..
function delete($table, $field, $id) {

    $sql = $sql = "DELETE FROM `$table` WHERE $field = $id";
    $result = validateQuery($sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

function getOtherBooksAsc($table, $where, $value, $order, $limit) {

    $sql = "SELECT * FROM $table WHERE $where <> '$value' ORDER BY $order ASC LIMIT $limit";
    $result = returnQuery($sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
    return false;

}

function getOtherBooksDesc($table, $where, $value, $order, $limit) {

    $sql = "SELECT * FROM $table WHERE $where <> '$value' ORDER BY $order DESC LIMIT $limit";
    $result = returnQuery($sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
    return false;

}

function getTotalBookExc($table, $optional = null, $optionValue = null) {
    if (!is_null($optional) && !is_null($optionValue)) {
        $sql = "SELECT * FROM $table WHERE $optional <> $optionValue";
    } else {
        $sql = "SELECT * FROM $table";
    }
    $result = returnQuery($sql);

    if ($result) {
        $total = mysqli_num_rows($result);
        return $total;
    } else {
        return false;
    }

}

function HUMAN_DATE($timestamp) {
    return date("d F, Y", strtotime($timestamp));
}