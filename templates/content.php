<div class="container">
    <br>
    <form action="" method="POST"></form>
    <label>Megyék: </label>
    <select name="Megyék">
        <option value="">--Kérjük válasszon megyét--</option>
        <?php while ($rows = mysqli_fetch_array($res)) {
        ?>
            <option value="<?php echo $rows['county']; ?> "> <?php echo $rows['county']; ?> </option>
        <?php
        }
        ?>
    </select>

  

</div>