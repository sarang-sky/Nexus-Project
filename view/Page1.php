<h3>Add a Hotel</h3>
         <?php 
         $host_name = $_SERVER['SERVER_NAME'];
              echo $host_name;
              define(URL, $host_name);
              echo (URL);
            ?>
        <form action="<?php echo URL; ?>Week4/controller/Book/addCustomer" method="POST">
            <label>Name:</label>
            <input type="text" name="name" value="" required />
            <label>Phone_Number:</label>
            <input type="text" name="phone number" value="" required />
            <label>Email:</label>
            <input type="email" name="email" value="" />
            <label>Hotel_Name:</label>
            <input type="text" name="Hotel Name" value="" />
            <input type="submit" name="submit_add_book" value="Submit" />
        </form>
    </div>