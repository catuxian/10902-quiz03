function del(table,id){
    $.post('api/del.php',{table,id},function(){
        location.reload()
    })
}