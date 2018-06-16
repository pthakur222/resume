var download = require('download-file')
var request=require("request");


var url = "http://priyankathakur.in/archive.zip";
var url1 = "http://priyankathakur.in/db_backup.sql";

var options = {
    directory: "zipfolder",
    filename: "archive.zip"
}

request.get("http://priyankathakur.in/zip.php",function(error,response,body){
           if(error){
                 console.log(error);
           }else{

             download(url, options, function(err){
                 if (err) throw err
                 console.log("meow")
             })
         }
});

request.get("http://priyankathakur.in/dbConnect.php",function(error,response,body){
           if(error){
                 console.log(error);
           }else{

             download(url1, options, function(err){
                 if (err) throw err
                 console.log("meowskdcnsk")
             })
         }
});
