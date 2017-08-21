app.controller("myctrl",($scope,myfactory)=>{
   
    $scope.myorder = (check)=>{
         var mobilenumber = 8506078226;
        var promise = myfactory.getorderon(mobilenumber);
        
        if(check=="ongoing"){
             
            promise.then(function(data){
        console.log(data);
             var filterdata = data.filter((obj)=>{
                            return obj.IsDelivered == false;
                            });
             console.log(filterdata)
        $scope.orders = filterdata;
      },function(err){
  
    } ); 
        }
        else if(check=="delivered"){
              
            promise.then(function(data){
        console.log(data);
             var filterdata = data.filter((obj)=>{
                            return obj.IsDelivered == true;
                            });
             console.log(filterdata)
        $scope.orders = filterdata;
      },function(err){
  
    } );
        }
        else{
               promise.then(function(data){
        console.log(data);
             var filterdata = data.filter((obj)=>{
                            return obj.IsDelivered == false;
                            });
             console.log(filterdata)
        $scope.orders = filterdata;
      },function(err){
  
    } )  
        }
        
    }
     $scope.myorder();
})