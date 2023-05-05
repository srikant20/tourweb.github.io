<?php include "header.php" ?>
<div class="book">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-3 ">
                <h1 class="p-title2">Book Your trip!</h1>
            </div>
            <div class="col-md-12 f-box">
                <div class="form">
                    <form action="book_form.php" method="POST">
                        <label for="name" class='label'>Name:</label>
                        <input type="text" name="name" id="name" placeholder="Enter Your Name">

                        <label for="email" class='label'>Email:</label>
                        <input type="email" name="email" id="email" placeholder="Enter Your Email">

                        <label for="number" class='label'>Phone Number:</label>
                        <input type="number" name="number" id="number" placeholder="Enter Your Number">

                        <label for="address" class='label'>Address:</label>
                        <input type="text" name="address" id="address" placeholder="Enter Your Address">

                        <label for="place" class='label'>Where to:</label>
                        <select name="place" id="place" class="place">
                            <optgroup label="Select Place You Want to Visit">
                                <option value="place">Badrinath Temple, Uttarakhand</option>
                                <option value="place">Sun Temple, Odisha</option>
                                <option value="place">Somnath Temple Gujarat</option>
                                <option value="place">Kedarnath Temple, Uttarakhand</option>
                                <option value="place">Sanchi Stupa, Madhya Pradesh</option>
                                <option value="place">Kashi Vishwanath Temple, Uttar Pradesh</option>
                            </optgroup>
                        </select><br>

                        <label for="member" class='label'>How many:</label>
                        <input type="number" name="member" id="member" placeholder="Number Of Member">

                        <label for="a_date" class='label'>Arrivals:</label>
                        <input type="date" name="a_date" id="a_date"><br>

                        <label for="l_date" class='label'>Leaving:</label>
                        <input type="date" name="l_date" id="l_date"><br>
                        <input type="submit" value="submit" name="send" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>