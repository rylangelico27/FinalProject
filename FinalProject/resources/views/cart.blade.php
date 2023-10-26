<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <!-- BOOTSTRAP v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand text-light" asp-area="" asp-page="/Products">ETech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-light"></span>
                </button>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto d-flex justify-content-between align-items-center">
                        <li class="navText nav-item">
                            <a class="signOutButt dropdown-item text-light" asp-area="" asp-page="/Index">Sign Out</a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    
    <div class="authorContainer m-auto">
        <h2 class="prodHead text-center" style="margin-top:100px;">Cart</h2>
    </div>

    <div class="cartCont container">
        <table class="table table-hover w-100 m-auto" style="width:auto;">
            <thead>
                <tr class="bg-danger">
                    <th class="tableHeadingProd" style="width: 45%;" colspan="2">Product</th>
                    <th class="tableHeading">Quantity</th>
                    <th class="tableHeading">Action</th>
                    <th class="tableHeading">Subtotal</th>
                </tr>
            </thead>

            <input id="productUpdated" value="@updateSuccess" hidden />
            <input id="productRemoved" value="@removeSuccess" hidden />

            <tbody>

                <tr>
                    <td style="text-align:center; width:30%;">
                        <img src="{{ asset('storage/ASUS TUF DASH F15 TUF516PE-AB73 (Front).jpg') }}" alt="ASUS TUF DASH F15 TUF516PE-AB73 (Front)" width="90%">
                    </td>
                    <td style="font-size:large; font-weight: bold;"> ASUS TUF DASH F15 TUF516PE-AB73 </td>
                    
                    <td style="text-align:center;">
                        <input class="quanInput mx-3" type="number" id="oldQuantity" name="prodQuantity" value="@userCart.quantity" min="1" hidden />
                    </td>
                    
                    <td style="text-align:center; width: 20%;">
                        <div class="d-flex justify-content-center">
                            <form method="post" asp-page-handler="Update" class="d-flex justify-content-start">
                                <input name="@userCart.productName" value="@userCart.productName" hidden>
                                <input class="quanInput mx-3" type="number" id="newQuantity" name="prodQuantity" value="@userCart.quantity" min="1"
                                onchange="enableBtn()" style="position: relative; left: -145px;">
                                <button class="removeToWish btn btn-danger" id="updateBtn" type="submit" style="position: relative; left: -50px;" disabled>Update</button>
                            </form>

                            <form method="post" asp-page-handler="Remove" style="position: relative; left: -25px;">
                                <input name="@userCart.productName" value="@userCart.productName" hidden>
                                <button class="removeToWish btn btn-danger " type="submit">Remove</button>
                            </form>
                        </div>
                    </td>
    =
                    <td style="text-align:center; font-weight: bold; font-size: large;"> ₱ 50,000.00 </td>
                </tr>

            </tbody>
        </table>

        <div class="totalAmountTB d-flex justify-content-end">
                    <table class="table ">
                        <thead>
                            <tr class="bg-danger" style="height:auto;">
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td style="text-align:left; font-size: large;">Subtotal</td>
                                <td style="text-align:right; font-size: large;">₱ 50,000.00</td>
                            </tr>

                            <tr>
                                <td style="text-align:left; font-size: large;">Shipping Fee</td>
                                <td style="text-align:right; font-size: large;">₱ 200.00</td>
                            </tr>

                            <tr>
                                <td style="font-size: large; font-weight: bold; text-align:left;">Amount To Pay</td>
                                <td style="font-size: large; font-weight: bold; text-align:right;">₱ 50,200.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end mb-5">
                    <form method="post">
                        <button class="checkOut btn btn-danger" type="submit">Proceed to Checkout&#8594;</button>
                    </form>
                </div>

    </div>
    
</body>
</html>