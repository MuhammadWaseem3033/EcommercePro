<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
  

           <center><h2>Product Details:</h2></center>
            Name : <h4>{{$order->name}}</h4>
            Email :<h4>{{$order->email}}</h4>
            Phone : <h4>{{$order->phone}}</h4>
            Address : <h4>{{$order->address}}</h4>
            User_id<h4>{{$order->user_id}}</h4>
            Product_id :<h4>{{$order->product_id}}</h4>
            Product_title :<h4>{{$order->product_title}}</h4>
            Quantity :<h4>{{$order->quantity}}</h4>
            Delivery_Status :<h4>{{$order->delivery_status}}</h4>
            Payment_Status :<h4>{{$order->payment_status}}</h4>
            Total Price : <h4>{{$order->price}}</h4>
            Image :<h4><img src="admin/images/{{$order->image}}" alt="" width="250px" height="250px"></h4>

          </tr>
        </tbody>
      </table>
    </div>

    </body>
</html>