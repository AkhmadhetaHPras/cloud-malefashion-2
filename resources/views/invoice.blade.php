<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{ public_path().'/img/logo-light.webp' }}" style="width: 100%; max-width: 300px" />
                            </td>

                            <td>
                                Invoice #: {{ $order->id }}<br />
                                Created: {{ Carbon\Carbon::parse($order->order_date)->format('F d, Y') }}<br />
                                Due: {{ Carbon\Carbon::parse($order->delivery_date)->format('F d, Y') }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Office 505, 13 Jendral Sudirman<br />
                                South Jakarta, 12190, ID<br />
                                +1 (123) 456 7891, +44 (876) 543 2198
                            </td>

                            <td>
                                {{ $order->address->street_address }}<br />
                                {{ $order->address->city }} ,{{ $order->address->province }} , {{ $order->address->postal_code }}<br />
                                {{ $order->address->name }} | {{ $order->address->telp }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Payment Method</td>

                <td>Check #</td>
            </tr>

            <tr class="details">
                <td>COD</td>

                <td>CASH</td>
            </tr>

            <tr class="heading">
                <td>Item</td>

                <td>Subtotal</td>
            </tr>

            @foreach($order->detailorder as $i)
            <tr class="item  @if ($loop->last) last @endif">
                <td>{{ $i->variant->product->product_name }} | {{ $i->variant->size }} | &times;{{ $i->quantity }}</td>
                <td>Rp. {{ number_format($i->subtotal) }}</td>
            </tr>
            @endforeach

            <tr class="total">
                <td></td>

                <td>Total: Rp. {{ number_format($order->total) }}</td>
            </tr>

            <tr class="heading">
                <td>Note</td>

                <td></td>
            </tr>

            <tr class="details">
                <td colspan="2">{{ $order->note }}</td>
            </tr>

        </table>
    </div>
</body>

</html>