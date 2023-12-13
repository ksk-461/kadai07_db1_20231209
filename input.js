function getDel_day() {
    var del_day = new Date();
    del_day.setDate(del_day.getDate()+3); //締切日を考慮
    var yyyy = del_day.getFullYear();
    var mm = ("0"+(del_day.getMonth()+1)).slice(-2);
    var dd = ("0"+del_day.getDate()).slice(-2);
    document.getElementById("del_day").value=yyyy+'-'+mm+'-'+dd;
}

getDel_day();