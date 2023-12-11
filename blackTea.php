<?php
$title = "Black Tea";
include("includes/header.php");
?>

<main>
    <h2>Summary</h2>
    <div class="summary">
        <img src="media/black-tea.jpeg" alt="Tea" class="picture">
        <div>
            <p>
                <em class="bold">Black tea</em>, one of the most widely consumed teas in the world,
                has a rich history that spans centuries. It originated in <span class="italic">China</span>, where tea
                leaves
                were first discovered over <span class="monospace">4,000</span> years ago. However, it was during the
                <span class="bold italic">Ming Dynasty (1368-1644)</span> that black tea processing methods similar to
                those used today were developed.
            </p>
            <p>
                <em class="bold">Black tea</em> gained prominence in Europe during the
                <span class="monospace">17th</span> century when Dutch
                and Portuguese traders introduced it to the continent. In the
                <span class="monospace">18th</span> century,
                the British East India Company began importing black tea to England,
                making it a popular beverage among the English aristocracy.
            </p>
            <p>
                The tea trade played a significant role in global commerce and cultural
                exchange. In the <span class="monospace">19th</span> century, the British established tea plantations
                in <span class="italic">India and Sri Lanka (formerly Ceylon)</span> to meet the high demand for
                black tea. Today, these regions are renowned for their black tea production.
            </p>
            <p>
                <em class="bold">Black tea</em> has diverse varieties, including <em class="bold">Assam, Darjeeling, and
                    Earl Grey</em>,
                each with unique flavors and characteristics. It's enjoyed worldwide
                and is an integral part of various cultures and traditions, making it a
                staple in the global tea landscape.
            </p>
        </div>
    </div>


    <div class="list-of-teas">
        <h2>Kinds of black tea </h2>
        <ul>
            <li>Assam Tea</li>
            <li>Darjeeling Tea</li>
            <li>Keemun Tea</li>
            <li>Ceylon Tea</li>
            <li>Earl Gray Tea</li>
        </ul>
    </div>


    <div class="products">
        <?php listInventoryOfTeas($conn, "black"); ?>
    </div>

    <div>
        <table>
            <tr>
                <th>Tea Type</th>
                <th>Origin</th>
                <th>Taste Profile</th>
            </tr>
            <tr>
                <td>Assam Tea</td>
                <td>Assam, India</td>
                <td>Bold, brisk, malty, sometimes with a hint of caramel</td>
            </tr>
            <tr>
                <td>Darjeeling Tea</td>
                <td>Darjeeling, India</td>
                <td>Delicate, floral, muscatel, sometimes with a slightly astringent note</td>
            </tr>
            <tr>
                <td>Keemun Tea</td>
                <td>Qimen County, China</td>
                <td>Winey, fruity, floral, with a hint of smokiness</td>
            </tr>
            <tr>
                <td>Ceylon Tea</td>
                <td>Sri Lanka</td>
                <td>Bright, brisk, citrusy, can range from light and floral to bold and robust</td>
            </tr>
            <tr>
                <td>Earl Grey Tea</td>
                <td>Origin varies (commonly associated with England)</td>
                <td>Black tea infused with bergamot oil, giving it a distinct citrusy aroma and flavor</td>
            </tr>
        </table>
    </div>

</main>

<?php
include("includes/footer.php");
?>