<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <style>

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        /* th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        } */
        tr:hover {
            background-color: #f5f5f5;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
        }
        .action-buttons button {
            margin: 0 5px;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
        }
        .approve-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        .reject-btn {
            background-color: #f44336;
            color: white;
            border: none;
        }
    </style>
</head>
<body>


    <?php 
        include_once'includes/header.php';

    ?>
    <h1>Admin Page</h1>
    <h2>Pending Campaigns</h2>

    <table class="table">
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Goal</th>
            <th>Action</th>
        </tr>
        
        <?php
        
        require_once 'includes/conn.inc.php';
        // Fetch all pending campaigns from the database
        $sql = "SELECT * FROM donees WHERE   status = 'pending'";
        $result = mysqli_query($conn, $sql);

        // Loop through each pending campaign and display information
// Loop through each pending campaign and display information
while ($row = mysqli_fetch_assoc($result)) {
    $campaignId = '';
    foreach ($row as $key => $value) {
        if ($key === 'campaign_id') {
            $campaignId = $value;
            break;
        }
    }
    
    $id = $row['id'];
    $title = $row['tittle'];
    $category = $row['category'];
    $goal = $row['goal'];
    

    echo '<tr>

            <td>' . $title . '</td>
            <td>' . $category . '</td>
            <td>$' . $goal . '</td>

            
            <!-- ... -->
            <form action="includes/approve.inc.php" method="POST">
                <td class="action-buttons">
                    <button name="update" class="approve-btn" value="'.$id.'">Approve</button>
                    <button class="reject-btn" onclick="rejectCampaign(<?php echo $campaignId; ?>)">Reject</button>
                </td>
            </form>

        </tr>';
}

        // Close database connection
        mysqli_close($conn);
        ?>

<script>
    function approveCampaign(campaignId) {
        console.log('Campaign approved: ' + campaignId);
        // Make an AJAX request or perform other actions with the campaign ID
    }

    function rejectCampaign(campaignId) {
        console.log('Campaign rejected: ' + campaignId);
        // Make an AJAX request or perform other actions with the campaign ID
    }
</script>

    </table>

    <script>
        // Add event listeners to the buttons
        var approveButtons = document.querySelectorAll('.approve-btn');
        var rejectButtons = document.querySelectorAll('.reject-btn');

        approveButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Handle approve button click
                console.log('Campaign approved');
            });
        });

        rejectButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Handle reject button click
                console.log('Campaign rejected');
            });
        });
    </script>
</body>
</html>
