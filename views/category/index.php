<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $item) { ?>
            <tr>
                <th scope="row"><?=$item->employeeNumber?></th>
                <td><?=$item->lastName?></td>
                <td><?=$item->firstName?></td>
                <td><?=$item->email?></td>
            </tr>
        <? } ?>
        </tbody>
    </table>
</div>