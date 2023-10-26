<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>

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

    <!-- Product 1 -->
    <div class="d-flex align-items-center" style="height: 885px;">
        <div class="prodContainer container">
            <div class="row d-flex justify-content-center">
                <div class="imgColumn col-sm-10 col-md-8 col-lg-6 align-items-center">
                    <img class="imgProd" src="{{ asset('storage/ASUS TUF DASH F15 TUF516PE-AB73 (Front).jpg') }}" alt="ASUS TUF DASH F15 TUF516PE-AB73" width="100%" id="bigImg">

                    <div class="smallerRow row d-flex justify-content-between my-5">
                        <div class="smallerImg col">
                            <img src="{{ asset('storage/ASUS TUF DASH F15 TUF516PE-AB73 (Front).jpg') }}" alt="ASUS TUF DASH F15 TUF516PE-AB73" width="100%" class="smallImg">
                        </div>

                        <div class="smallerImg col">
                            <img src="~/images/Products/ASUS TUF DASH F15 TUF516PE-AB73 (Left).jpg" alt="ASUS TUF DASH F15 TUF516PE-AB73" width="100%" class="smallImg">
                        </div>

                        <div class="smallerImg col">
                            <img src="~/images/Products/ASUS TUF DASH F15 TUF516PE-AB73 (Right).jpg" alt="ASUS TUF DASH F15 TUF516PE-AB73" width="100%" class="smallImg">
                        </div>

                        <div class="smallerImg col">
                            <img src="~/images/Products/ASUS TUF DASH F15 TUF516PE-AB73 (Back).jpg" alt="ASUS TUF DASH F15 TUF516PE-AB73" width="100%" class="smallImg">
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-6 align-self-center">
                    <p>Home / ASUS TUF</p>
                    <h1>ASUS TUF DASH F15 TUF516PE-AB73</h1>
                    <h4>Product Details</h4>
                    <ul>
                        <li>15.6” 144Hz IPS-Type Full HD (1920x1080) display with adaptive sync</li>
                        <li>Intel Core i7-11370H processor</li>
                        <li>NVIDIA GeForce RTX 3050Ti 4GB GDDR6</li>
                        <li>8GB DDR4</li>
                        <li>512GB PCIe NVMe M.2 SSD</li>
                        <li>Windows 10</li>
                        <li>Backlit Keyboard</li>
                        <li>Eclipse Grey</li>
                    </ul>

                    <h5 class="productPrice">₱61,900</h5>
                    <p>
                        Quantity:
                    </p>

                    <div class="d-inline-flex" style="position: relative; top: 20px; left: -85px; ">
                        <form method="post" class="d-flex" asp-page-handler="AddCart" id="addToCart">
                            <input class="quanInputEveryProd mx-3" type="number" name="quantity" value="1" min="1">
                            <input type="text" name="ASUS TUF DASH F15 TUF516PE-AB73" value="ASUS TUF DASH F15 TUF516PE-AB73" hidden />
                            <button class="addToCart btn btn-lg" type="submit" id="addCart">Add to Cart</button>
                        </form>

                        <form method="post" class="d-flex" asp-page-handler="RemoveCart" id="removeToCart">
                            <input type="text" name="ASUS TUF DASH F15 TUF516PE-AB73" value="ASUS TUF DASH F15 TUF516PE-AB73" hidden />
                            <button class="addToCartSelected btn btn-lg" type="submit" id="addCartSelected">Remove from Cart</button>
                        </form>

                        <form method="post" class="d-flex" id="wishList" asp-page-handler="AddFave" id="addToFave">
                            <input type="text" name="ASUS TUF DASH F15 TUF516PE-AB73" value="ASUS TUF DASH F15 TUF516PE-AB73" hidden />
                            <button class="addToWishlist btn btn-lg" type="submit" id="addWish">Add to Wishlist</button>
                        </form>

                        <form method="post" class="d-flex" id="wishListSelected" asp-page-handler="RemoveFave" id="removeToFave">
                            <input type="text" name="ASUS TUF DASH F15 TUF516PE-AB73" value="ASUS TUF DASH F15 TUF516PE-AB73" hidden />
                            <button class="addToWishlistSelected btn btn-lg" type="submit" id="addWishSelected">Remove from Wishlist</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</body>
</html>