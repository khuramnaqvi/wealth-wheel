<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="margin:0;padding:0" dir="ltr" bgcolor="#ffffff">
<table border="0" cellspacing="0" cellpadding="0" align="center" id="" style="width: 600px;border-collapse:collapse;font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;background: #ddd">
    <tbody>
        <tr>
            <td style="text-align: center;padding: 10px;background: #000;color: #fff;font-size: 22px;">
                <h4>Thanks for your cog purchase</h4>
            </td>
        </tr>
        <tr>
            <td style="padding: 0 30px;">
                <p style="margin:10px 0 10px 0;color:#565a5c;font-size:18px">Hi {{auth()->user()->name}}!</p>
                <p style="margin:10px 0 10px 0;color:#565a5c;font-size:18px">We have finished processing your order.</p>
            </td>
        </tr>
        <tr>
            <td style="padding: 0 30px;"><a href="#">[Order #{{$cog_no}}] ({{$date}})</a></td>
        </tr>
        <tr>
            <td>
                <table border="1" cellspacing="0" cellpadding="0" style="width: 540px;margin: 20px auto;">
                    <thead>
                    <tr>
                        <th scope="col" style="padding: 10px;">Product</th>
                        <th scope="col" style="padding: 10px;">Qty</th>
                        <th scope="col" style="padding: 10px;">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><p style="padding: 0 10px;">{{ $cog_no}}</p></td>
                        <td class="item-qty"><p style="text-align: center;">1</p></td>
                        <td class="item-price"><p style="text-align: center;">${{$amount}}</p></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2" class="foot-info"><p style="padding: 0 10px;">Subtotal</p></td>
                        <td class="item-price"><p style="text-align: center;">${{$amount}}</p></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="foot-info"><p style="padding: 0 10px;">Paypent Method</p></td>
                        <td class="item-price"><p style="text-align: center;">{{$payment}}</p></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="foot-info"><p style="padding: 0 10px;">Total</p></td>
                        <td class="item-price"><p style="text-align: center;">${{$amount}}</p></td>
                    </tr>
                    </tfoot>
                </table>
            </td>
        </tr>
        <tr><td style="padding: 0 30px;"><h3>Billing address</h3></td></tr>
        <tr><td><p style="border: 1px solid #000;padding: 10px;margin: 0 30px">{{auth()->user()->name}} <a href="#" style="display: block;padding-top: 10px;">{{auth()->user()->email}}</a></p></td></tr>
        <tr><td style="padding: 0 30px;"></td></tr>
        <tr><td style="padding: 30px;border-top: 2px solid #0000003b;text-align: center;"></td></tr>
    </tbody>
</table>
</body>
</html>