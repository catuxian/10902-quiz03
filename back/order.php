<style>
.ord-header,.ord-item{
    display:flex;
}
.ord-header div,.ord-item div{
    width:14.7%;
    padding:3px;
    background:#ccc;
    text-align:center;
    color:black;
}
.ord-list{
    height:420px;
    overflow:auto;
    width:100%;
}
.ord-item div{
    background:initial;
    color:white;
}
</style>

<div class="rb tab" style="width:98%">
    <div class="ct">訂單清單</div>
    <div class="ord-header">
        <div>訂單編號</div>
        <div>電影名稱</div>
        <div>日期</div>
        <div>場次時間</div>
        <div>訂購數量</div>
        <div>訂購位置</div>
        <div>操作</div>
    </div>
    <div class="ord-list">
    <?php
    $ords=$Orders->all(" order by num desc");
    foreach($ords as $ord){
    ?>
        <div class="ord-item">
            <div><?=$ord['num'];?></div>
            <div><?=$ord['movie'];?></div>
            <div><?=$ord['date'];?></div>
            <div><?=$ord['session'];?></div>
            <div><?=$ord['qt'];?></div>
            <div><?=$ord['seats'];?></div>
            <div><button onclick="del('orders',<?=$ord['id'];?>)">刪除</button></div>
        </div>
        <hr>
        <?php

        }
        ?>        
    </div>
</div>
<script>
function del(table,id){
    $.post('api/del.php',{table,id},function(){
        location.reload()
    })
}
</script>
