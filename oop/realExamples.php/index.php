<?php 
require_once 'App/App.php';

// echo $request->Get('name');
// if($request->CheckPost('name') && $request->CheckMethod() == 'POST'){
//     echo $request->Clean($request->Post('name'));
// }else{
//     echo "error" ;
// }


// $session->set("name" , 'ahmed');
// echo $session->getValue('name');

// $session->emptySession("name");

// echo $session->getValue('name');

## test select all
// $data = $mysql->SelectAll("users");

##test select one
// if($request->CheckGet('id') && $request->CheckMethod()=='GET'){
//     $id = $request->Get('id');
//     $data = $mysql->SelectOne("users" ,$id);
//     echo "<pre>";
//     print_r($data);
// }else{
//     echo "Method Not allowed";
// }

##test select Where

// echo $mysql->Insert("users" , "`name`,`email`" , "said,said@s.com"); 
echo $mysql->Update("users" , "`name`,`email`", "aa33,a3@a", "id=1");
?>