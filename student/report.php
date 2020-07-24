<?php include 'header.php' ?>

<body>
    <?php
    include '../connect.php';
    $query = "SELECT * FROM user where level='student'";
    $result1 = mysqli_query($connect, $query);
    $query1 = "SELECT * FROM point";
    $result2 = mysqli_query($connect, $query1);

    ?>
    <form method="post" action="">
        <div class="container shadow" style="padding: 5rem; margin-top: 2rem;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="exampleDropdown">Select Student</label>
                        <select data-live-search="true" class="form-control selectpicker" name="id_user">
                            <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>

                                <option value="<?php echo $row1[0]; ?>"><?php echo $row1[2]; ?></option>

                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdown">Select Point</label>
                        <select data-live-search="true" class="form-control selectpicker" name="id_point">
                            <?php while ($row1 = mysqli_fetch_array($result2)) :; ?>

                                <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>

                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Picture</label>
                        <input type="file" class="form-control-file" name="picture">
                    </div>
                    <div>
                        <input type="submit" name="Submit" value="SAVE"></td>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $id_user = $_POST['id_user'];
        $id_point = $_POST['id_point'];
        $picture = $_POST['picture'];
        // include database connection file
        include_once("../connect.php");

        // Insert user data into table
        $result = mysqli_query($connect, "INSERT INTO student_report(id_user,id_point,picture) VALUES('$id_user','$id_point','$picture')");

        // Show message when user added
        echo "Kenek Asw</a>";
    }
    ?>
</body>

</html>