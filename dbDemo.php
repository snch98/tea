<?php
$title = "DB demo";
include("php/includes/header.php");
// todo: display all data here
// todo: add relations picture

/*

13 - 19 ноября 
installed XAMPP
changed .html to .php
used include function
created DB (countries of origin, kinds of tea, tea inventory, tea varieties) with foreign key
(1,2,3,8)

20 - 26 ноября 
connected DB to website
displayed data from DB on main page using dropdown list (12 task)
improved overall structure of the DB

27 - 3 декабря 
added picture_name field to tea_varieties table
created combined search from all the 4 tables (SQL script)
displayed composite output from the search on main page (tea cards)
improved SQL script to display only specific kind of tea (black / etc.)

4 - 10 декабря
added users table to the DB
started implementing registration features
improved overall styles throough the application
added "Out of stock" banner to product card

11 - 17 декабря
done implementing registration feature
added password hashing feature
implemented login functionality
added saving user to session storage
added cookie saving
signin refactoring
started implementing user editing features (change name/email/pass)

18 - 22 декабря
implemented account edition
implemented account deletion
created DB demo
*/




?>
<main>
    <div>
        <img src="media/db-relations.png" alt="DB">
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>tea_kind</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT id, tea_kind FROM kinds_of_teas";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['tea_kind'] . "</td>
                </tr>";
                }
                ?>
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>tea_kind</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT country_id, country_name FROM countries_of_origin";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['country_id'] . "</td>
                            <td>" . $row['country_name'] . "</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th>variety_id</th>
                    <th>variety_name</th>
                    <th>cost_per_unit</th>
                    <th>unit</th>
                    <th>kind_id</th>
                    <th>origin_id</th>
                    <th>picture_name</th>
                    <th>description</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT 
                variety_id,
                variety_name,
                cost_per_unit,
                unit,
                kind_id,
                origin_id,
                picture_name,
                description
                FROM tea_varieties";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['variety_id'] . "</td>
                            <td>" . $row['variety_name'] . "</td>
                            <td>" . $row['cost_per_unit'] . "</td>
                            <td>" . $row['unit'] . "</td>
                            <td>" . $row['kind_id'] . "</td>
                            <td>" . $row['origin_id'] . "</td>
                            <td>" . $row['picture_name'] . "</td>
                            <td>" . $row['description'] . "</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>tea_id</th>
                    <th>is_available</th>
                    <th>quantity_in_stock</th>
                    <th>last_restock_date</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT 
                id,
                tea_id,
                is_available,
                quantity_in_stock,
                last_restock_date
                FROM tea_inventory";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['tea_id'] . "</td>
                            <td>" . $row['is_available'] . "</td>
                            <td>" . $row['quantity_in_stock'] . "</td>
                            <td>" . $row['last_restock_date'] . "</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th>user_id</th>
                    <th>username</th>
                    <th>password</th>
                    <th>created_at</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT 
                user_id,
                username,
                password,
                created_at
                FROM users";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['user_id'] . "</td>
                            <td>" . $row['username'] . "</td>
                            <td>" . $row['password'] . "</td>
                            <td>" . $row['created_at'] . "</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>

<?php include("php/includes/footer.php") ?>