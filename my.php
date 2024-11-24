<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Product Cards</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .card-product {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 20px;
}

.card-product-nested-card {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card-nested {
  width: 25%;
  padding: 10px;
  text-align: center;
}

.card-nested img {
  width: 100%;
  height: 150px; /* Adjust height as needed */
  object-fit: cover;
}

.card-product-btn {
  display: block;
  margin: 10px auto;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.card-product-btn a {
  color: #fff;
  text-decoration: none;
}
  </style>
</head>
<body>
  <main class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 mb-3">
        <div class="card-product">
          <h2>Up to 60% off | Styles for Men</h2>
          <div class="card-product-nested-card">
            <div class="card-nested">
              <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PF_MF/MF-1-186-116._SY116_CB636110853_.jpg" alt="Clothing">
              <p>Clothing</p>
            </div>
            <div class="card-nested">
              <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PF_MF/MF-3-186-116._SY116_CB636110853_.jpg" alt="Footwear">
              <p>Footwear</p>
            </div>
            <div class="card-nested">
              <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/BAU/Oct/186X116_3._SY116_CB606110532_.jpg" alt="Watches">
              <p>Watches</p>
            </div>
            <div class="card-nested">
              <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PF_MF/MF-4-186-116._SY116_CB636110853_.jpg" alt="Bags & Language">
              <p>Bags & Language</p>
            </div>
          </div>
          <button class="card-product-btn"><a href="productdeail.html">see more</a></button>
        </div>
      </div>
      </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>