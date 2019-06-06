<?php

	session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BassTicket</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
</head>

<body>
    <?php include 'includes/nav.inc.php'; ?>
    <div class="features-clean">
        <div class="container">
            <div class="text-center intro">
                <h2 class="text-center">bassTicket</h2><a id="linkHeaderTiles" href="createTicket.php" style="font-size: 20px;">Create Ticket<i class="fa fa-plus" style="margin-left: 10px;"></i></a></div>
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-ticket icon" id="iconsFeatures"></i>
                    <h3 id="headerTiles" class="name"><a id="linkHeaderTiles" href="unsolvedTickets.php">Unsolved Tickets</a></h3>
                    <p class="description">You have 0 unsolved tickets.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon" id="iconsFeatures"></i>
                    <h3 class="name"><a id="linkHeaderTiles" href="openTickets.php">Open Tickets</a></h3>
                    <p class="description">You have 0 open tickets.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-list-alt icon" id="iconsFeatures"></i>
                    <h3 class="name"><a id="linkHeaderTiles" href="approvalTickets.php">Tickets for Approval</a></h3>
                    <p class="description">You have 0 pending tickets.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-archive icon" id="iconsFeatures"></i>
                    <h3 class="name"><a id="linkHeaderTiles" href="archiveTickets.php">Archived Tickets</a></h3>
                    <p class="description">You have 0 archived tickets.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-check icon" id="iconsFeatures"></i>
                    <h3 class="name"><a id="linkHeaderTiles" href="solvedTickets.php">Solved Tickets</a></h3>
                    <p class="description">You have 0 solved tickets.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-user-plus icon" id="iconsFeatures"></i>
                    <h3 class="name"><a id="linkHeaderTiles" href="adminTools.php">Administrator Tools</a></h3>
                    <p class="description">Users, delete tickets, etc...</p>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>