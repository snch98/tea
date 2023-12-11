<?php
function listKindsOfTeas($conn)
{
    $sql = "SELECT tea_kind FROM kinds_of_teas";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $kindName = $row["tea_kind"];
        $linkParts = explode(" ", $kindName);
        $linkName = $linkParts[0] . $linkParts[1];

        echo "<a href='$linkName.php' target='_blank'>" . $kindName . "<a>";
    }
}

function listVarietiesOfTeas($conn)
{
    $sql = "SELECT variety_name FROM tea_varieties";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $varietyName = $row["variety_name"];

        echo "<li>" . $varietyName . "</li>";
    }
}

function listInventoryOfTeas($conn, $teaKind = "all")
{
    $teaKinds = ["all" => 0, "black" => 1, "green" => 2, "exotic" => 3];

    $teaKindId = $teaKinds[$teaKind] ?? 0;

    $sql = "SELECT 
    i.id, i.is_available, i.quantity_in_stock, i.last_restock_date,
    v.variety_name, v.cost_per_unit, v.unit, v.kind_id, v.picture_name, v.description,
    k.tea_kind,
    c.country_name
    FROM tea_inventory i 
    JOIN tea_varieties v ON i.tea_id=v.variety_id 
    JOIN kinds_of_teas k ON v.kind_id=k.id 
    JOIN countries_of_origin c ON v.origin_id=c.country_id";

    $whereClause = " WHERE v.kind_id = '$teaKindId'";

    if ($teaKindId) {
        $sql = $sql . $whereClause;
    }

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $idAvailable = $row["is_available"];
        $quantity = $row["quantity_in_stock"];
        $restockDate = $row["last_restock_date"];

        $varietyName = $row["variety_name"];
        $cost = $row["cost_per_unit"];
        $unit = $row["unit"];
        $kindId = $row["kind_id"];
        $pictureName = $row["picture_name"];
        $description = $row["description"];

        $teaKind = $row["tea_kind"];

        $countryName = $row["country_name"];


        echo "<section class='product-card' id='$id'>
        <img src='media/tea-varieties/$pictureName.png' alt='$varietyName'>

        <div class='text-container'>
            <h2>$varietyName</h2>

            <p class='description'>$description</p>

            <div class='details'>
                <p>Kind: <span>$teaKind</span></p>
                <p>Country of origin: <span>$countryName</span></p>
                <p>Quantity: <span>$quantity</span></p>
                <p>Last restock: <span>$restockDate</span></p>
            </div>
            <p class='cost'>Cost: <span>$cost$</span> per $unit</p>
        </div>

    </section>";
    }
}
?>