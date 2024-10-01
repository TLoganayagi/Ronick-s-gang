<?php
            $con = mysqli_connect('localhost', 'root', 'preethi123', 'books');

            if (!$con) {
                die("Database connection failed: " . mysqli_connect_error());
            }
           while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                echo "<button class='btn btn-user' onclick=\"fillEmployeeId('$id')\">$username</button>";
            }
 ?>
        <div id="content">
        <div class="form-container">
            <h1>GET BY ID </h1>
            <form method="post" action="">
                <div class="form-group">
                    <label for="mytxt1">BOOK ID</label>
                    <input type="text" name="mytxt1" id="mytxt1" class="form-control" placeholder="ENTER BOOK ID">
                </div>
                <div class="form-group">
                    <input type="submit" value="submit1" name="mysubmit" class="btn btn-secondary btn-block">
                </div>
            </form>
        </div>
</div>
<?php>
if (isset($_POST['submit1'])) {
    $id = $_POST['mytxt1'];
    $query1="select * from book_details where id ='$id'";
    $result1 = mysqli_query($con, $query1);

}
?>
    <h2>BOOKS</h2>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>BOOK ID</th>
                <th>TITLE</th>
                <th>AUTHOR</th>
                <th>GENRE</th>
                <th>PUBLICATION DATE </th>
                <th>PRICE</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['title']); ?></td>
                    <td><?php echo htmlspecialchars($row['author']); ?></td>
                    <td><?php echo htmlspecialchars($row['genre']); ?></td>
                    <td><?php echo htmlspecialchars($row['p_date']); ?></td>
                    <td><?php echo htmlspecialchars(number_format($row['price'], 2)); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

