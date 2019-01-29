$.ajax({
    url         : "statistik.json",//lokasi dokumen yang berisi data json
    type        : "GET",
    dataType    : "json",//format dokumen
    data        : {get_param : 'value'},
    success     : function(data){
        //merubah data json dari object menjadi string,
        //dan tampilkan hasilnya melalui textarea
        // document.getElementsByTagName('textarea')[0].value = JSON.stringify(data);
        document.getElementsByTagName('textarea')[0].value = data[1]['instansi_id'];
    }
});