<?php
include 'db_connect.php';

if (isset($_GET['task_id'])) {
    $task_id = $_GET['task_id'];
    
    // Update the delivery task as acknowledged
    $stmt = $conn->prepare("UPDATE delivery_tasks SET acknowledgment_status = 'received', acknowledgment_time = NOW() WHERE id = ?");
    $stmt->bind_param("i", $task_id);
    
    if ($stmt->execute()) {
        echo "Delivery has been acknowledged. Thank you!";
    } else {
        echo "Error in acknowledging the delivery.";
    }

    $stmt->close();
    $conn->close();
}
?>
