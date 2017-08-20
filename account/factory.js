app.factory("myfactory",($http,$q)=>{
    var object = {
      info : function(no){
           var pr = $q.defer();
         var url = "http://ec2-34-208-181-152.us-west-2.compute.amazonaws.com/users/"+no;
        
                
         $http.get(url).then(function(data){
             pr.resolve(data.data)
             console.log("success")
           
         },
                             function(err){
             pr.reject(err)
             console.log("error")
             
         }
         )
         return pr.promise
      }  
    }
    return object;
})