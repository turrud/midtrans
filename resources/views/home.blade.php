<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Midtrans demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  </head>
  <body>
    <div class="container my-3">
        <h1><i class="bi bi-shop">&nbsp;</i>Store ddn</h1>

        <div class="card my-5" style="width: 18rem;">
            <img src="https://img.freepik.com/free-vector/multicolor-floral-design_1215-613.jpg?w=740&t=st=1697203300~exp=1697203900~hmac=6a475dc5c02ba9c4e61687145518a8ebaaf96306e9490e86d8f9f7d621ae1b65" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Abstra</h5>
                <p class="card-text"><i class="bi bi-emoji-smile-fill">&nbsp;</i>seni adalah murni susu</p>

                <form action="/checkout" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="qty" class="form-label">Pesan</label>
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Masukkan jumlah yang dibeli">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="no hp">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Buy &nbsp; <i class="bi bi-bag"></i></button>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>

  </body>
</html>
