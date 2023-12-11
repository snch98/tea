<?php
$title = "Green Tea";
include("php/includes/header.php");
?>
<main>
    <h2>Summary</h2>
    <div class="summary">
        <img src="media/green-tea.jpeg" alt="Tea" class="picture">
        <div>
            <p>
                <em class="bold">Green tea</em> has a history that stretches back over <span
                    class="monospace">4,000</span> years,
                making it one of the oldest varieties of tea. Its origins can be traced to <span
                    class="italic">China</span>,
                where, according to legend, <span class="bold italic">Emperor Shen Nong</span> discovered tea in <span
                    class="monospace">2737</span> BCE when tea
                leaves blew into a pot of boiling water he was preparing.
            </p>
            <p>
                <em class="bold">Green tea</em> became an integral part of Chinese culture and was widely consumed for
                its potential health benefits. Over centuries, it spread to other Asian countries such
                as <span class="italic">Japan, Korea, and Vietnam,</span> each of which developed its unique varieties
                and tea traditions.
            </p>
            <p>
                In the <span class="monospace">8th</span> century, during the Tang Dynasty in China, the famous tea
                scholar Lu Yu wrote
                the <span class="bold italic">"Classic of Tea" (茶经)</span>, an influential book that documented various
                aspects of tea cultivation,
                preparation, and consumption. This work played a significant role in shaping
                the culture of tea in China and beyond.
            </p>
            <p>
                <em class="bold">Green tea</em> gained international prominence during the <span
                    class="monospace">8th</span> century when it was introduced
                to Japan by Japanese monks who had studied in China. The Japanese tea ceremony, known as
                the <span class="bold italic">"Way of Tea" or Chanoyu (茶の湯)</span>, became a highly ritualized practice,
                emphasizing aesthetics,
                manners, and etiquette.
            </p>
            <p>
                In the modern era, green tea's popularity has surged globally due to its perceived health benefits.
                Scientific studies have supported many of the traditional claims about green tea, suggesting it may
                have properties that help in preventing various illnesses.
            </p>
        </div>
    </div>

    <div class="list-of-teas">
        <h2>Kinds of green tea</h2>
        <ul>
            <li>Sencha</li>
            <li>Matcha</li>
            <li>Dragonwell (Longjing)</li>
            <li>Gunpowder Tea</li>
            <li>Rooibos Tea</li>
        </ul>
    </div>

    <div class="products">
        <?php listInventoryOfTeas($conn, "green"); ?>
    </div>


    <div>
        <table>
            <tr>
                <th>Tea Type</th>
                <th>Origin</th>
                <th>Taste Profile</th>
            </tr>
            <tr>
                <td>Sencha</td>
                <td>Japan</td>
                <td>Grassy, vegetal, bright, refreshing</td>
            </tr>
            <tr>
                <td>Matcha</td>
                <td>Japan</td>
                <td>Rich, creamy, umami, intense, vibrant green</td>
            </tr>
            <tr>
                <td>Dragonwell</td>
                <td>China</td>
                <td>Mellow, slightly sweet, toasty, smooth</td>
            </tr>
            <tr>
                <td>Gunpowder</td>
                <td>China</td>
                <td>Strong, slightly smoky, bold, brownish-yellow liquor</td>
            </tr>
            <tr>
                <td>Gyokuro</td>
                <td>Japan</td>
                <td>Sweet, umami, smooth, velvety, deep green</td>
            </tr>
        </table>
    </div>

</main>


<?php
include("php/includes/footer.php");
?>