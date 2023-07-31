<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>

	 

      <div class="content-wrapper text-center">

        <?php echo "
          <div class='callout callout-success text-center'><p> <h2>Your order is placed successfully</h2></p>
          </div>
          ";?> 
        <?php
        try{
            $id = $_SESSION['user'] ;
          $conn = $pdo->open();
          $stmt = $conn->prepare("DELETE FROM cart where user_id=$id");
				$stmt->execute();
          
        }
        catch(PDOException $e)
        {
            echo"There is some problem : " .$e->getMessage() ; 
        } 
        ?>
      </div>
  
  	


      <?php include 'includes/footer.php'; ?>
</div>	


<?php include 'includes/scripts.php'; ?>
</body>
</html>