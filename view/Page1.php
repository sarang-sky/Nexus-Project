<h3>Add a Book</h3>
        <form action="<?php echo URL; ?>Book/addBook" method="POST">
            <label>Book Name:</label>
            <input type="text" name="book" value="" required />
            <label>Author Name:</label>
            <input type="text" name="author" value="" required />
            <label>Description:</label>
            <input type="text" name="description" value="" />
            <input type="submit" name="submit_add_book" value="Submit" />
        </form>
    </div>