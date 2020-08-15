@extends('layouts.app_master_frontend')
@section('content')
<div class="container">
    <?php
        $content = Cart::content();
    ?>
    <div class="invoice-box" align="center"><h2>Invoice</h2></div>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{ asset('frontend/dist/img/logoxwatchinvoice.png')}}" style="width:100%; max-width:300px;">
                            </td>
                            <td>
                            Date: {{$order_by_info -> OrderDate}}.
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
                                Xwatchluxury<br>
                                Số 318 - Phố Huế<br>
                                Q. Hai Bà Trưng - TP Hà Nội
                            </td>
                            <td>
                                Điện thoại : 0961.222.107<br>
                                Hotline : 088.888.2345<br>
                                Email: xwatchluxury@gmail.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Thông tin khách hàng
                </td>
                
                <td>
                    Thông tin giao hàng
                </td>
            </tr>
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <p>{{$order_by_info -> Customername}}</p>
                                <p>{{$order_by_info -> Customeraddress}}</p>
                                <p>{{$order_by_info -> Customerphone}}</p>
                                <p>{{$order_by_info -> Customeremail}}</p>
                            </td>
                            <td>
                                <p>{{$order_by_info -> RecipientName}}</p>
                                <p>{{$order_by_info -> RecipientAddress}}</p>
                                <p>{{$order_by_info -> RecipientPhone}}</p>
                                <p>{{$order_by_info -> RecipientEmail}}</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Item
                </td>
                <td>
                    Price
                </td>
            </tr>
            @foreach($content as $v_content)
            <tr class="item">
                <td>
                    {{ $v_content->qty }} x {{ $v_content->name }}
                </td>
                <td>
                <?php 
                    $subtotal = $v_content->price * $v_content->qty;
                    echo number_format( $subtotal).' '.'$';
                ?>
                </td>
            </tr>
            @endforeach
            <tr class="total">
                <td></td>
                <td>
                Total: {{ Cart::priceTotal() }} $
                </td>
            </tr>
        </table>
    </div>
    <div class="invoice-box" align="center">
        <form action="{{ URL::to('save_order') }}" method="post">
        {{ csrf_field() }}
        <button type="submit" name="Place_order" class="btn btn-primary btn-sm">Đặt Hàng</button>
        </form> 
    </div>
</div>
@stop