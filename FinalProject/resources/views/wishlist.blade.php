<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>

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
        <h2 class="prodHead text-center" style="margin-top:100px;">Wishlist</h2>
    </div>

    <div class="cartCont container">
        <table class="table table-hover w-75 m-auto" style="width:auto;">
            <thead>
                <tr class="bg-danger">
                    <th class="tableHeadingProd" style="width: 70%;" colspan="2">Product</th>
                    <th class="tableHeading">Action</th>
                </tr>
            </thead>

            <input id="productRemovedFromWish" value="@removeSuccess" hidden />

            <tbody>
                <tr>
                    <td style="text-align:center; width:30%;">
                        <img src="{{ asset('storage/ASUS TUF DASH F15 TUF516PE-AB73 (Front).jpg') }}" alt="ASUS TUF DASH F15 TUF516PE-AB73" width="90%">
                    </td>
                    <td style="font-size:large;"> ASUS TUF DASH F15 TUF516PE-AB73 </td>
                    <td style="text-align:center;">
                        <form method="post">
                            <input name="@wish.productName" value="@wish.productName" hidden>
                            <button class="removeToWish btn btn-danger" type="submit">Remove from Wishlist</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</body>
</html>