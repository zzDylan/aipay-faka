尊敬的用户您好：

您在：【dylan自动发卡系统】 购买的商品：{{$order->name}} 已发货。
<br>
订单号：{{$order->trade_no}}
<br>
数量：{{$order->count}}
<br>
金额：{{$order->total_price}}
<br>
时间：{{$order->created_at}}
<br>
---------------------------------------------------------------------------------------------------------------------------
<br>
@foreach($order->cards as $card)
    {{$card->content}}<br>
@endforeach
<br>
---------------------------------------------------------------------------------------------------------------------------
<br>感谢您的惠顾，祝您生活愉快！<br>
来自 dylan自动发卡系统 -faka.51godream.com<br>