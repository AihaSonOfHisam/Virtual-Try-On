<?php
// Include database connection
include '../component/connect.php';

// Fetch data for stats from the database
// Example queries for the stats - you should adjust them based on your tables and data structure
$totalCategoryQuery = "SELECT COUNT(*) AS total FROM category";
$totalCategoryResult = $conn->query($totalCategoryQuery);
$totalCategory = $totalCategoryResult->fetch_assoc()['total'];

$activeUsersQuery = "SELECT COUNT(*) AS active FROM account WHERE status = 'active'";
$activeUsersResult = $conn->query($activeUsersQuery);
$activeUsers = $activeUsersResult->fetch_assoc()['active'];

$totalItemsQuery = "SELECT COUNT(*) AS total FROM item";
$totalItemsResult = $conn->query($totalItemsQuery);
$totalItems = $totalItemsResult->fetch_assoc()['total'];

$totalReviewsQuery = "SELECT COUNT(*) AS total FROM review";
$totalReviewsResult = $conn->query($totalReviewsQuery);
$totalReviews = $totalReviewsResult->fetch_assoc()['total'];

?>

<?php
// Start the session
session_start();

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="resources/css/dashboard.css">
</head>
<body>
  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="logo">Virtual Try-On Admin</div>
    <ul>
      <li><a href="index.php">Dashboard</a></li>
      <li><a href="manage-users.php">Account</a></li>
      <li><a href="manage-category.php">Category</a></li>
      <li><a href="manage-item.php">Item</a></li>
      <li><a href="manage-review.php">Review</a></li>
      <li><a href="../../user/login/logoutprocess.php" class="btn">Logout</a></li>      </ul>
  </aside>

  <!-- Main Content -->
  <main class="main-content">
    <section id="dashboard">
      <h1>Admin Dashboard</h1>
      <div class="stats">
        <div class="stat-item">
          <h3>Total Category</h3>
          <p><?php echo $totalCategory; ?></p>
        </div>
        <div class="stat-item">
          <h3>Active Users</h3>
          <p><?php echo $activeUsers; ?></p>
        </div>
        <div class="stat-item">
          <h3>Total Items</h3>
          <p><?php echo $totalItems; ?></p>
        </div>
        <div class="stat-item">
          <h3>Total Reviews</h3>
          <p><?php echo $totalReviews; ?></p>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
