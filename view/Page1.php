<h3>Add a Book</h3>
        <form action="<?php echo URL; ?>Book/addBook" method="POST">
            <label>Name:</label>
            <input type="text" name="name" value="" required />
            <label>Phone Number:</label>
            <input type="text" name="phone number" value="" required />
            <label>Email:</label>
            <input type="email" name="email" value="" />
            <label>Hotel Name:</label>
            <input type="text" name="Hotel Name" value="" />
            <input type="submit" name="submit_add_book" value="Submit" />
        </form>
    </div>