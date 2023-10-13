<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <h5>Detail Pesanan</h5>
                <small>invoice</small>

                <table class="table">
                    <tr>
                        <td>nama</td>
                        <td>: {{ $order->name }}</td>
                    </tr>
                    <tr>
                        <td>no hp</td>
                        <td>: {{ $order->phone }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: {{ $order->address }}</td>
                    </tr>
                    <tr>
                        <td>Qty</td>
                        <td>: {{ $order->qty }}</td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>: {{ $order->total_price }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>: {{ $order->status }}</td>
                    </tr>

                    </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
