<?php
$title = "Send Feedback";
$hasForm = true;
include("php/includes/header.php");
?>

<main>
    <h2>Summary</h2>
    <div>
        <img src="media/tea1.jpeg" alt="Tea" class="picture">
        <div>
            <p>If you like my page, consider leaving a feedback</p>
        </div>
    </div>

    <div class="form-wrapper">
        <form action="" class="feedback-form">
            <div class="name-country-fields">
                <div>
                    <label for="name">Your name</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <label for="country">Your country</label>
                    <input type="text" name="country">
                </div>
            </div>

            <label for="email">Email</label>
            <input type="email" id="email-field">

            <label for="age">Your age</label>
            <input type="number" min="14" max="88">

            <label for="favourite-tea">Choose your favourite tea</label>
            <select name="favourite-tea" id="">
                <option value="black-tea">Black Tea</option>
                <option value="green-tea">Green Tea</option>
                <option value="exotic-tea">Exotic Tea</option>
            </select>

            <label for="suggestions">Leave your suggestions</label>
            <textarea name="suggestions" id="suggestions" cols="30" rows="10"></textarea>

            <div>
                <p>Do you like my page?</p>

                <div class="radio-like">
                    <div>
                        <input type="radio" id="like1" name="like">
                        <label for="like1">Yes</label>
                    </div>

                    <div>
                        <input type="radio" id="like2" name="like">
                        <label for="like2">Definately</label>
                    </div>

                    <div>
                        <input type="radio" id="like3" name="like">
                        <label for="like3">Absolutely</label>
                    </div>

                    <div>
                        <input type="radio" id="like4" name="like" disabled>
                        <label for="like4">Not at all</label>
                    </div>

                </div>
            </div>

            <div>
                <input type="checkbox">
                <label for="agreement">I consent to send my feedback to Sofiia</label>
            </div>

            <div class="control-buttons">
                <button type="reset">Clear</button>
                <button type="submit">Send</button>
            </div>
        </form>
    </div>

</main>


<?php
include("php/includes/footer.php");
?>