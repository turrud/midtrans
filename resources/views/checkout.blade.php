<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Midtrans demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="{{ config('midtrans.snap_js') }}"
      data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </head>
  <body>
    <div class="container my-3">
        <h1><i class="bi bi-shop mb-4">&nbsp;</i>Store ddn</h1>

        <h5>Pesanan</h5>

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

            </table>
            <button id="pay-button" class="btn btn-dark"> <i class="bi bi-currency-dollar"></i> &nbsp; Bayar Sekarang</button>



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{ $snapToken }}', {
          onSuccess: function(result){
            /* You may add your own implementation here */
            // alert("payment success!");
            window.location.href = '/invoice/{{ $order->id }}'
            console.log(result);
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        })
      });
    </script>

  </body>
</html>
