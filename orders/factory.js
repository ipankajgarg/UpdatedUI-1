app.factory("myfactory",($http,$q)=>{
    var object = {
        getorderon : function(no){
                  
              var pr = $q.defer();
         var url = "http://ec2-34-208-181-152.us-west-2.compute.amazonaws.com/orders/user/"+8506078226+"/";
        
                
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