<?php require APPROOT . '/views/inc/header.php'; ?>

<div style="padding-top: 50px; padding-left: 50px;">
    <form action="<?php echo URLROOT; ?>/emails/new" method="POST">
        <h4>Filter by email-provider</h4>
        <?php foreach ($data['emailProviders'] as $emailProviders) : ?>
            <tr style="border-bottom: 1px solid grey">
                <input style="height: 30px; width: 90px;" type="submit" id="filterByDomain" name="filterByDomain" value="<?php echo $emailProviders; ?>" formaction="<?php echo URLROOT; ?>/emails/filterByDomain">
            </tr>
        <?php endforeach; ?>

        <h4>Search Email address</h4>
        <input style="height: 30px;" type="text" id="searchEmail" name="searchEmail">
        <input style="height: 30px; width: 90px;" type="submit" id="searchByEmail" name="searchByEmail" formaction="<?php echo URLROOT; ?>/emails/searchByEmail">

        <hr style="margin-top: 20px;">
        <button style="height: 30px;" type="submit" id="sortByName" name="sortBy" value="sortByName" formaction="<?php echo URLROOT; ?>/emails/sortByName">Sort by name</button>
        <button style="height: 30px;" type="submit" id="sortByDate" name="sortBy" value="" formaction="<?php echo URLROOT; ?>/emails/sortByDate">Sort by date</button>
        <button style="height: 30px;" type="submit" id="sortByDate" name="sortBy" value="" formaction="<?php echo URLROOT; ?>/emails/deleteSelected">Delete selected</button>
        <button style="height: 30px;" type="submit" id="sortByDate" name="sortBy" value="" formaction="<?php echo URLROOT; ?>/emails/exportToCSV">Export selected to CSV</button>
        <hr style="margin-top: 20px;">
        <table style="border-collapse: collapse;">
            <tr>
                <th style="width: 40px;">#</th>
                <th style="width: 250px">Email</th>
                <th style="width: 150px">Date</th>
                <th style="width: 150px">DELETE/CSV</th>
            </tr>
            <?php
            $count = 0;
            foreach ($data['emails'] as $email) : $count++; ?>
                <tr style="border-bottom: 1px solid grey">
                    <td><?php echo $count; ?></td>
                    <td><?php echo $email->email; ?></td>
                    <td><?php echo $email->date; ?></td>
                    <td><input type="checkbox" id="line<?php echo $count; ?>" name="selected[]" value="<?php echo $email->email; ?>"></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </form>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>