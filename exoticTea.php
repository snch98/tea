<?php
$title = "Exotic Tea";
include("php/includes/header.php");
?>

<main>
  <h2>Summary</h2>
  <div class="summary">
    <img src="media/exotic-tea.jpeg" alt="Tea" class="picture">
    <div>
      <p>
        Tea itself originated in ancient <span class="italic">China</span> more than
        <span class="monospace">4,000</span> years ago. However, exotic teas
        often refer to blends or specialty teas created through creative combinations or unique
        growing conditions.
      </p>
      <p>
        <em class="bold">Exotic tea</em> blends gained prominence in the <span class="monospace">19th</span> century.
        British tea merchants, for example, created blends like <span class="italic">Earl Grey</span> (flavored with
        bergamot)
        and <span class="italic">English Breakfast</span> (a robust blend) to cater to diverse tastes.
      </p>
      <p>
        In recent years, the tea industry has seen a surge in creativity. Exotic teas
        now include rare varieties like white tea made from young leaves and buds, yellow
        tea with a unique oxidation process, and Pu-erh tea, which undergoes fermentation and aging.
      </p>
      <p>
        <em class="bold">Exotic teas</em> are deeply influenced by cultural practices. Moroccan Mint Tea
        blends green tea with fresh mint leaves, creating a refreshing and aromatic beverage.
        Chai tea from India combines black tea with spices like cardamom, cinnamon, and ginger,
        resulting in a warm and flavorful infusion.
      </p>
    </div>
  </div>

  <div class="list-of-teas">
    <h2>Kinds of exotic tea</h2>
    <ul>
      <li>Jasmine Pearl Tea</li>
      <li>Oolong Tea</li>
      <li>Masala Chai</li>
      <li>Pu-erh Tea</li>
      <li>Rooibos Tea</li>
    </ul>
  </div>

  <div class="products">
    <?php listInventoryOfTeas($conn, "exotic"); ?>
  </div>

  <div>
    <table>
      <tr>
        <th>Tea Type</th>
        <th>Origin</th>
        <th>Taste Profile</th>
      </tr>
      <tr>
        <td>Jasmine Pearl Tea</td>
        <td>China</td>
        <td>Delicate, floral, sweet, with subtle jasmine aroma</td>
      </tr>
      <tr>
        <td>Oolong Tea</td>
        <td>China, Taiwan</td>
        <td>Varied (floral, creamy, toasty, fruity), mid-way between green and black tea</td>
      </tr>
      <tr>
        <td>Masala Chai</td>
        <td>India</td>
        <td>Spicy (cinnamon, cardamom, cloves, ginger), often served with milk and sweeteners</td>
      </tr>
      <tr>
        <td>Pu-erh Tea</td>
        <td>China</td>
        <td>Earthy, woody, sometimes sweet, complex with aging</td>
      </tr>
      <tr>
        <td>Rooibos Tea</td>
        <td>South Africa</td>
        <td>Sweet, nutty, naturally caffeine-free, often blended with herbs and fruits for added flavors</td>
      </tr>
    </table>
  </div>

</main>


<?php
include("php/includes/footer.php");
?>