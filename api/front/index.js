
var obj = new XMLHttpRequest ;
obj.open("GET" , "http://localhost/api/select_all.php")
obj.send();

//should sure that readystate = 4 and status code = 200
//readystate from 0 to 4 
/*
0->request not intialized 
1->request has been set up
2-request has been sent
3-request is in process
4-request is complete
*/

obj.addEventListener("readystatechange" , function(){

    if(obj.status == 200 && obj.readyState == 4){
        console.log(JSON.parse(obj.response));
    }
});


