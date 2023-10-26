<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="adminCMS.css"> -->

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

    <div class="m-auto">
        <h2 class="prodHead text-center" style="margin-top:100px;">Content Management System</h2>
    </div>

    <div class="container mt-5 d-flex justify-content-end">
        <button type="button" class="btn btn-primary btn-md">+ New Product</button>
    </div>

    <div class="container d-flex justify-content-center align-items-center mt-4 text-center">
        <table class="table table-hover fs-5">
            <tr class="table-info">
                <th class="" style="width: 45%;" colspan="2">Product</th>
                <th class="" colspan="3">Action</th>
            </tr>

            <tr class="">
                <td><img src="images/Products/ASUS ROG STRIX G15 G513IC-EB73 (Front).jpg" width="90%"></td>
                <td>ASUS ROG STRIX G15 G513IC-EB73</td>
                <td>
                    <button type="button" class="btn btn-warning btn-md mx-2">View</button>
                    <button type="button" class="btn btn-primary btn-md mx-2">Update</button>
                    <button type="button" class="btn btn-danger btn-md mx-2">Remove</button>
                </td>
            </tr>
        </table>
    </div>

    <!-- BOOTSTRAP v5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
       
</body>
</html>